<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Agency;
use App\Models\File;
use App\Models\Folder;
use App\Models\Unit_project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use ZipArchive;
use setasign\Fpdi\Fpdi;


class MarketingController extends Controller
{
    public function get_project_folders($slug)
    {
        $project = Unit_project::where('slug', $slug)->first();
        $folders = Folder::where('unit_project_id', $project->id)->where('parent_id', '=', null)->get();
        return view('projects.marketing.index', compact('folders', 'project'));
    }

    public function create_folder($id)
    {
        $project = Unit_project::find($id);
        return view('projects.marketing.create-folder', compact('project'));
    }

    public function edit_folder($id)
    {
        $folder = Folder::find($id);
        return view('projects.marketing.create-folder', compact('folder'));
    }

    public function update_folder(Request $request, $id)
    {
        $folder = Folder::find($id);
        $validator = \Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'folder_type' => 'required',
            ]
        );
        if ($validator->fails()) {
            $messages = $validator->getMessageBag();
            return redirect()->back()->with('error', $messages->first());
        }
        $is_updated = $folder->update([
            'unit_project_id' =>  $request->project_id,
            'name' => $request->name,
            'folder_type' => $request->folder_type,
        ]);
        if (!$is_updated) {
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }

        return redirect()->back()->with('sucess', 'Updated');
    }

    public function store_folder(Request $request)
    {

        $project = Unit_project::find($request->project_id);
        $validator = \Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'folder_type' => 'required',
            ]
        );
        if ($validator->fails()) {
            $messages = $validator->getMessageBag();

            return redirect()->back()->with('error', $messages->first());
        }
        $is_created = Folder::create([
            'unit_project_id' =>  $request->project_id,
            'name' => $request->name,
            'folder_type' => $request->folder_type,
        ]);
        if (!$is_created) {
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }

        return redirect()->back()->with('sucess', 'Added');
    }

    public function get_files($folder_id)
    {
        $folder = Folder::find($folder_id);
        $files = File::where('folder_id', $folder_id)->get();

        // Retrieve child folders of the current folder ($folder_id)
        $childFolders = Folder::where('parent_id', $folder_id)->get();

        return view('projects.marketing.show', compact('files', 'folder', 'childFolders'));
    }


    public function create_file($folder_id)
    {
        $folder = Folder::find($folder_id);
        return view('projects.marketing.create-file', compact('folder'));
    }

    public function store_files(Request $request)
    {
        $folder = Folder::find($request->folder_id);
        $validator = \Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'file_path' => 'required',
            ]
        );
        if ($validator->fails()) {
            $messages = $validator->getMessageBag();

            return redirect()->back()->with('error', $messages->first());
        }
        if ($request->hasFile('file_path')) {
            $file_name = time() . "_" . $request->file_path->getClientOriginalName();

            $file = upload_file($request, 'file_path', $file_name, 'marketing-material/' . $folder->project->name . '/' . $folder->name);

            $file = $file['url'];
        }
        $is_created = File::create([
            'file_path' =>  $file,
            'name' => $request->name,
            'folder_id' => $request->folder_id,
        ]);
        if (!$is_created) {
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }

        return redirect()->back()->with('sucess', 'Added');
    }
    public function download_zip($folderId)
    {
        $folder = Folder::find($folderId);
        $files = Storage::files('uploads/marketing-material/' . $folder->project->name . '/' . $folder->name);
        if (empty($files)) {
            return redirect()->back()->with('error', 'Folder is Empty');
        }

        $zip_file_name =  $folder->name . '.zip';
        $zip = new ZipArchive();
        if ($zip->open($zip_file_name, ZipArchive::CREATE) === TRUE) {
            $count = 0;

            foreach ($files as $image) {
                $output_path = $this->processFile($folder, $image, $count);
                $zip->addFile($output_path, basename($image));
            }

            $zip->close();
            return $this->downloadZipFile($zip_file_name);
        }
    }

    private function processFile($folder, $image, &$count)
    {
        $path = storage_path('app/public/' . $image);
        $output_path = '';

        if ($folder->folder_type == 'images') {
            $output_path = $this->process_image_file($folder, $path, $count);
        } elseif ($folder->folder_type == 'files') {
            $output_path = $this->process_pdf_file($folder, $path, $count);
        }

        // dd($output_path);
        return $output_path;
    }

    private function process_image_file($folder, $path, &$count)
    {
        $empire_logo_path = public_path('assets/images/logo/ED Logo.png');
        $login_user = Auth::user();
        $image_file = Image::make($path);
        $empire_logo = Image::make($empire_logo_path);

        $percentage = 10;

        $main_width = $image_file->width();
        $main_height = $image_file->height();

        $logo_width = ($main_width * $percentage) / 100;
        $logo_height = ($main_height * $percentage) / 100;

        $empire_logo->resize($logo_width, $logo_height);

        $image_file->insert($empire_logo, 'top-left', 10, 10);

        if ($login_user->type == 'agency') {
            $agency = Agency::where('user_id',  $login_user->id)->first();
        } elseif ($login_user->type == 'agent') {
            $agent = Agent::where('user_id',  $login_user->id)->first();
            $agency = Agency::where('id', $agent->agency_id)->first();
        }
        if (isset($agency)) {
            $logo2 = Image::make(get_file('uploads/logo/agency-logo/' . $agency->logo));
            $logo2->resize($logo_width, $logo_height);
            $image_file->insert($logo2, 'top-right', 10, 10);
        }

        $modifiedImagePath = storage_path('app/public/uploads/marketing-material/' . $folder->project->name . '/modified/modifies_' . $count . '.png');
        $image_file->save($modifiedImagePath);

        $count++;

        return $modifiedImagePath;
    }

    private function process_pdf_file($folder, $path, &$count)
    {
        $empire_logo_path = public_path('assets/images/logo/ED Logo.png');
        $login_user = Auth::user();
        $pdf = new Fpdi();
        for ($page = 1; $page <= $pdf->setSourceFile($path); $page++) {
            $templateId = $pdf->importPage($page);
            $pdf->AddPage();
            $pdf->useTemplate($templateId, 0, 0);
            $pdf->Image($empire_logo_path, 10, 5, 30);

            // if ($login_user->type == 'agency') {
            //     $agency = Agency::where('user_id',  $login_user->id)->first();
            // } elseif ($login_user->type == 'agent') {
            //     $agent = Agent::where('user_id',  $login_user->id)->first();
            //     $agency = Agency::where('id', $agent->agency_id)->first();
            // }
            // if (isset($agency)) {
            //     $logo2 = image_storage_path('agencies_logo', $agency->logo);
            //     $pdf->Image($logo2, 180, 5, 10);
            // }
        }

        $output_path = storage_path('app/public/uploads/marketing-material/' . $folder->project->name . '/modified/modifies_' . $count . '.pdf');
        $pdf->Output($output_path, 'F');

        $pdf->close();
        $count++;

        return $output_path;
    }

    private function downloadZipFile($zip_file_name)
    {
        $headers = [
            'Content-Type' => 'application/zip',
            'Content-Disposition' => 'attachment; filename="' . $zip_file_name . '"',
        ];

        return response()->stream(
            function () use ($zip_file_name) {
                readfile($zip_file_name);
                unlink($zip_file_name);
            },
            200,
            $headers
        );
    }

    public function download_pdf()
    {

        $path = public_path('assets/files/broucher/brochure.pdf');
        if (file_exists($path)) {
            return response()->download($path);
        } else {
            dd("File not found at: " . $path);
        }
    }
}
