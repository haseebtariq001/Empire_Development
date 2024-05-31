<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Validation\Validator;

class AgencyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [

            'country'       => ['required', 'string'],
            'address'       => ['required', 'string'],
            'po_box' => ['required'],
        ];

        if (!auth()->check()) {
            if (request()->input('register_as') === 'Agent') {
                $rules += [
                    'agent_email' => [
                        'required',
                        'string',
                        'email',
                        'max:255',
                        Rule::unique('users', 'email'),
                    ],
                    'website' => 'nullable',
                    'GM_whatsapp' => ['nullable'],
                    'marketing_director_no' => ['nullable'],
                    'bank_name' => ['nullable'],
                    'ac_name' => ['nullable'],
                    'branch_name' => ['nullable'],
                    'branch_address' => ['nullable'],
                    'currency' => ['nullable'],
                    'swift_code' => ['nullable'],
                    'iban_number' => ['nullable'],

                ];
            } else {
                $rules += [
                    'email'         => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
                    'mobile_no'     => ['required', 'regex:/^\+?[0-9]+(?:[\s-][0-9]+)*$/', 'digits_between:8,10'],
                    'avatar'        => ['nullable', 'mimes:jpeg,jpg,png'],
                    'registration_no'        => ['required', 'numeric'],
                    'company_name'           => ['required', 'string'],
                    'company_whatsapp'       => ['required', 'regex:/^\+?[0-9]+(?:[\s-][0-9]+)*$/', 'digits_between:8,10'],
                    'trade_license'          => ['required', 'file', 'mimes:jpg,png,pdf', 'max:2048'],
                    'passport'               => ['required', 'file', 'mimes:jpg,png,pdf', 'max:2048'],
                    'emirates_id'            => ['required', 'file', 'mimes:jpg,png,pdf', 'max:2048'],
                    'rara_card'              => ['required', 'file', 'mimes:jpg,png,pdf', 'max:2048'],
                    'website' => 'required',
                    'GM_whatsapp' => ['required', 'regex:/^\+?[0-9]+(?:[\s-][0-9]+)*$/', 'digits_between:8,10'],
                    'marketing_director_no' => ['required', 'regex:/^\+?[0-9]+(?:[\s-][0-9]+)*$/', 'digits_between:8,10'],
                    'bank_name' => ['required', 'string'],
                    'ac_name' => ['required', 'string'],
                    'branch_name' => ['required', 'string'],
                    'branch_address' => ['required', 'string'],
                    'currency' => ['required', 'string'],
                    'swift_code' => ['required', 'string'],
                    'iban_number' => ['required', 'string'],
                    'trno_expiry'    => ['required'],
                    'trn_certificate' => ['required', 'file', 'mimes:jpg,png,pdf', 'max:2048'],
                    'agency_license_number' => ['required'],
                    'trno_issue_place' => ['required'],
                ];
            }
        } else {
            $rules += [
                'mobile_no'     => ['required', 'regex:/^\+?[0-9]+(?:[\s-][0-9]+)*$/', 'digits_between:8,10'],
                'avatar'        => ['nullable', 'mimes:jpeg,jpg,png'],
                'registration_no'        => ['required', 'numeric'],
                'company_name'           => ['required', 'string'],
                'company_whatsapp'       => ['required', 'regex:/^\+?[0-9]+(?:[\s-][0-9]+)*$/', 'digits_between:8,10'],
                'trade_license'          => ['required', 'file', 'mimes:jpg,png,pdf', 'max:2048'],
                'passport'               => ['required', 'file', 'mimes:jpg,png,pdf', 'max:2048'],
                'emirates_id'            => ['required', 'file', 'mimes:jpg,png,pdf', 'max:2048'],
                'rara_card'              => ['required', 'file', 'mimes:jpg,png,pdf', 'max:2048'],
                'website' => 'nullable',
                'GM_whatsapp' => ['nullable', 'regex:/^\+?[0-9]+(?:[\s-][0-9]+)*$/', 'digits_between:8,10'],
                'marketing_director_no' => ['nullable', 'regex:/^\+?[0-9]+(?:[\s-][0-9]+)*$/', 'digits_between:8,10'],
                'bank_name' => ['nullable', 'string'],
                'ac_name' => ['nullable', 'string'],
                'branch_name' => ['nullable', 'string'],
                'branch_address' => ['nullable', 'string'],
                'currency' => ['nullable', 'string'],
                'swift_code' => ['nullable', 'string'],
                'iban_number' => ['nullable', 'string'],
                'trno_expiry'    => ['required'],
                'trn_certificate' => ['required', 'file', 'mimes:jpg,png,pdf', 'max:2048'],
                'agency_license_number' => ['required'],
                'trno_issue_place' => ['required'],
            ];
        }

        return $rules;
    }

    public function after(): array
    {
        return [
            function (Validator $validator) {
                if ($this->somethingElseIsInvalid()) {
                    $messages = $validator->getMessageBag();
                    return redirect()->back()->with('error', $messages->first());
                }
            }
        ];
    }
}
