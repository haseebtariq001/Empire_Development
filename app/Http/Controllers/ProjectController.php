<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Unit_project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Unit_project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make(
            $request->all(),
            [
                'name' => ['required'],
                'location' => ['required'],
                'total_floor' => ['required'],
                'total_units' => ['required'],
                'image' => ['required'],
                'booking_percentage' => ['required'],
            ]
        );
        if ($validator->fails()) {
            $messages = $validator->getMessageBag();

            return redirect()->back()->with('error', $messages->first());
        }
        if ($request->hasFile('image')) {
            $file_name = time() . "_" . $request->file('image')->getClientOriginalName();
            $image = upload_file($request, 'image', $file_name, 'project_images');
        }
        $project = Unit_project::create([
            'name' => $request->name,
            'total_floor' => $request->total_floor,
            'total_units' => $request->total_units,
            'location' => $request->location,
            'launch_date' => $request->launch_date,
            'booking_percentage' => $request->booking_percentage,
            'completion_percentage' => $request->completion_percentage,
            'installment_duration' => $request->installment_duration,
            'installment_percentage' => $request->installment_percen,
            'admin_fee' => $request->admin_fee,
            'image_file' => $image['url'],
            'slug' => str_slug($request->name),
        ]);
        if (!$project) {
            return redirect()->back()->with('error', 'Something Went wrong!');
        }
        return redirect()->back()->with('success', 'Successfully Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($project_id)
    {
        $project = Unit_project::find($project_id);
        if (Auth::user()->can('project show')) {
            if ($project) {
                $units = Unit::where('unit_project_id', $project->id)
                    ->when(Auth::user()->type === 'company', function ($query) {
                        $query->withTrashed();
                    })
                    ->orderBy('unit_no', 'asc')
                    ->get();
            }
            return view('projects.show', compact('project', 'units'));
        } else {
            return redirect()->back()->with('error', __('Permission Denied.'));
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Unit_project::find($id);
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $project_id)
    {
        if (Auth::user()->can('project edit')) {

            $validator = \Validator::make(
                $request->all(),
                [
                    'name' => ['required'],
                    'location' => ['required'],
                    'total_floor' => ['required'],
                    'total_units' => ['required'],
                    'booking_percentage' => ['required'],
                ]
            );
            if ($validator->fails()) {
                $messages = $validator->getMessageBag();

                return redirect()->back()->with('error', $messages->first());
            }
            $project = Unit_project::find($project_id);
            if ($request->hasFile('image')) {
                $file_name = time() . "_" . $request->file('image')->getClientOriginalName();
                $image = upload_file($request, 'image', $file_name, 'project_images');
                $project->update([
                    'image_file' => $image['url'],
                ]);
            }
            $path = $path ?? null;
            $is_updated = $project->update([
                'name' => $request->name,
                'total_floor' => $request->total_floor,
                'total_units' => $request->total_units,
                'location' => $request->location,
                'launch_date' => $request->launch_date,
                'booking_percentage' => $request->booking_percentage,
                'completion_percentage' => $request->completion_percentage,
                'installment_duration' => $request->installment_duration,
                'installment_percentage' => $request->installment_percen,
                'admin_fee' => $request->admin_fee,
                'slug' => str_slug($request->name),
            ]);
            if (!$is_updated) {
                return redirect()->back()->with('error', 'Something went!');
            }
            return redirect()->back()->with('success', __('Project Updated Successfully!'));
        } else {
            return redirect()->back()->with('error', 'permission Denied');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Auth::user()->can('project edit')) {
            return redirect()->route('projects.index')->with('error', __("You can't Delete Project!"));
        }
        $project = Unit_project::find($id)->delete();
        if ($project) {
            return redirect()->route('projects.index')->with('success', 'Deleted!');
        }
        return redirect()->back()->with('error', 'Something went wrong, please try again!');
    }
    public function fetch_units($project_id){
        $units = Unit::where('unit_project_id', $project_id)->where('status', 'Available')->where('is_eoi', false)->get();
        return response()->json($units);
    }
}
