<?php

namespace App\Http\Controllers;

use App\Events\DefaultData;
use App\Http\Requests\AgencyRequest;
use App\Models\Agency;
use App\Models\DubaiCompany;
use App\Models\EmailTemplate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Spatie\Permission\Models\Role;
use App\Models\WorkSpace;
use App\Events\GivePermissionToRole;
use App\Imports\DubaiCompanyImport;
use App\Models\Agent;
use App\Models\Plan;
use Maatwebsite\Excel\Facades\Excel;
use setasign\Fpdi\Fpdi;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($status = null)
    {
        if (!Auth::user()->can('agency manage')) {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
        $users = User::join('agencies', 'agencies.user_id', '=', 'users.id')
            ->select('agencies.*', 'users.*');
        if ($status == 'Approve') {
            $users = $users->where('agencies.status', '=', 'Approved');
        } elseif ($status == 'Rejected') {
            $users = $users->where('agencies.status', '=', 'Rejected');
        } else {
            $users = $users->where('agencies.status', '=', 'pending');
        }
        $users = $users->where('users.id', '!=', Auth::user()->id)->get();
        $agencies = true;
        return view('users.index', compact('users', 'agencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $broker = Agency::find(7);
    //     $email_data = [
    //         'agency_name' => $broker->company_name,
    //         'registration_no' => $broker->registration_no,
    //         'website' => $broker->website,
    //         'company_whatsapp' => $broker->company_whatsapp,
    //         'GM_whatsapp' => $broker->GM_whatsapp,
    //         'marketing_director_no' => $broker->marketing_director_no,
    //         'trno_expiry' => $broker->trno_expiry,
    //         'relational_manager' => $broker->relational_manager,
    //         'agency_license_number' => $broker->agency_license_number,
    //         'trno_issue_place' => $broker->trno_issue_place,
    //         'created_by' => $broker->user->name,
    //         'bank_name' => $broker->bank_name,
    //         'ac_name' => $broker->ac_name,
    //         'branch_name' => $broker->branch_name,
    //         'branch_address' => $broker->branch_address,
    //         'currency' => $broker->currency,
    //         'swift_code' => $broker->swift_code,
    //         'iban' => $broker->iban,

    //     ];
    //     $attachments = [
    //         'trade_license' => 'uploads/broker_documents/1700738951_1698830977_78308.pdf',
    //         'passport' => 'uploads/broker_documents/1700738951_1698830977_78308.pdf',
    //         'emirates_id' => 'uploads/broker_documents/1700738951_1698830977_78308.pdf',
    //         'rara_card' => 'uploads/broker_documents/1700738951_1698830977_78308.pdf',
    //         'trn_certificate' => 'uploads/broker_documents/1700738951_1698830977_78308.pdf',
    //         'rera_certificate' => 'uploads/broker_documents/1700738951_1698830977_78308.pdf',

    //     ];
    //     $resp = EmailTemplate::sendEmailTemplate('Agency Request', ['areeba.jabeen21@gmail.com'], $email_data, 1, null);
    //     dd($resp);
    // }
    public function create($lang = '')
    {
        if ($lang == '') {
            $lang = getActiveLanguage();
        }
        \App::setLocale($lang);
        $agencies = Agency::getapproves()->get();
        $agency_users = User::where('type', 'empire agent')->get();
        return view('auth.agency-registeration', compact('lang', 'agencies', 'agency_users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgencyRequest $request)
    {
        $mobile_no = '+(' . $request->full_mobile_no . ')' . $request->mobile_no;
        $full_company_whatsapp = '+(' . $request->full_company_whatsapp . ')' . $request->company_whatsapp;
        $full_GM_whatsapp = '+(' . $request->full_GM_whatsapp . ')' . $request->company_whatsapp;
        $full_marketing_director_no = '+(' . $request->full_marketing_director_no . ')' . $request->GM_whatsapp;

        // User registration
        $user = User::create([
            'email' => $request->email ?? $request->agent_email,
            'mobile_no' => $mobile_no,
            'name' => $request->name ?? $request->fname,
            'fname' => $request->fname,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'address' => $request->address,
            'avatar' => 'uploads/users-avatar/avatar.png',
            'type' => $request->register_as === 'Agent' ? 'agent' : 'agency',
            'user_name' => $request->user_name,
            'password' => Hash::make($request->password),
            'dark_mode' => 1,
        ]);
        $user->update(['created_by' => $user->id]);
        if ($request->register_as === 'Agent') {
            $agent = Agent::create([
                'agency_id' => $request->agency,
                'user_id'   => $user->id,
                'relational_manager' => $request->relational_manager,
            ]);
            event(new Registered($user));
            Auth::login($user);
            return redirect()->route('dashboard');
        } else {
            $broker_data = [
                'registration_no' => $request->registration_no,
                'company_name' => $request->company_name,
                'website' => $request->website,
                'company_whatsapp' => $full_company_whatsapp,
                'GM_whatsapp' => $full_GM_whatsapp,
                'marketing_director_no' => $full_marketing_director_no,
                'bank_name' => $request->bank_name,
                'ac_name' => $request->ac_name,
                'branch_name' => $request->branch_name,
                'branch_address' => $request->branch_address,
                'currency' => $request->currency,
                'swift_code' => $request->swift_code,
                'user_id' => $user->id,
                'iban' => $request->iban_number,
                'trno_expiry' => $request->trno_expiry,
                'relational_manager' => $request->relational_manager,
                'trn_certificate' => $request->trn_certificate,
                'rera_certificate' => $request->rera_certificate,
                'agency_license_number' => $request->agency_license_number,
                'trno_issue_place' => $request->trno_issue_place,
                'po_box' => $request->po_box,
                'created_by' => Auth::check() ? Auth::user()->id : $user->id,
            ];

            if (auth()->check()) {
                $broker_data += [
                    'status' => 'Approved',
                ];
            } else {
                $broker_data += [
                    'status' => 'Pending',
                ];
            }
            $inputs = ['trade_license', 'passport', 'emirates_id', 'rara_card', 'trn_certificate', 'rera_certificate'];
            foreach ($inputs as $input) {
                if ($request->hasFile($input)) {
                    $file_name = time() . "_" . $request->$input->getClientOriginalName();
                    $image = upload_file($request, $input, $file_name, 'broker_documents');
                    $broker_data[$input] = $file_name;
                }
            }
            $broker = Agency::create($broker_data);

            if (!$broker) {
                return redirect()->back()->with('error', 'something went wrong');
            }

            $email_data = [
                'agency_name' => $broker->company_name,
                'registration_no' => $broker->registration_no,
                'website' => $broker->website,
                'company_whatsapp' => $broker->company_whatsapp,
                'GM_whatsapp' => $broker->GM_whatsapp,
                'marketing_director_no' => $broker->marketing_director_no,
                'trno_expiry' => $broker->trno_expiry,
                'relational_manager' => $broker->relational_manager,
                'agency_license_number' => $broker->agency_license_number,
                'trno_issue_place' => $broker->trno_issue_place,
                'created_by' => $broker->user->name,
                'bank_name' => $broker->bank_name,
                'ac_name' => $broker->ac_name,
                'branch_name' => $broker->branch_name,
                'branch_address' => $broker->branch_address,
                'currency' => $broker->currency,
                'swift_code' => $broker->swift_code,
                'iban' => $broker->iban,
            ];
            $attachments = [
                'trade_license' => 'uploads/broker_documents/' . $broker->trade_license,
                'passport' => 'uploads/broker_documents/' . $broker->passport,
                'emirates_id' => 'uploads/broker_documents/' . $broker->emirates_id,
                'rara_card' => 'uploads/broker_documents/' . $broker->rara_card,
                'trn_certificate' => 'uploads/broker_documents/' . $broker->trn_certificate,
                'rera_certificate' => 'uploads/broker_documents/' . $broker->rera_certificate,
            ];
            if (!auth()->check()) {
                Auth::login($user);
            }

            if (!empty($user)) {
                $role_r = Role::findByName('company');
                $user->assignRole($role_r);
                // WorkSpace slug create on WorkSpace Model
                $workspace = new WorkSpace();
                $workspace->name = $request->agency_name;
                $workspace->created_by = $user->id;
                $workspace->save();

                $user_work = User::find($user->id);
                $user_work->active_workspace = $workspace->id;
                $user_work->save();


                User::CompanySetting($user->id);
                $data = $user->MakeRole();

                $client_id = $data['client_role']->id;
                $staff_role = $data['staff_role']->id;

                if (!empty($user->active_module)) {
                    event(new GivePermissionToRole($client_id, 'client', $user->active_module));
                    event(new GivePermissionToRole($staff_role, 'staff', $user->active_module));
                    event(new DefaultData($user->id, $workspace->id, $user->active_module));
                }

                if (admin_setting('email_verification') == 'on') {
                    try {
                        $admin_emails = explode(',', env('ADMIN_EMAILS'));
                        $admin_user = User::where('type', 'super admin')->first();
                        SetConfigEmail(!empty($admin_user->id) ? $admin_user->id : null);
                        if (auth()->check() && Auth::user()->type == "company") {
                            $uArr = [
                                'email' => $user->email,
                                'password' => $request->password,
                                'company_name' => $broker->company_name,
                            ];

                            $resp = EmailTemplate::sendEmailTemplate('New User', [$user->email], $uArr,  $admin_user->id);
                        } else {
                            $resp = EmailTemplate::sendEmailTemplate('Agency Request', $admin_emails, $email_data, $admin_user->id, null, $attachments);
                        }
                        event(new Registered($user));
                    } catch (\Exception $e) {
                        $smtp_error = __('E-Mail has been not sent due to SMTP configuration');
                    }
                } else {
                    $user_work = User::find($user->id);
                    $user_work->email_verified_at = date('Y-m-d h:i:s');
                    $user_work->save();
                }
            }

            event(new Registered($user));
            return redirect()->route('agency.index')->with('success', 'Agency Addedd Successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $agency = Agency::find($id);
        return view('users.agency.show', compact('agency'));
    }

    public function get_docs($id)
    {
        $agency = Agency::find($id);
        $inputs = ['trade_license', 'passport', 'emirates_id', 'rara_card', 'trn_certificate', 'rera_certificate', 'brokage_agreement'];

        return view('users.agency.docs', compact('agency', 'inputs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create_agency()
    {
        return view('users.agency.edit');
    }

    public function edit($id)
    {
        $agency = Agency::find($id);

        return view('users.agency.edit', compact('agency'));
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
        $inputs = [
            'passport',
            'emirates_id',
            'rara_card',
            'trn_certificate',
            'rera_certificate',
        ];

        if ($request->hasFile($inputs) || $request->hasFile('brokage_agreement')) {
            $validator = \Validator::make(
                $request->all(),
                [
                    'name' => ['required'],
                    'mobile_no' => ['required'],
                    'country' => ['required'],
                    'po_box' => ['required'],
                    'address' => ['required'],
                    'registration_no' => ['required'],
                    'company_name' => ['required'],
                    'website' => ['required'],
                    'company_whatsapp' => ['required'],
                    'trno_issue_place' => ['required'],
                    'trno_expiry' => ['required'],
                    'agency_license_number' => ['required'],
                    'ac_name' => ['required'],
                    'account_number' => ['required'],
                    'bank_name' => ['required'],
                    'swift_code' => ['required'],
                    'branch_address' => ['required'],
                    'branch_name' => ['required'],
                ]
            );
            if ($validator->fails()) {
                $messages = $validator->getMessageBag();
                return redirect()->back()->with('error', $messages->first());
            }
        }
        $agency = Agency::find($id);

    
        foreach ($inputs as $input) {
            if ($request->hasFile($input)) {
                $file_name = time() . "_" . $request->file($input)->getClientOriginalName();
                $uploaded_file = upload_file($request, $input, $file_name, 'broker_documents');
                if ($uploaded_file) {
                    $agency->$input = $file_name;
                }
            }
        }
        if ($request->hasFile('brokage_signed_agreement')) {
            $file_name = 'Brokage-Signed-Agreement-Agency-' . $id . '.pdf';
            $uploaded_file = upload_file($request, 'brokage_signed_agreement', $file_name, 'agreements');
            if ($uploaded_file) {
                $agency->brokage_signed_agreement = $file_name;
            }
            $agency->BA_uploaded_by = Auth::user()->id;
            $agency->is_agreement_signed = true;
        }

        $fillable_fields = [
            'po_box',
            'registration_no',
            'company_name',
            'website',
            'company_whatsapp',
            'trno_issue_place',
            'trno_expiry',
            'agency_license_number',
            'ac_name',
            'account_number',
            'bank_name',
            'swift_code',
            'branch_address',
            'branch_name',
            'BA_uploaded_by',
            'is_agreement_signed',
        ];

        $agency->fill($request->only($fillable_fields))->save();

        $agency->user->update($request->only([
            'name',
            'mobile_no',
            'country',
            'address',
        ]));

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
        //
    }
    public function get_duabi_broker(Request $request)
    {
        $company_name = $request->input('input_value');
        $companies = DubaiCompany::where('company_name_en', 'LIKE', '%' . $company_name . '%')->get();
        return response()->json($companies);
    }

    public function search_duabi_broker(Request $request)
    {
        $company_name = $request->input('query');
        $companies = DubaiCompany::where('company_name_en', 'LIKE', '%' . $company_name . '%')
            ->distinct('company_name_en')
            ->pluck('company_name_en');
        return response()->json($companies);
    }

    public function make_agency_approval($agency_id, $request)
    {
        $agency = Agency::find($agency_id);
        $documents =  $this->attach_document($agency, $agency_id);
        $email_data = [
            'name_of_agency' => $agency->company_name,
            'agency_email' => $agency->user->email,
            'agency_password' => $request->password,
            
        ];
        $attachments = [
            'NO_OBJECTION_CERTIFICATE' => 'uploads/agreements/NOC-' . $agency_id . '.pdf',
            'BROKER_AGREEMENT' => 'uploads/agreements/Brokage-Agreement-Agency-' . $agency_id . '.pdf',
        ];

        $agency->update([
            'status' => 'Approved',
            'relational_manager' =>  $request->relational_manager,
            'brokage_agreement' => 'Brokage-Agreement-Agency-' . $agency_id . '.pdf',
        ]);

        if (admin_setting('email_verification') == 'on') {
            try {
                $admin_user = User::where('type', 'super admin')->first();
                SetConfigEmail(!empty($admin_user->id) ? $admin_user->id : null);
                $resp = EmailTemplate::sendEmailTemplate('Agency Approved', [$agency->user->email], $email_data, $admin_user->id, null,  $attachments);
            } catch (\Exception $e) {
                $smtp_error = __('E-Mail has been not sent due to SMTP configuration');
            }
        }

        return redirect()->route('agency.index')->with(
            'success',
            'User Password Set and Approved!'
        );
    }
    public function fillPDFFile($file, $outputFilePath, $texts_to_add)
    {
        $fpdi = new FPDI;
        $count = $fpdi->setSourceFile($file);

        for ($i = 1; $i <= $count; $i++) {
            $template = $fpdi->importPage($i);
            $size = $fpdi->getTemplateSize($template);
            $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
            $fpdi->useTemplate($template);

            if ($i === 2) {
                foreach ($texts_to_add as $textData) {
                    if ($count == 1) {
                        $fpdi->SetFont("Arial", "", 10);
                    } else {
                        $fpdi->SetFont("helvetica", "", 12);
                    }
                    $fpdi->SetTextColor(0, 0, 0);
                    $left = $textData['left'];
                    $top = $textData['top'];
                    $text = $textData['text'];
                    $fpdi->Text($left, $top, $text);
                }
            }
        }
        return $fpdi->Output($outputFilePath, 'F');
    }
    public function attach_document($broker, $id)
    {
        $noc_file_path = public_path('assets/files/NOC Empire Development.pdf');
        $noc_output_file_name = 'uploads/agreements/NOC-' . $id . '.pdf';

        $filePath = public_path('assets/files/Brokerage Agreement Empire Developments.pdf');
        $output_file_name = 'uploads/agreements/Brokage-Agreement-Agency-' . $id . '.pdf';

        $output_file_path = storage_path('app/public/' . $output_file_name);
        $noc_output_file_path = storage_path('app/public/' . $noc_output_file_name);

        $texts_to_add = [
            ['left' => 105, 'top' => 52, 'text' => company_date_formate(now())],
            ['left' => 25, 'top' => 98, 'text' => 'The Agency'],
            ['left' => 85, 'top' => 108, 'text' => $broker->company_name],
            ['left' => 85, 'top' => 120, 'text' => $broker->trno_issue_place],
            ['left' => 85, 'top' => 133, 'text' => $broker->registration_no],
            ['left' => 85, 'top' => 144, 'text' => $broker->agency_license_number],
            ['left' => 85, 'top' => 157, 'text' => $broker->user->address],
            ['left' => 85, 'top' => 168, 'text' => $broker->po_box],
        ];

        $noc_texts_to_add = [
            [
                'left' => 52, 'top' => 65,
                'text' => company_date_formate(now()) . ' (Agreement) with' . $broker->company_name . ', Trade License No. ' . $broker->registration_no . ',',
            ],

            [
                'left' => 21, 'top' => 70,
                'text' => 'and RERA registration # ' . $broker->agency_license_number . ' (Broker)',
            ],

            [
                'left' => 82, 'top' => 220,
                'text' => $broker->user->email,
            ],


        ];

        $this->fillPDFFile($noc_file_path, $noc_output_file_path, $noc_texts_to_add);

        $this->fillPDFFile($filePath, $output_file_path, $texts_to_add);


        return [
            'output_file_path' => $output_file_path,
            'noc_file_path' => $noc_output_file_path,
        ];
    }

    public function import_agency(Request $request)
    {
        $file = $request->file('file'); // Assuming the file input name is 'excel_file'

        Excel::import(new DubaiCompanyImport, $file);

        return redirect()->back()->with('success', 'Data imported successfully!');
    }
}
