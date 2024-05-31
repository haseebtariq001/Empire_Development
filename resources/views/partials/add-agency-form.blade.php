<div class="progress">
    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50"
        class="progress-bar progress-bar-striped progress-bar-animated bg-gold" role="progressbar" style="width: 0%">
    </div>
</div>
<div id="qbox-container p-5">
    <form id="reg-form" class="form-default needs-validation" role="form"
        action="{{ $is_registration_form ? route('agency.register.store') : route('admin.agency.register.store') }}"
        method="POST" data-parsley-validate enctype="multipart/form-data">
        @csrf
        {{-- <form class="needs-validation" id="form-wrapper" method="post" name="form-wrapper" novalidate=""> --}}
        <div id="steps-container">
            @if ($is_registration_form)
                <div class="step fst-step">
                    <h4>Do You Want to Register as Agency or Agent?</h4>
                    <p>Regsiter as agency reguired all the company documents like trade licesnce, Bank details etc..</p>
                    <div class="form-check ps-0 q-box m-auto" style="width:60%;">
                        <div>
                            <div class="q-box__question m-10">
                                <input checked class="form-check-input question__input" id="register_as_agency"
                                    name="register_as" type="radio" value="Agency">
                                <label class="form-check-label question__label" for="register_as_agency">Agency</label>
                            </div>
                        </div>
                        <div>
                            <div class="q-box__question m-10">
                                <input class="form-check-input question__input" id="register_as_agent"
                                    name="register_as" type="radio" value="Agent">
                                <label class="form-check-label question__label" for="register_as_agent">Agent</label>
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="q-box__question">
                                    <input checked class="form-check-input question__input" id="register_as_agency"
                                        name="register_as" type="radio" value="Agency">
                                    <label class="form-check-label question__label"
                                        for="register_as_agency">Agency</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="q-box__question">
                                    <input class="form-check-input question__input" id="register_as_agent"
                                        name="register_as" type="radio" value="Agent">
                                    <label class="form-check-label question__label"
                                        for="register_as_agent">Agent</label>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            @endif



            <div class="step">
                <div class="row">
                    <div class="col-12 py-2 my-2">
                        <div class="mb-4">
                            <h5>Company Detail
                            </h5>
                            <span class="text-dark fs-6">write detail as per the trade
                                license</span>
                        </div>
                    </div>
                    <!-- CompanyTradeLicense -->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="name"
                                class="required fs-6 fw-semibold mb-2">{{ __('Trade License Number') }}</label>
                            <input type="number"
                                class="required-input form-control no-spinner {{ $errors->has('registration_no') ? ' is-invalid' : '' }}"
                                value="{{ old('registration_no') }}" required data-parsley-trigger="change"
                                data-parsley-required-message="Trade License Number is required!"
                                placeholder="{{ __('Trade License Number') }}" name="registration_no">
                            @error('registration_no')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Trade LIcesnse expiry -->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="name" class="fs-6 fw-semibold mb-2">{{ __('Trade License Expiry') }}</label>
                            <input type="date" name="trno_expiry" id="trno_expiry"
                                class="required-input form-control  {{ $errors->has('trno_expiry') ? ' is-invalid' : '' }}"
                                required data-parsley-trigger="change"
                                data-parsley-errors-container="#tr_no_expiry_error"
                                data-parsley-required-message="Trade License Expiry Date is required!"
                                placeholder="{{ __('Trade License Expiry') }}">
                            <div id="tr_no_expiry_error" class="error-container"></div>
                            @error('trno_expiry')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- TRN Issue Place-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="trno_issue_place" class="fs-12 fw-semibold" data-toggle="tooltip"
                                data-placement="top" title="TRN Place of Issue">{{ __('TRN Place of Issue') }}
                            </label>
                            <div class="file-input-group d-flex">
                                <input name="trno_issue_place" type="text" required
                                    value="{{ old('trno_issue_place') }}"
                                    class="required-input form-control  {{ $errors->has('trno_issue_place') ? ' is-invalid' : '' }}"
                                    id="trno_issue_place" placeholder="Trade License Issue Place"
                                    data-parsley-required-message="Trade License Issue Place is required!"
                                    data-parsley-errors-container="#trno_issue_place_error">
                            </div>
                        </div>
                        <div id="trno_issue_place_error" class="error-container"></div>

                        @error('trno_issue_place')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Agency License Number-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="agency_license_number" class="fs-12 fw-semibold" data-toggle="tooltip"
                                data-placement="top" title="Agency License Number">{{ __('Agency License Number') }}
                            </label>
                            <div class="file-input-group d-flex">
                                <input name="agency_license_number" type="number" required
                                    value="{{ old('agency_license_number') }}"
                                    class="required-input form-control no-spinner {{ $errors->has('agency_license_number') ? ' is-invalid' : '' }}"
                                    id="agency_license_number" placeholder="Agency License Number"
                                    data-parsley-required-message="Agency License Number is required!"
                                    data-parsley-errors-container="#agency_license_number_error">
                            </div>
                        </div>
                        <div id="agency_license_number_error" class="error-container"></div>

                        @error('agency_license_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- CompanyName -->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="name" class="required fs-6 fw-semibold mb-2">{{ __('Company Name') }}
                                <span class="text-primary">*</span></label>


                            <input type="text" value="{{ old('company_suggest') }}" required autocomplete="off"
                                data-parsley-trigger="change" class="required-input form-control "
                                data-parsley-required-message="Company Name is required!"
                                placeholder="{{ __('Company Name') }}" name="company_name" id="company_suggest">

                            @error('company_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <!-- Email -->
                    <div class="col-lg-6 col-sm-12">

                        <div class="form-group">
                            <label for="email" class="required fs-6 fw-semibold mb-2">{{ __('Email') }} <span
                                    class="text-primary">*</span> </label>
                            <input type="email" data-parsley-trigger="change"
                                class="required-input form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                value="{{ old('email') }}" required data-parsley-type="email"
                                placeholder="{{ __('Email') }}" name="email" id="email"
                                data-parsley-required-message="Email is required!">

                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <input type="hidden" id="route-name" value="{{ route('get.companies') }}">

                    <!-- Relationship manager-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>{{ __('Choose Relationship manager') }}</label>

                            <select class="form-control mb-3" name="relational_manager" id="">
                                <option value="">--Select Relationship Manager--</option>
                                @foreach ($agency_users as $relational_managers)
                                    <option value="{{ $relational_managers->id }}">
                                        {{ $relational_managers->name }}</option>
                                @endforeach
                            </select>
                            @error('relational_manager')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>

                    </div>

                    <!-- mobile number-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="mobile_no" class="required d-block">{{ __('Mobile Number') }}
                                <span class="text-primary">*</span></label>
                            <input type="hidden" name="full_mobile_no" id="full_mobile"
                                value="{{ old('full_mobile_no') }}">
                            <input type="number" data-parsley-minlength="8" data-parsley-maxlength="10"
                                data-parsley-minlength-message="A valid mobile number should have a minimum of 8 digits."
                                data-parsley-maxlength-message="A valid mobile number should have a maximun of 10 digits."
                                data-parsley-errors-container="#mobile_error" data-parsley-type="digits"
                                data-parsley-type-message="only numbers"
                                class="required-input form-control no-spinner {{ $errors->has('mobile_no') ? ' is-invalid' : '' }}"
                                value="{{ old('mobile_no') }}" required data-parsley-trigger="change" id="mobile_no"
                                data-parsley-required-message="Mobile number is required!"
                                placeholder="{{ __('Mobile Number') }}" name="mobile_no">

                            <div id="mobile_error" class="error-container"></div>

                            @error('mobile_no')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Website-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="website" class="required fs-6 fw-semibold mb-2">{{ __('Website') }}
                                <span class="text-primary">*</span></label>

                            <input type="url"
                                data-parsley-type="url"data-parsley-type-message="Invalid URl format!"
                                data-parsley-required-message="Website is required!"
                                class="required-input form-control {{ $errors->has('website') ? ' is-invalid' : '' }}"
                                value="{{ old('website') }}" {{ $is_registration_form ? 'required' : '' }}
                                autocomplete="off" data-parsley-trigger="change" id="website"
                                placeholder="{{ __('Website') }}" name="website">
                            @error('website')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- mobile number-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="mobile_no" class="required d-block">{{ __('Company Whatsapp Number') }}
                                <span class="text-primary">*</span></label>
                            <input type="hidden" name="full_company_whatsapp" id="full_company_whatsapp"
                                value="{{ old('full_company_whatsapp') }}">
                            <input type="number" data-parsley-minlength="8" data-parsley-maxlength="10"
                                data-parsley-minlength-message="A valid mobile number should have a minimum of 8 digits."
                                data-parsley-maxlength-message="A valid mobile number should have a maximun of 10 digits."
                                data-parsley-errors-container="#company_whatsapp_error" data-parsley-type="digits"
                                data-parsley-type-message="only numbers"
                                class="required-input form-control no-spinner {{ $errors->has('company_whatsapp') ? ' is-invalid' : '' }}"
                                value="{{ old('company_whatsapp') }}" required data-parsley-trigger="change"
                                id="company_whatsapp" placeholder="{{ __('Mobile Number') }}"
                                name="company_whatsapp" data-parsley-required-message="Company Whatsapp is required!">

                            <div id="company_whatsapp_error" class="error-container"></div>

                            @error('company_whatsapp')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <!-- GM Whatsapp-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="GM_whatsapp" class="required d-block">{{ __('GM Whatsapp') }}
                                <span class="text-primary">*</span></label>
                            <input type="hidden" name="full_GM_whatsapp" value="{{ old('full_GM_whatsapp') }}"
                                id="full_GM_whatsapp">

                            <input type="number" data-parsley-minlength="8" data-parsley-maxlength="10"
                                data-parsley-minlength-message="A valid mobile number should have a minimum of 8 digits."
                                data-parsley-maxlength-message="A valid mobile number should have a maximun of 10 digits."
                                data-parsley-errors-container="#GM_whatsapp_error" data-parsley-type="digits"
                                data-parsley-type-message="only numbers"
                                data-parsley-required-message="GM Whatsapp is required!"
                                class="required-input form-control no-spinner {{ $errors->has('GM_whatsapp') ? ' is-invalid' : '' }} phone_number"
                                value="{{ old('GM_whatsapp') }}" required
                                data-parsley-trigger="change" id="GM_whatsapp"
                                placeholder="{{ __('Mobile Number') }}" name="GM_whatsapp">

                            <div id="GM_whatsapp_error" class="error-container"></div>
                            @error('GM_whatsapp')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Marketing Director Whatsapp-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="marketing_director_no"
                                class="required d-block">{{ __('Marketing Director Whatsapp') }}
                                <span class="text-primary">*</span></label>
                            <input type="hidden" name="full_marketing_director_no" id="full_marketing_director_no"
                                value="{{ old('full_marketing_director_no') }}">

                            <input type="number" data-parsley-minlength="8" data-parsley-maxlength="10"
                                data-parsley-minlength-message="A valid mobile number should have a minimum of 8 digits."
                                data-parsley-maxlength-message="A valid mobile number should have a maximun of 10 digits."
                                data-parsley-errors-container="#marketing_director_no_error"
                                data-parsley-required-message="Marketing Director Whatsapp is required!"
                                data-parsley-type="digits" data-parsley-type-message="only numbers"
                                class="required-input d-block form-control no-spinner {{ $errors->has('marketing_director_no') ? ' is-invalid' : '' }} phone_number"
                                value="{{ old('marketing_director_no') }}"
                                {{ $is_registration_form ? 'required' : '' }} data-parsley-trigger="change"
                                id="marketing_director_no" placeholder="{{ __('Mobile Number') }}"
                                name="marketing_director_no">

                            <div id="marketing_director_no_error" class="error-container"></div>
                            @error('marketing_director_no')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                </div>
            </div>
            <div class="step">
                <div class="row">
                    <div class="col-12 py-2 my-2">
                        <div class="mb-4">
                            <h6>{{ __('Upload Documnets') }}
                            </h6>
                        </div>
                    </div>

                    {{-- Attach Trade License --}}
                    <div class="col-12">
                        <div class="form-group">
                            <label for="name" class="fs-12 fw-semibold" data-placement="top"
                                title="Company Trade License">{{ __('Attach Trade License') }}
                                <span class="text-primary">*</span></label>
                            <div class="file-input-group d-flex">
                                <input name="trade_license" type="file" value="{{ old('trade_license') }}"
                                    data-parsley-trigger="change" data-parsley-filemimetypes="image/jpeg, image/png"
                                    required data-parsley-filemime="image/jpeg,image/png" data-parsley-maxfilesize="2"
                                    data-parsley-required-message="Please upload a valid image within 2MB"
                                    data-parsley-errors-container="#trade_error" accept="image/*, .pdf;capture=camera"
                                    class="required-input input-b2  {{ $errors->has('trade_license') ? ' is-invalid' : '' }}"
                                    data-show-preview="false">


                                <input type="hidden" name="trade_license" class="image-tag">

                            </div>
                        </div>
                        <div id="trade_error" class="error-container"></div>
                        @error('trade_license')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- TRN Certificate-->
                    <div class="col-12">
                        <div class="form-group">
                            <label for="trn_certificate" class="fs-12 fw-semibold" data-toggle="tooltip"
                                data-placement="top" title="TRN Certificate">{{ __('TRN Certificate') }}
                            </label>
                            <div class="file-input-group d-flex">
                                <input name="trn_certificate" type="file" data-parsley-trigger="change" required
                                    value="{{ old('trn_certificate') }}" accept="image/*, .pdf;capture=camera"
                                    class="required-input input-b2  {{ $errors->has('trn_certificate') ? ' is-invalid' : '' }}"
                                    id="trn_certificate" data-parsley-filemimetypes="image/jpeg, image/png"
                                    data-parsley-filemime="image/jpeg,image/png" data-parsley-maxfilesize="2"
                                    data-parsley-required-message="Please upload a valid image within 2MB"
                                    data-parsley-errors-container="#trn_certificate_error" data-show-preview="false">
                            </div>
                        </div>
                        <div id="trn_certificate_error" class="error-container"></div>

                        @error('trn_certificate')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <!-- Gm Passport -->
                    <div class="col-12">

                        <div class="form-group">
                            <label for="passport" class="fs-12 fw-semibold" data-toggle="tooltip"
                                data-placement="top"
                                title="General Manager Passport Copy">{{ __('General Manager Passport Copy') }}
                                <span class="text-primary">*</span></label>
                            <div class="file-input-group d-flex">
                                <input name="passport" type="file" required data-parsley-trigger="change"
                                    value="{{ old('passport') }}" data-parsley-filemimetypes="image/jpeg, image/png"
                                    data-parsley-filemime="image/jpeg,image/png" data-parsley-maxfilesize="2"
                                    data-parsley-required-message="Please upload a valid image within 2MB"
                                    data-parsley-errors-container="#passport_error"
                                    accept="image/*, .pdf;capture=camera"
                                    class="required-input input-b2 {{ $errors->has('passport') ? ' is-invalid' : '' }}"
                                    data-show-preview="false">

                            </div>
                        </div>
                        <div id="passport_error" class="error-container"></div>

                        @error('passport')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Gm ID -->
                    <div class="col-12">

                        <div class="form-group">
                            <label for="emirates_id" class="fs-12 fw-semibold" data-toggle="tooltip"
                                data-placement="top"
                                title="General Manager Emirates ID">{{ __('General Manager Emirates ID') }}
                                <span class="text-primary">*</span></label>
                            <div class="file-input-group d-flex">
                                <input name="emirates_id" type="file" required data-parsley-trigger="change"
                                    id="emirates_id" data-parsley-filemimetypes="image/jpeg, image/png"
                                    data-parsley-filemime="image/jpeg,image/png" data-parsley-maxfilesize="2"
                                    data-parsley-required-message="Please upload a valid image within 2MB"
                                    data-parsley-errors-container="#emirates" value="{{ old('emirates_id') }}"
                                    accept="image/*, .pdf;capture=camera"
                                    class="required-input input-b2 {{ $errors->has('emirates_id') ? ' is-invalid' : '' }}"
                                    data-show-preview="false">



                            </div>
                        </div>
                        <div id="emirates" class="error-container"></div>

                        @error('emirates_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Sales Person Rara Certificate-->
                    <div class="col-12">
                        <div class="form-group">
                            <label for="rera_certificate" class="fs-12 fw-semibold" data-toggle="tooltip"
                                data-placement="top" title="Sales Person Rara Card">{{ __('RERA Certificate') }}
                            </label>
                            <div class="file-input-group d-flex">
                                <input name="rera_certificate" type="file" data-parsley-trigger="change"
                                    value="{{ old('rera_certificate') }}" accept="image/*, .pdf;capture=camera"
                                    class=input-b2 {{ $errors->has('rera_certificate') ? ' is-invalid' : '' }}"
                                    id="rera_certificate" data-parsley-filemimetypes="image/jpeg, image/png"
                                    data-parsley-filemime="image/jpeg,image/png" data-parsley-maxfilesize="2"
                                    data-parsley-required-message="Please upload a valid image within 2MB"
                                    data-parsley-errors-container="#rera_certificate_error" data-show-preview="false">



                            </div>
                        </div>
                        <div id="rera_certificate_error" class="error-container"></div>

                        @error('rera_certificate')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Sales Person Rara Card-->
                    <div class="col-12">
                        <div class="form-group">
                            <label for="rara_card" class="fs-12 fw-semibold" data-toggle="tooltip"
                                data-placement="top" title="RERA Broker Card">{{ __('RERA Broker Card') }}
                                <span class="text-primary">*</span></label>
                            <div class="file-input-group d-flex">
                                <input name="rara_card" type="file" required data-parsley-trigger="change"
                                    id="rara_card" data-parsley-filemimetypes="image/jpeg, image/png"
                                    data-parsley-filemime="image/jpeg,image/png" data-parsley-maxfilesize="2"
                                    data-parsley-required-message="Please upload a valid image within 2MB"
                                    value="{{ old('rara_card') }}" data-parsley-errors-container="#rara_card_error"
                                    accept="image/*, .pdf;capture=camera"
                                    class="required-input input-b2  {{ $errors->has('rara_card') ? ' is-invalid' : '' }}"
                                    data-show-preview="false">



                            </div>
                        </div>
                        <div id="rara_card_error" class="error-container"></div>

                        @error('rara_card')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>




                </div>
            </div>
            <div class="step">
                <div class="row">
                    <div class="col-12 py-2 my-2">
                        <div class="mb-4">
                            <h6>{{ __('Bank Information') }}
                            </h6>
                        </div>
                    </div>

                    <!-- BankName-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="bank_name" class="fs-12 fw-semibold">{{ __('Bank Name') }}
                                <span class="text-primary">*</span></label>
                            <input type="text" {{ $is_registration_form ? 'required' : '' }}
                                class="{{ $is_registration_form ? 'required-input' : '' }} form-control mb-3 {{ $errors->has('bank_name') ? ' is-invalid' : '' }}"
                                value="{{ old('bank_name') }}" data-parsley-trigger="change"
                                placeholder="{{ __('Bank Name') }}" data-parsley-pattern="^[a-zA-Z\s]+$"
                                data-parsley-pattern-message="Bank name cann't be number or special character"
                                data-parsley-trigger="change" data-parsley-minlength="3"
                                data-parsley-minlength-message="Bank name should conatin atleast 3 charachter!"
                                name="bank_name">
                            @error('bank_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Account Name-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="name" class="fs-12 fw-semibold">{{ __('Account Name') }}
                                <span class="text-primary">*</span></label>
                            <input type="text" {{ $is_registration_form ? 'required' : '' }}
                                class="{{ $is_registration_form ? 'required-input' : '' }} form-control mb-3 {{ $errors->has('ac_name') ? ' is-invalid' : '' }}"
                                value="{{ old('ac_name') }}" data-parsley-pattern="^[a-zA-Z\s]+$"
                                data-parsley-pattern-message="Account name cann't be number or special character"
                                data-parsley-trigger="change" data-parsley-minlength="5"
                                data-parsley-minlength-message="Account name should conatin atleast 5 charachter!"
                                data-parsley-trigger="change" placeholder="{{ __('Account Name') }}"
                                name="ac_name">
                            @error('ac_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Branch Name-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="branch_name" class="fs-12 fw-semibold">{{ __('Branch Name') }}
                                <span class="text-primary">*</span></label>
                            <input type="text" {{ $is_registration_form ? 'required' : '' }}
                                class="{{ $is_registration_form ? 'required-input' : '' }} form-control mb-3 {{ $errors->has('branch_name') ? ' is-invalid' : '' }}"
                                value="{{ old('branch_name') }}" data-parsley-trigger="change"
                                data-parsley-pattern="^[a-zA-Z0-9\s]+$"
                                data-parsley-pattern-message="Branch name cann't contain special character"
                                data-parsley-trigger="change" data-parsley-minlength="2"
                                data-parsley-minlength-message="Branch name should conatin atleast 2 charachter!"
                                placeholder="{{ __('Branch Name') }}" name="branch_name">
                            @error('branch_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Branch Address-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="branch_address" class="fs-12 fw-semibold">{{ __('Branch Address') }}
                                <span class="text-primary">*</span></label>
                            <input type="text" {{ $is_registration_form ? 'required' : '' }}
                                class="{{ $is_registration_form ? 'required-input' : '' }} form-control mb-3 {{ $errors->has('branch_address') ? ' is-invalid' : '' }}"
                                value="{{ old('branch_address') }}" data-parsley-pattern="^[a-zA-Z0-9\s]+$"
                                data-parsley-pattern-message="Branch address cann't contain special character"
                                data-parsley-trigger="change" data-parsley-minlength="2"
                                data-parsley-minlength-message="Branch address should conatin atleast 2 charachter!"
                                data-parsley-trigger="change" placeholder="{{ __('Branch Address') }}"
                                name="branch_address">
                            @error('branch_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Account Currency-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="currency" class="fs-12 fw-semibold">{{ __('Account Currency') }}
                                <span class="text-primary">*</span></label>
                            <select name="currency" data-parsley-trigger="change"
                                class="{{ $is_registration_form ? 'required-input' : '' }} form-control mb-3 {{ $errors->has('currency') ? ' is-invalid' : '' }}">
                                @foreach (config('currencies.currencies') as $currency)
                                    <option value="{{ $currency['value'] }}">
                                        {{ $currency['label'] }}</option>
                                @endforeach
                            </select>

                            @error('currency')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Swift Code-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="currency" class="fs-12 fw-semibold">{{ __('Swift Code') }}
                                <span class="text-primary">*</span></label>
                            <input type="text" {{ $is_registration_form ? 'required' : '' }}
                                class="{{ $is_registration_form ? 'required-input' : '' }} form-control mb-3 {{ $errors->has('swift_code') ? ' is-invalid' : '' }}"
                                value="{{ old('swift_code') }}" data-parsley-pattern="^[A-Za-z]+$"
                                data-parsley-pattern-message="A Swift code is typically Contain characters only(No space or special character)"
                                data-parsley-trigger="change" data-parsley-errors-container="#swift_code_error"
                                placeholder="{{ __('Swift Code') }}" name="swift_code">

                            <div id="swift_code_error" class="error-container"></div>

                            @error('swift_code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- IBAN Number-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="currency" class="fs-12 fw-semibold">{{ __('IBAN Number') }}
                                <span class="text-primary">*</span></label>
                            <input type="text" {{ $is_registration_form ? 'required' : '' }}
                                class="{{ $is_registration_form ? 'required-input' : '' }} form-control mb-3 {{ $errors->has('iban_number') ? ' is-invalid' : '' }}"
                                value="{{ old('iban_number') }}" data-parsley-pattern="^[a-zA-Z0-9]+$"
                                data-parsley-pattern-message="Invalid IBAN Format! (Character and numbers only)"
                                data-parsley-trigger="change" data-parsley-errors-container="#iban_number_error"
                                data-parsley-trigger="change" placeholder="{{ __('IBAN Number') }}"
                                name="iban_number">

                            <div id="iban_number_error" class="error-container"></div>

                            @error('iban_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="step">
                <div class="row">
                    <div class="col-12 py-2 my-2">
                        <div class="mb-4">
                            <h6>{{ __('General Information') }}
                            </h6>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 email-col">
                        <div class="form-group">
                            <label>{{ __('Choose Agency') }} <span class="text-primary">*</span></label>
                            <select class="form-control mb-3" name="agency" id="">
                                <option value="">--Select Agency--</option>
                                @foreach ($agencies as $agency)
                                    <option value="{{ $agency->id }}">{{ $agency->company_name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('agency'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('agency') }}</strong>
                                </span>
                            @endif
                        </div>

                    </div>
                    <div class="col-lg-6 col-sm-12 email-col">
                        <div class="form-group">
                            <label>{{ __('Choose Business Account Manager') }} <span class="text-primary">*</span></label>
                            <select class="form-control mt-2" name="relational_manager" id="">
                                <option value="">--Choose Business Account Manager--</option>
                                @foreach ($agency_users as $relational_managers)
                                    <option value="{{ $relational_managers->id }}">
                                        {{ $relational_managers->name }}</option>
                                @endforeach
                            </select>
                          @error('relational_manager')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                    </div>
                

                    <!-- Full Name -->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="fname" class="fs-12 fw-semibold">{{ __('First Name') }}
                                <span class="text-primary">*</span> </label>
                            <input type="text" id="fname"
                                class="form-control mb-3 {{ $errors->has('fname') ? ' is-invalid' : '' }}"
                                value="{{ old('fname') }}" required data-parsley-trigger="change"
                                data-parsley-pattern="^[a-zA-Z\s]+$"
                                data-parsley-pattern-message="Full name should be conatin charachters only"
                                data-parsley-trigger="change" class="form-control mb-3 "
                                placeholder="{{ __('First Name') }}" name="fname">
                            @if ($errors->has('fname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('fname') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    {{-- username --}}

                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>{{ __('Username') }} <span class="text-primary">*</span></label>
                            <div class="input-group">
                                <input type="text"
                                    class="required-input form-control mb-3 mb-3 rounded-0{{ $errors->has('Username') ? ' is-invalid' : '' }}"
                                    value="{{ old('user_name') }}" placeholder="{{ __('Username') }}"
                                    name="user_name" id="user_name" aria-label="username"
                                    aria-describedby="basic-addon2" data-parsley-trigger="change"
                                    data-parsley-errors-container="#user_name_error" required
                                    data-parsley-trigger="change">


                                <div class="input-group-append">
                                    <button class="btn btn-dark btn-sm " type="button" id="create_user_name"
                                        style="height: 41.3px">Create
                                        username</button>
                                </div>
                            </div>
                            <div id="user_name_error" class="error-container"></div>


                            @error('user_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Country -->
                    <div class="col-lg-6 col-sm-12">

                        <div class="form-group">
                            <label>{{ __('Country') }} </label>
                            <select name="country" class="required-input countries form-control mb-3" id="countryId">
                                <option value="">Select Country</option>
                            </select>

                        </div>
                    </div>

                    <!-- state -->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>{{ __('State') }} <span class="text-primary">*</span></label>
                            <select name="state"
                                class="states required-input form-control mb-3  {{ $errors->has('city') ? ' is-invalid' : '' }}"
                                id="stateId">
                                <option value="">Select State</option>
                            </select>

                            @if ($errors->has('state'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('state') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <!-- City -->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>{{ __('City') }} <span class="text-primary">*</span></label>
                            <select name="city"
                                class="cities  form-control mb-3  {{ $errors->has('city') ? ' is-invalid' : '' }}"
                                id="cityId">
                                <option value="">Select City</option>
                            </select>

                            @if ($errors->has('city'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <!-- Addrress -->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>{{ __('Address') }} <span class="text-primary">*</span></label>
                            <input type="text"
                                class="required-input form-control mb-3 mb-3 rounded-0{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                value="{{ old('address') }}" placeholder="{{ __('Address') }}"
                                data-parsley-trigger="change" name="address" required data-parsley-trigger="change">
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- P.O. Box  -->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>{{ __('P.O. Box ') }} <span class="text-primary">*</span></label>
                            <input type="text"
                                class="required-input form-control mb-3 mb-3 rounded-0{{ $errors->has('po_box') ? ' is-invalid' : '' }}"
                                value="{{ old('po_box') }}" placeholder="{{ __('P.O. Box ') }}"
                                data-parsley-trigger="change" name="po_box" required data-parsley-trigger="change">
                            @error('po_box')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 email-col">
                        <div class="form-group">
                            <label for="agent_email" class="required fs-6 fw-semibold mb-2">{{ __('Email') }}
                                <span class="text-primary">*</span> </label>
                            <input type="email" data-parsley-trigger="change"
                                class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                value="{{ old('agent_email') }}" data-parsley-type="email"
                                placeholder="{{ __('Email') }}" name="agent_email" id="email"
                                data-parsley-required-message="Email is required!">
                            @error('agent_email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 pass-col">
                        <div class="form-group">

                            <label for="password">Password</label>
                            <div class="input-group">

                                <input type="text" class="form-control" id="password" name="password"
                                    data-parsley-errors-container="#pass_error" placeholder="Password">
                                <div class="input-group-append">
                                    <button class="btn btn-dark btn-sm" type="button" id="createPassword"
                                        style="height: 41.3px">Generate</button>
                                </div>
                            </div>
                            <div id="pass_error" class="error-container"></div>

                            </button>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <div id="q-box__buttons">
            <button id="prev-btn" type="button">Previous</button>
            <button id="next-btn" type="button">Next</button>
            <button id="submit-btn" type="submit">Submit</button>
        </div>
    </form>

</div>


@push('script')
    <!-- Include jQuery -->
    <script>
        $(document).ready(function() {
            window.Parsley.on('field:error', function() {
  // This global callback will be called for any field that fails validation.
  console.log('Validation failed for: ', this.$element);
});
            $("#trno_expiry").flatpickr({
                allowInput: true,
                altInput: true,
                altFormat: "F j, Y",
                dateFormat: "Y-m-d",
            });
            $("#createPassword").on("click", function() {
                var passwordLength = 12; // Change this value to set the length of the generated password
                var password = generatePassword(passwordLength);
                $("#password").val(password);
                $("#confirm_password").val(password);
            });
        });

        function generatePassword(length) {
            var charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+<>?:{}[]-=";
            var password = "";
            var specialChars = "!@#$%^&*()_+<>?:{}[]-=";

            for (var i = 0; i < length; i++) {
                var category = Math.floor(Math.random() * 4);
                switch (category) {
                    case 0: // Lowercase letters
                        password += getRandomCharacter(charset, 0, 25);
                        break;
                    case 1: // Uppercase letters
                        password += getRandomCharacter(charset, 26, 51);
                        break;
                    case 2: // Numbers
                        password += getRandomCharacter(charset, 52, 61);
                        break;
                    case 3: // Special characters
                        password += getRandomCharacter(specialChars, 0, specialChars.length - 1);
                        break;
                }
            }

            return password;
        }

        function getRandomCharacter(charset, startIndex, endIndex) {
            var randomIndex = Math.floor(Math.random() * (endIndex - startIndex + 1) + startIndex);
            return charset[randomIndex];
        }

        @if (auth()->check())
            $(document).ready(function() {
                $('.pass-col').show();
                $('.pass-col').find(':input').attr('required', true);
                $('.email-col').hide(); // Corrected the class name
            });
        @else
            $(document).ready(function() {
                $('.email-col').hide();
                $('.pass-col').hide();
            });
        @endif

        $('input[name="register_as"]').on('change', function() {

            var register = $('input[name="register_as"]:checked').val();
            if (register == 'Agent') {
                $('.pass-col').show();
                $('.pass-col').find(':input').attr('required', true);
                $('.email-col').show();
                $('.email-col').find(':input').attr('required', true);

            } else {
                $('.pass-col').hide();
                $('.pass-col').find(':input').removeAttr('required');
                $('.email-col').hide();
                $('.email-col').find(':input').removeAttr('required');
            }


        });
       
    </script>
@endpush
