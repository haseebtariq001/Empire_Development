<?php

namespace App\Http\Controllers;

use App\Models\EoiForm;
use App\Models\Unit;
use App\Models\Unit_project;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Modules\Account\Entities\Payment;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;

class EoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eois = EoiForm::all();
        return view('EOI.index', compact('eois'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Unit_project::all();
        $route = 'create';
        return view('EOI.form', compact('projects', 'route'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'phone' => ['required'],
            'email' => ['required', 'email', 'unique:eoi_forms,email'],
            'country' => ['required', 'string'],
            'nationality' => ['required', 'string'],
            'passport_no' => ['required', 'string'],
            'project_id' => ['required'],
            'unit_id' => ['required'],
        ]);

        try {
            $name = $request->fname . ' ' . $request->lname;
            $unit = Unit::find($request->unit_id);

            // 50thousands studio
            // 75thousand 1bed
            // 100thousand 2bed

            if (strpos($unit->unit_type, '1') !== false) {
                $eoi_amount = '7500000';
            } elseif (strpos($unit->unit_type, '2') !== false) {
                $eoi_amount = '10000000';
            } else {
                $eoi_amount = '5000000';
            }
            $createdBy = Auth::check() ? Auth::id() : 0;

            $payment = Payment::create([
                'date' => now(),
                'amount' => $eoi_amount,
                'description' => 'EOI Payment',
                'payment_method' => 'Bank Transfer',
                'created_by' =>  $createdBy,
                'payment_status' => 'pending',
            ]);

            $eoi = EoiForm::create([
                'fname' => $name,
                'mobile_no' => $request->phone,
                'email' => $request->email,
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
                'address' => $request->address,
                'nationality' => $request->nationality,
                'passport_no' => $request->passport_no,

                'unit_project_id' => $request->project_id,
                'unit_id' => $request->unit_id,
                'payment_id' => $payment->id,
                'amount' => $eoi_amount,
                'is_signed' => false,
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with(['message' => $e->getMessage()]);
        }
        $this->make_payment($eoi);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    public function make_payment($eoi)
    {

        $stripe = new \Stripe\StripeClient(config('stripe.secret_key'));

        $session = $stripe->checkout->sessions->create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'AED',
                        'unit_amount' => $eoi->amount,
                        'product_data' => [
                            'name' => 'Expression of Interest Payment',
                        ],
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success.payment') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('cancel.payment'),
        ]);
        if (isset($session->id) && $session->id != '') {
            session()->put('payment_id', $eoi->payment_id);
            session()->put('eoi', $eoi);
            return redirect()->to($session->url)->send();
        } else {
            return redirect()->route('cancel.payment');
        }
    }

    public function success_payment(Request $request)
    {
        if ($request->session_id) {
            $stripe = new \Stripe\StripeClient(config('stripe.secret_key'));

            $session = $stripe->checkout->sessions->retrieve($request->session_id);
            $payment = Payment::find(session()->get('payment_id'));
            $is_update_payment =  $payment->update([
                'payment_status' => $session->status,
            ]);

            return view('EOI.payment-success');
            session()->forget('payment_id');
        } else {
            return redirect()->route('cancel.payment');
        }
    }
    public function cancel_payment()
    {
        return redirect()->route('Eoi-payments.create')->with(['message' => 'Payment canceled']);
    }
}
