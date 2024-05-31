<?php

namespace App\Http\Controllers;

use App\Jobs\SalesOfferJob;
use App\Models\ClientUnit;
use App\Models\EmailTemplate;
use App\Models\SalesOffer;
use App\Models\Unit;
use App\Models\Unit_project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;
use setasign\Fpdi\Fpdi;

class SalesOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->can('salesoffer view')) {
            return redirect()->back()->with('error', __('Permission Denied.'));
        }
        $client = User::where('workspace_id', '=', getActiveWorkSpace())->Clients()->get()->pluck('name', 'id');

        if (Auth::user()->type == 'company') {
            $sales_offers = ClientUnit::all();
        } else {

            $sales_offers = ClientUnit::where(function ($query) {
                $query->whereHas('client', function ($q) {
                    $q->where('created_by', Auth::id());
                })->orWhere('created_by', Auth::user()->email);
            })->get();
            
        }
        return view('units.sales-offer.index', compact('sales_offers', 'client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $slug = null, $unit_id = null)
    {
        if (!Auth::user()->can('salesoffer create')) {
            return response()->json(['error' => __('Permission denied.')], 401);
        }
        if (Auth::user()->type == 'company') {
            $unit_id != null ? Unit::withTrashed()->find($unit_id) : Unit_project::all();
        } else {
            $unit = $unit_id != null ? Unit::find($unit_id) : Unit_project::all();
        }

        $unit = $unit_id != null ? Unit::find($unit_id) : Unit_project::all();

        $clients = User::SalesOfferUsers()->where('created_by', Auth::user()->id)->get();
        return view('units.sales-offer.create', compact('unit', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::user()->can('salesoffer create')) {
            return response()->json(['error' => __('Permission denied.')], 401);
        }
        $validator = Validator::make($request->all(), [
            'logo' => 'mimes:jpeg,png|max:2048',
            'cheque_file' => 'mimes:jpeg,png|max:2048',
        ]);

        if ($validator->fails()) {
            $messages = $validator->getMessageBag();

            return redirect()->back()->with('error', $messages->first());
        }
        
        $logo = '';
        if ($request->hasFile('logo')) {
            $file_name = time() . "_" . $request->logo->getClientOriginalName();
            $image = upload_file($request, 'logo', $file_name, 'logo/agency-logo');
            $logo = $image['url'];
        }
        $random_number = rand(10000, 99999);
        $project = Unit_project::find($request->project_id);
        $sales_offer = SalesOffer::create([
            'offer_id' => $random_number,
            'file' => 'Sales-Offer-' . $random_number . '.pdf',
        ]);

        if ($request->hasFile('cheque_file')) {
            $file_name = time() . "_" . $request->cheque_file->getClientOriginalName();
            $image = upload_file($request, 'cheque_file', $file_name, 'cheque');
            $cheque_file = $image['url'];
        }

        $client_unit_data = [
            'unit_project_id' => $request->project_id,
            'unit_id' => $request->unit_id,
            'client_id' => $request->clients,
            'sales_offer_id' => $sales_offer->id,
            'status' => $request->has('reservation') ? 'In progress' : 'Offer Sent',
        ];
        $return =  redirect()->route('salesOffer.index')->with('success', 'Sales Offer Generated');

        if ($request->has('reservation')) {
            $client_unit_data['cheque_file'] = $cheque_file;
            $unit = Unit::find($request->unit_id);
            if ($unit) {
                $unit->update(['status' => 'Reserved']);
                $return =  redirect()->back()->with('success', 'Unit Reserved');
            }
        }
        $client_unit = ClientUnit::create($client_unit_data);
        SalesOfferJob::dispatch($request->unit_id, $random_number, $logo);
        return $return;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sales_offer = ClientUnit::find($id);
        $path = get_file("uploads/sales-offer/" . $sales_offer->offer->file);

        return $path;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Auth::user()->can('salesoffer delete')) {
            return back()->with(['error' => __('Permission denied.')], 401);
        }

        $is_offer_deleted = ClientUnit::where('id', $id)->delete();
        if ($is_offer_deleted) {
            return back()->with('success', 'Deleted!');
        }
        return back()->with('error', 'Something went wrong, please try again!');
    }
    public function sendMail($id)
    {
        $sales_offer = ClientUnit::find($id);
        $email_data = [
            'client_name' => $sales_offer->client->name,
            'unit_number' => $sales_offer->unit->unit_no,
            'sales_offer_no' => $sales_offer->offer->offer_id,
            'offer_url' => get_file('uploads/sales-offer/' . $sales_offer->offer->file),
        ];

        $admin_user = User::where('type', 'super admin')->first();
        SetConfigEmail(!empty($admin_user->id) ? $admin_user->id : null);
        $resp = EmailTemplate::sendEmailTemplate('Sales Offer Send', [$sales_offer->client->email], $email_data, $admin_user->id, null);
        if ($resp['error'] != false) {
            return back()->with('error', 'Something went wrong, please try again!');
        }
        return redirect()->back()->with('success', 'Reminder Email Sent!');
    }
}
