@extends('layouts.main')
@section('page-title')
    {{ __(isset($agency) ? 'Edit' : 'Create' . 'Agency') }}
@endsection
@section('page-breadcrumb')
    {{ __('Edit Agency') }}
@endsection
@section('page-action')
    <div class="col-auto pe-0 pt-3">
        <a href="{{ route('agency.index') }}" class="btn btn-sm btn-primary p-2" data-toggle="tooltip"
            title="{{ __('All Agencies') }}">
            <i class="ti ti-eye"></i>
        </a>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('Modules/Hrm/Resources/assets/css/custom.css') }}">
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput.min.css" media="all"
        rel="stylesheet" type="text/css" />
@endpush
<style>
    .max-with-120 {
        max-width: 120px;
    }

    .em-card {
        min-height: 421px !important;
    }

    .choose-files .file-box {
        width: 153px;
        height: 160px;
        border: 1px solid #ccc;
        border-radius: 20px;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .file-icon {
        font-size: 48px;
        margin-bottom: 10px;
    }
</style>
@section('content')
    <div class="row">
        @if (isset($agency))
            {{ Form::model($agency, ['route' => ['agency.update', $agency->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) }}
        @else
            {{ Form::open(['route' => ['agency.store'], 'method' => 'post', 'enctype' => 'multipart/form-data']) }}
        @endif
        <div class="">
            <div class="">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="card em-card">
                            <div class="card-header">
                                <h6>{{ __('Personal Detail') }}</h6>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        {!! Form::label('name', __('Name'), ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                        {!! Form::text('name', isset($agency) ? $agency->user->name : '', [
                                            'class' => 'form-control',
                                            'required' => 'required',
                                        ]) !!}
                                    </div>

                                    <div class="form-group col-md-6">
                                        <input type="hidden" name="full_mobile_no" id="full_mobile" class="full_mobile"
                                            value="{{ old('full_mobile_no') }}">
                                        {!! Form::label('mobile_no', __('Phone'), ['class' => 'form-label mobile_no']) !!}<span class="text-danger pl-1">*</span>
                                        {!! Form::number('mobile_no', null, [
                                            'class' => 'form-control',
                                            'required' => 'required',
                                            'id' => 'mobile_no',
                                        ]) !!}
                                    </div>
                                    @if (!isset($agency))
                                        <div class="form-group col-md-6">
                                            {!! Form::label('user_name', __('User Name'), ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                            {!! Form::text('user_name', isset($agency) ? $agency->user->user_name : '', [
                                                'class' => 'form-control',
                                                'required' => 'required',
                                            ]) !!}
                                        </div>
                                        <div class="form-group col-md-6">

                                            {!! Form::label('email', __('Email'), ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                            {!! Form::email('email', null, [
                                                'class' => 'form-control',
                                                'required' => 'required',
                                            ]) !!}
                                        </div>
                                        <div class="form-group col-md-6">

                                            {!! Form::label('password', __('Password'), ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                           <input type="password" name="password" id="password" class="form-control">
                                        </div>
                                    @endif
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('country', __('Country'), ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                            {!! Form::select('country', [], null, [
                                                'class' => 'form-control selectpicker countrypicker',
                                                'id' => 'country_selector',
                                                'data-live-search' => 'true',
                                                'data-default' => 'United Arab Emirates',
                                                'required' => 'required',
                                                'data-flag' => 'true',
                                            ]) !!}


                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('po_box', __('PO. Box'), ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                            {!! Form::text('po_box', null, [
                                                'class' => 'form-control ',
                                                'required' => 'required',
                                                'placeholder' => 'Select Date of Birth',
                                                'max' => date('Y-m-d'),
                                            ]) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('address', __('Address'), ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                    {!! Form::textarea('address', isset($agency) ? $agency->user->address : null, [
                                        'class' => 'form-control',
                                        'rows' => 2,
                                        'required' => 'required',
                                    ]) !!}
                                </div>

                                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card em-card">
                            <div class="card-header">
                                <h6>{{ __('Bank Account Detail') }}</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        {!! Form::label('ac_name', __('Account Holder Name'), ['class' => 'form-label']) !!}
                                        {!! Form::text('ac_name', null, ['class' => 'form-control']) !!}

                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('account_number', __('Account Number'), ['class' => 'form-label']) !!}
                                        {!! Form::number('account_number', null, ['class' => 'form-control']) !!}

                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('bank_name', __('Bank Name'), ['class' => 'form-label']) !!}
                                        {!! Form::text('bank_name', null, ['class' => 'form-control']) !!}

                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('swift_code', __('Swift Code'), ['class' => 'form-label']) !!}
                                        {!! Form::text('swift_code', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('branch_address', __('Branch Location'), ['class' => 'form-label']) !!}
                                        {!! Form::text('branch_address', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('branch_name', __('Branch Name'), ['class' => 'form-label']) !!}
                                        {!! Form::text('branch_name', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">

                    <div class="col-12">
                        <div class="card em-card">
                            <div class="card-header">
                                <h6>{{ __('Company Detail') }}</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @csrf
                                    <div class="form-group">
                                        {!! Form::label('registration_no', __('Registeration No'), ['class' => 'form-label']) !!}
                                        {!! Form::number('registration_no', isset($agency) ? $agency->registration_no : null, [
                                            'class' => 'form-control',
                                        ]) !!}
                                          @error('registration_no')
                                          <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        {{ Form::label('company_name', __('Agency Name'), ['class' => 'form-label']) }}<span
                                            class="text-danger pl-1">*</span>
                                        {!! Form::text('company_name', isset($agency) ? $agency->company_name : null, ['class' => 'form-control']) !!}
                                        @error('company_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        {{ Form::label('website', __('Website'), ['class' => 'form-label']) }}<span
                                            class="text-danger pl-1">*</span>
                                        {!! Form::text('website', isset($agency) ? $agency->website : null, ['class' => 'form-control']) !!} </div>
                                        @error('website')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                        <div class="form-group col-md-6">
                                        {{ Form::label('company_whatsapp', __('Whatsapp No'), ['class' => 'form-label']) }}<span
                                            class="text-danger pl-1">*</span>
                                        {!! Form::number('company_whatsapp', isset($agency) ? $agency->company_whatsapp : null, [
                                            'class' => 'form-control',
                                        ]) !!}
                                      @error('company_whatsapp')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror   
                                </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('trno_issue_place', 'TRN Issue Place', ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                        {!! Form::text('trno_issue_place', isset($agency) ? $agency->trno_issue_place : null, [
                                            'class' => 'form-control',
                                        ]) !!}
                                            @error('trno_issue_place')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror   
                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('trno_expiry', 'TRN Expiry', ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                        {!! Form::text('trno_expiry', isset($agency) ? $agency->trno_expiry : null, ['class' => 'form-control']) !!}
                                        @error('trno_expiry')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror 
                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('agency_license_number', 'License No', ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                        {!! Form::text('agency_license_number', isset($agency) ? $agency->agency_license_number : null, [
                                            'class' => 'form-control',
                                        ]) !!}
                                              @error('agency_license_number')
                                              <span class="text-danger">{{ $message }}</span>
                                          @enderror 
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                @if (!isset($agency))
                    <div class="row">
                        <div class="col-12">
                            <div class="card em-card">
                                <div class="card-header">
                                    <h6>{{ __('Document') }}</h6>
                                </div>
                                <div class="card-body">

                                    <div class="row">

                                        <div class="form-group col-lg-6">
                                            <label for="document" class=" form-label">{{ __('TRN Certificate') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="file" name="trn_certificate" data-show-preview="false"
                                                id="trn_certificate">
                                            @error('trn_certificate')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="document" class=" form-label">{{ __('Trade License') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="file" name="trade_license" data-show-preview="false"
                                                id="trade_license">
                                            @error('trade_license')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="document" class=" form-label">{{ __('Rera Certificate') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="file" name="rera_certificate" data-show-preview="false"
                                                id="rera_certificate">
                                            @error('rera_certificate')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="document" class=" form-label">{{ __('Passport') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="file" name="passport" data-show-preview="false"
                                                id="passport">
                                            @error('passport')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="document" class=" form-label">{{ __('Emirates ID') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="file" name="emirates_id" data-show-preview="false"
                                                id="emirates_id">
                                            @error('emirates_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="document" class=" form-label">{{ __('Rara Card') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="file" name="rara_card" data-show-preview="false"
                                                id="rara_card">
                                            @error('rara_card')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    {!! Form::close() !!}

                                </div>

                            </div>
                        </div>
                    </div>
                @endif

                <div class="float-end">
                    <button type="submit" id="submit" class="btn  btn-primary">{{ 'Save Changes' }}</button>
                </div>

            </div>
        </div>
        {!! Form::close() !!}

    </div>
@endsection

@push('scripts')
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/fileinput.min.js"></script>

    <script>
        $("#submit").click(function() {
            $(".doc_data").each(function() {
                if (!isNaN(this.value)) {
                    var id = '#doc_validation-' + $(this).data("key");
                    $(id).removeClass('d-none')
                    return false;
                }
            });
        });

        @isset($agency)

            function preview(inputs, initialPreview, ispdf, caption) {
                console.log(initialPreview);
                $("#" + inputs).fileinput({
                    showUpload: false,
                    initialPreviewAsData: true,
                    previewFileType: 'any',
                    @isset($agency)
                        initialPreview: initialPreview,
                        initialPreviewConfig: [{
                            type: ispdf == 1 ? "pdf" : "image",
                            size: ispdf == 1 ? "8000" : "762980",
                            caption: caption,
                            title: caption,
                            key: ispdf == 1 ? 10 : 8,
                        }],
                    @endisset
                });
            }

            preview('trn_certificate', '{{ get_file('uploads/broker_documents/' . $agency->trn_certificate) }}',
                '{{ pathinfo($agency->trn_certificate, PATHINFO_EXTENSION) === 'pdf' }}', 'TRN Certificate');

            preview('rera_certificate', '{{ get_file('uploads/broker_documents/' . $agency->rera_certificate) }}',
                '{{ pathinfo($agency->rera_certificate, PATHINFO_EXTENSION) === 'pdf' }}', 'Rera Certificate');

            preview('passport', '{{ get_file('uploads/broker_documents/' . $agency->passport) }}',
                '{{ pathinfo($agency->passport, PATHINFO_EXTENSION) === 'pdf' }}', 'Passport');

            preview('emirates_id', '{{ get_file('uploads/broker_documents/' . $agency->emirates_id) }}',
                '{{ pathinfo($agency->emirates_id, PATHINFO_EXTENSION) === 'pdf' }}', 'Emirates ID');

            preview('rara_card', '{{ get_file('uploads/broker_documents/' . $agency->rara_card) }}',
                '{{ pathinfo($agency->rara_card, PATHINFO_EXTENSION) === 'pdf' }}', 'Rera Card');
        @else
            $('input[type="file"]').fileinput({
                showUpload: false,
            });
        @endisset

        $(document).ready(function() {
            initializeIntlInput(".full_mobile", ".mobile_no");
        });
    </script>
@endpush
