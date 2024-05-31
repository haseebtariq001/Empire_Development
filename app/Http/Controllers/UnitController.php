<?php

namespace App\Http\Controllers;

use App\Exports\UnitExport;
use App\Imports\UnitsImport;
use App\Models\ClientPurchase;
use App\Models\ClientUnit;
use App\Models\Commission;
use App\Models\EmailTemplate;
use App\Models\InstallmentPlan;
use App\Models\Unit;
use App\Models\Unit_project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Account\Entities\Payment;
use setasign\Fpdi\Fpdi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug)
    {
        $project = Unit_project::where('slug', $slug)->first();
        return view('units.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::user()->can('project create')) {
            return redirect()->back()->with('error', 'Permission Denied');
        }
        $unit_plan = null;
        $key_plan = null;

        $validator = Validator::make($request->all(), [
            'unit_no' => 'required',
            'unit_type' => 'required',
            'floor_number' => 'required',
            'selling_price' => 'required',
            'status' => 'required',
            'key_plan' => 'mimes:jpeg,png|max:2048',
            'unit_plan' => 'mimes:jpeg,png|max:2048',
        ]);

        if ($validator->fails()) {
            $messages = $validator->getMessageBag();

            return redirect()->back()->with('error', $messages->first());
        }
        
        $project = Unit_project::find($request->project_id);
        if (!$project) {
            return redirect()->back()->with('error', 'Project not found');
        }
        if ($request->hasFile('key_plan')) {
            $file_name = time() . "_" . $request->key_plan->getClientOriginalName();
            $key_plan_image = upload_file($request, 'key_plan', $file_name, 'unit_images/floor-plans');
            $key_plan = $key_plan_image['url'];
        }

        if ($request->hasFile('unit_plan')) {
            $file_name = time() . "_" . $request->unit_plan->getClientOriginalName();
            $unit_image = upload_file($request, 'unit_plan', $file_name, 'unit_images/floor-plans');
            $unit_plan = $unit_image['url'];
        }

        $is_unit_created = Unit::create([
            'unit_project_id' => $request->project_id,
            'unit_no' => $request->unit_no,
            'unit_type' => $request->unit_type,
            'size' => $request->size,
            'block_no' => $request->block_no,
            'apartment_view' => $request->apartment_view,
            'apartment_type' => $request->apartment_type,
            'floor_number' =>  $request->floor_number,

            'area' => $request->area,
            'selling_price' => $request->selling_price,
            'parking' => $request->parking,
            'status' => $request->status,
            'key_plan' => $key_plan,
            'unit_plan' => $unit_plan,
        ]);

        if (!$is_unit_created) {
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
        $installment = InstallmentPlan::create([
            'unit_id' => $is_unit_created->id,
            'down_payment' => $request->on_booking,
            'installment_amount' => $request->on_completion,
            'completion_amount' => $request->installment,
        ]);
        if (!$installment) {
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }

        return redirect()->back()->with('success', 'Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = '';
        if (Auth::user()->type == 'company') {
            $unit = Unit::withTrashed()->where('id', $id)->first();
        } else {
            $unit = Unit::where('id', $id)->first();
        }
        if ($unit->status == 'Sold') {
            $client_unit = ClientUnit::where('unit_id', $unit->id)->where('is_deposit', true)->first();
            $created_by = $client_unit->client->created_by;
            $user = User::find($created_by);
        }
        return view('units.show', compact('unit', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug, $unit_no)
    {
        $project = Unit_project::where('slug', $slug)->first();
        if (Auth::user()->type == 'company') {
            $unit = Unit::withTrashed()->where('unit_project_id', $project->id)->where('unit_no', $unit_no)->first();
        } else {
            $unit = Unit::where('unit_project_id', $project->id)->where('unit_no', $unit_no)->first();
        }
        return view('units.edit', compact('unit', 'project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!Auth::user()->can('project edit')) {
            return redirect()->back()->with('error', 'Permission Denied');
        }

        $validator = Validator::make($request->all(), [
            'unit_no' => 'required',
            'unit_type' => 'required',
            'floor_number' => 'required',
            'selling_price' => 'required',
            'status' => 'required',
            'key_plan' => 'mimes:jpeg,png|max:2048',
            'unit_plan' => 'mimes:jpeg,png|max:2048',
        ]);

        if ($validator->fails()) {
            $messages = $validator->getMessageBag();

            return redirect()->back()->with('error', $messages->first());
        }
        if (Auth::user()->type == 'company') {
            $unit = Unit::withTrashed()->find($id);
        } else {
            $unit = Unit::find($id);
        }
        if (!$unit) {
            return redirect()->back()->with('error', 'Unit not found');
        }
        if ($request->hasFile('key_plan')) {
            $file_name = time() . "_" . $request->key_plan->getClientOriginalName();
            $unit_image = upload_file($request, 'key_plan', $file_name, 'unit_images/floor-plans');
            $unit->key_plan = $unit_image['url'];
        }

        if ($request->hasFile('unit_plan')) {
            $file_name = time() . "_" . $request->unit_plan->getClientOriginalName();
            $key_plan_image = upload_file($request, 'unit_plan', $file_name, 'unit_images/floor-plans');
            $unit->unit_plan = $key_plan_image['url'];
        }

        $is_unit_updated = $unit->update([
            'project_id' => $unit->project_id,
            'unit_no' => $request->unit_no,
            'unit_type' => $request->unit_type,
            'size' => $request->size,
            'block_no' => $request->block_no,
            'apartment_view' => $request->apartment_view,
            'apartment_type' => $request->apartment_type,
            'floor_number' =>  $request->floor_number,
            'area' => $request->area,
            'selling_price' => $request->selling_price,
            'parking' => $request->parking,
            'status' => $request->status,
        ]);

        $installment = InstallmentPlan::where('unit_id', $id)->firstOrCreate(
            ['unit_id' => $id],
            [
                'down_payment' => $request->on_booking,
                'installment_amount' => $request->on_completion,
                'completion_amount' => $request->installment,
            ]
        );


        if (!$is_unit_updated) {
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }

        return redirect()->back()->with('success', 'Updated!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Auth::user()->can('project delete')) {
            return response()->json(['error' => __('Permission denied.')], 401);
        }

        $is_unit_deleted = Unit::where('id', $id)->delete();
        if ($is_unit_deleted) {
            return back()->with('success', 'Unit Hide Successfully!');
        }
        return back()->with('error', 'Something went wrong, please try again!');
    }

    public function restore($id)
    {

        $is_unit_restore = Unit::withTrashed()->find($id)->restore();
        if ($is_unit_restore) {
            return back()->with('success', 'Visible Successfully!');
        }
        return back()->with('error', 'Something went wrong, please try again!');
    }

    public function fileImportExport($id)
    {
        if (Auth::user()->can('unit import')) {
            $project = Unit_project::find($id);
            return view('units.import', compact('project'));
        }
        return response()->json(['error' => __('Permission denied.')], 401);
    }

    public function fileExport($id)
    {
        if (Auth::user()->can('unit export')) {
            $project = Unit_project::find($id);
            return view('units.export', compact('project'));
        }
        return response()->json(['error' => __('Permission denied.')], 401);
    }

    public function import_units(Request $request)
    {
        if (!Auth::user()->can('unit import')) {
            return response()->json(['error' => __('Permission denied.')], 401);
        }
        $request->validate([
            'file' => 'required|mimes:xlsx|max:2048',
        ]);
        $project = Unit_project::find($request->project_id);
        $is_imported =   Excel::import(new UnitsImport($project->id), request()->file('file'));
        if (!$is_imported) {
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
        return redirect()->back()->with('success', 'Unit imported successfully.');
    }

    public function export_units(Request $request)
    {
        if (!Auth::user()->can('unit export')) {
            return response()->json(['error' => __('Permission denied.')], 401);
        }
        // admin
        $project = Unit_project::find($request->project_id);
        $selectedStatuses = $request->input('selected_statuses', []);
        $available_units = Unit::where('unit_project_id', $project->id)
            ->whereIn('status', $selectedStatuses)
            ->get();
        if ($available_units->isEmpty()) {
            return back()->with('error', 'Inventory Unavailable!');
        }
        if (Auth::user()->type == 'company') {
            try {
                return Excel::download(new UnitExport($selectedStatuses, $project->id),  $project->name . ' Availablity List.xlsx');
            } catch (\Exception $e) {
                return redirect()->back()->with($e->getMessage());
            }
        }
        $pdf_format = public_path('assets/files/export-format.pdf');
        $fpdi = new Fpdi();
        $count = $fpdi->setSourceFile($pdf_format);

        $studioPage = $oneBHKPage = $twoBHKPage = $threeBHKPage = [];

        foreach ($available_units as $unit) {
            $unitType = strtolower($unit->unit_type);

            if (stripos($unitType, 'studio') !== false) {
                $studioPage[] = $unit;
            } elseif (stripos($unitType, '1bhk') !== false) {
                $oneBHKPage[] = $unit;
            } elseif (stripos($unitType, '2bhk') !== false) {
                $twoBHKPage[] = $unit;
            } elseif (stripos($unitType, '3bhk') !== false) {
                $threeBHKPage[] = $unit;
            }
        }
        $coverTemplate = $fpdi->importPage(1);
        $studioTemplate = $fpdi->importPage(2);
        $oneBHKTemplate = $fpdi->importPage(3);
        $twoBHKTemplate = $fpdi->importPage(4);
        $threeBHKTemplate = $fpdi->importPage(5);
        $lastBHKTemplate = $fpdi->importPage(6);

        $fpdi->SetFont("Arial", "", 8);
        $fpdi->SetTextColor(0, 0, 0);
        $headerWidths = [20, 20, 15, 30, 25, 25, 25, 25];
        $header = ['APT NO.', 'APT TYPE', 'AREA', 'VIEW', 'PRICE', '10% DOWN PAYMENT', '10% WITHIN 30 DAYS', '1% TILL 80 MONTH'];
        $startX = 21.5;
        $startY = 68.5;
        $fpdi->addPage('p', [278,  228]);
        $fpdi->useTemplate($coverTemplate);
        $this->generateUnitPage($fpdi, $studioTemplate, $headerWidths, $header, $studioPage, $startX, $startY);
        $this->generateUnitPage($fpdi, $oneBHKTemplate, $headerWidths, $header, $oneBHKPage, $startX, $startY);
        $this->generateUnitPage($fpdi, $twoBHKTemplate, $headerWidths, $header, $twoBHKPage, $startX, $startY);
        $this->generateUnitPage($fpdi, $threeBHKTemplate, $headerWidths, $header, $threeBHKPage, $startX, $startY);
        $fpdi->addPage('p', [278,  228]);
        $fpdi->useTemplate($lastBHKTemplate);
        $fpdi->Output($project->name . ' Availability-List.pdf', 'D');
    }

    function generateUnitPage($fpdi, $template, $headerWidths, $header, $unitData, $startX, $startY)
    {

        if (!empty($unitData)) {
            $fpdi->addPage('p', [278,  228]);
            $fpdi->useTemplate($template);
            $fpdi->SetXY($startX, $startY);

            $fpdi->SetTextColor(0, 0, 0);
            $unitY = $startY + 10;
            $counter = 1;

            foreach ($unitData as $key => $unit) {
                $fpdi->SetXY($startX, $unitY);
                $fpdi->Cell(7.6, 10, $counter, 1);
                $fpdi->Cell(13, 10, $unit->unit_no, 1);
                $fpdi->Cell(17.5, 10, $unit->unit_type, 1);
                $fpdi->Cell(21.5, 10, $unit->area, 1);
                $fpdi->Cell(33, 10, $unit->apartment_view, 1);
                $fpdi->Cell(24, 10, $unit->selling_price, 1);
                $fpdi->Cell(22.5, 10, $unit->installmentPlan->down_payment, 1);
                $fpdi->Cell(24, 10, $unit->installmentPlan->down_payment, 1);
                $fpdi->Cell(22, 10, $unit->installmentPlan->installment_amount, 1);

                $unitY += 10;

                if ($unitY >= 240) {
                    $unitY = $startY + 10;
                    $fpdi->addPage('p', [300,  230]);
                    $fpdi->useTemplate($template);


                    $fpdi->Ln();
                    $fpdi->SetTextColor(0, 0, 0);
                }
                $counter += 1;
            }
        }
    }

    public function getUnits($project_id)
    {
        $units = Unit::where('unit_project_id', $project_id)->pluck('unit_no', 'id');
        return response()->json($units);
    }


    public function ReserveUnit($unit_id)
    {
        if (!Auth::user()->can('unit make reservation')) {
            return response()->json(['error' => __('Permission denied.')], 401);
        }

        if (Auth::user()->type == 'company') {
            $unit = Unit::withTrashed()->find($unit_id);
        } else {
            $unit = Unit::find($unit_id);
        }
        $clients = User::SalesOfferUsers()->where('created_by', Auth::user()->id)->get();
        $is_rervation = true;
        return view('units.sales-offer.create', compact('unit', 'clients', 'is_rervation'));
    }

    public function ReleaseUnit($unit_id)
    {
        if (!Auth::user()->can('unit make reservation')) {
            return response()->json(['error' => __('Permission denied.')], 401);
        }
        if (Auth::user()->type == 'company') {
            $unit = Unit::withTrashed()->find($unit_id);
        } else {
            $unit = Unit::find($unit_id);
        }

        $unit->update([
            'status' => 'Available'
        ]);

        $email_data = [
            'unit_no' => $unit->unit_no,
            'project_name' => $unit->project->name,
        ];

        $admin_users = User::whereIn('type', ['admin', 'super admin'])->get();

        foreach ($admin_users as $admin_user) {
            SetConfigEmail(!empty($admin_user->id) ? $admin_user->id : null);
            $resp = EmailTemplate::sendEmailTemplate('Unit Released', [$admin_user->email], $email_data, $admin_user->id, null);
        }

        if ($resp['error'] != false) {
            return back()->with('error', 'Something went wrong, please try again!');
        }

        return redirect()->back()->with('success', 'Unit Released');
    }

    public function GetReservedUnits()
    {
        if (!Auth::user()->can('unit view reservation')) {
            return response()->json(['error' => __('Permission denied.')], 401);
        }

        $reserved_units = Unit::where('status', 'Reserved')->get();
        return view('units.reserved-units', compact('reserved_units'));
    }

    public function  ShowReservation($unit_id)
    {
        if (!Auth::user()->can('unit view reservation')) {
            return response()->json(['error' => __('Permission denied.')], 401);
        }
        $unit = Unit::find($unit_id);
        if (!$unit) {
            return redirect()->back()->with('error', 'Unit Not Found');
        }
        $reservations = ClientUnit::where('unit_id', $unit_id)
            ->whereNotNull('cheque_file')->get();
        if (!empty($reservations)) {
            return view('units.reservation-requests', compact('reservations', 'unit'));
        }
    }

    public function Showcheque($client_unit_id)
    {
        $reservation = ClientUnit::find($client_unit_id);
        return view('units.preview-cheque', compact('reservation'));
    }

    public function AuthorizePayment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required',
        ]);

        if ($validator->fails()) {
            $messages = $validator->getMessageBag();
            return redirect()->back()->with('error', $messages->first());
        }
        try {
            $client_unit = ClientUnit::find($request->client_unit_id);
            $client = $client_unit->client->created_by;

            $created_by = User::find($client);

            $unit = Unit::find($client_unit->unit_id);
            $unit_price = $unit->selling_price;

            $payment = Payment::create([
                'date' => now(),
                'amount' => $request->amount,
                'description' => 'Down payment',
                'payment_method' => 'Cheque',
                'created_by' => Auth::user()->id,
                'installment_plan_id' => $client_unit->unit->installmentPlan->id,
                'payment_status' => 'Complete',
            ]);

            if ($payment) {
                $client_puchase = ClientPurchase::create([
                    'unit_id' => $client_unit->unit_id,
                    'installment_plan_id' => $client_unit->unit->installmentPlan->id,
                    'client_id' =>  $client_unit->client->id,
                    'purchase_status' => 'Completed',
                ]);

                if ($client_puchase) {
                    // Calculate Commission here
                    $commission = new Commission();
                    $commission->client_units = $request->client_unit_id;
                    $commission->sold_on = now();
                    $commission->status = 'In Progress';



                    if ($created_by->type == 'agency') {

                        // Agency admin laya 0.5% (to empire agent)
                        $empire_agent = User::find($created_by->agency->relational_manager);
                        $commission_per = 0.5;

                        $commission->commission_percent = $commission_per;
                        $commission->earn_by = $empire_agent->id;
                        $commission->amount = calculate_percentage($unit_price, $commission_per);

                        // Agency kud ai hy
                        // 0.5% (to empire agent)
                    } elseif ($created_by->type == 'agent') {
                        // Agent nay close kari


                        // 0.5% to empire agent(agency sales manager) 
                        $empire_agent = User::find($created_by->agency->relational_manager);
                        $commission_per = 0.5;

                        $commission->commission_percent = $commission_per;
                        $commission->earn_by = $empire_agent->id;
                        $commission->amount = calculate_percentage($unit_price, $commission_per);
                        $commission->save();

                        // 5% to agent
                        $commission_per = 5.0;
                        $commission->commission_percent = $commission_per;
                        $commission->earn_by = $created_by->id;
                        $commission->amount = calculate_percentage($unit_price, $commission_per);
                        $commission->client_units = $request->client_unit_id;
                        $commission->sold_on = now();
                        $commission->status = 'In Progress';
                    } elseif ($created_by->type == 'empire agent') {
                        // empire_agent nay close kara 
                        // to----> 3%

                        $commission_per = 0.5;

                        $commission->commission_percent = $commission_per;
                        $commission->earn_by = $created_by->id;
                        $commission->amount = calculate_percentage($unit_price, $commission_per);
                    }

                    $commission->save();
                    $is_status_change =  $client_unit->update([
                        'status' => 'Closed Won',
                        'is_deposit' => true,
                    ]);
                    $unit_status_update = Unit::find($client_unit->unit->id);
                    $unit_status_update->update(['status' => 'Sold']);
                    return redirect()->back()->with('success', 'Purchase Authorized Successfully!');
                }
            }
            return redirect()->back()->with('error', 'Something Went Wrong!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }

    public function GridView($id)
    {
        $project = Unit_project::find($id);
        if (Auth::user()->can('project show')) {
            if ($project) {
                $units = Unit::where('unit_project_id', $project->id)
                    ->orderBy('unit_no', 'asc')
                    ->get();

                $unique_floors = $units->unique('floor_number')
                    ->pluck('floor_number');
            }
            return view('units.grid-view', compact('project', 'units', 'unique_floors'));
        } else {
            return redirect()->back()->with('error', __('Permission Denied.'));
        }
    }

    public function search(Request $request)
    {
        $projects = Unit_project::pluck('name', 'id');
        $all_units = Unit::all();
        $query = Unit::query();

        if ($request->filled('unit_project_id')) {
            $query->where('unit_project_id', $request->unit_project_id);
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('unit_type')) {
            $query->where('unit_type', $request->unit_type);
        }

        if ($request->filled('area')) {
            $areaRange = explode(',', $request->area);
            $query->whereBetween('area', $areaRange);
        }

        if ($request->filled('selling_price')) {
            $priceRange = explode(',', $request->selling_price);
            $query->whereBetween('selling_price', $priceRange);
        }

        $units = $query->get();

        return view('units.search', compact('units', 'projects', 'all_units'));
    }
}
