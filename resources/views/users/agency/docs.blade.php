@extends('layouts.main')
@section('page-title')
    {{ __('Manage Document') }}
@endsection
@section('page-breadcrumb')
    {{ __('Document') }}
@endsection
@section('page-action')
    <div>
        @stack('addButtonHook')

    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('Modules/Hrm/Resources/assets/css/custom.css') }}">
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput.min.css" media="all"
        rel="stylesheet" type="text/css" />
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card em-card">
                <div class="card-header d-flex justify-content-between">
                    <h6>{{ __('Document') }}</h6>
                   
                    @if(!empty($agency->brokage_signed_agreement))
                        <a class="mx-3 btn btn-sm align-items-center btn-primary btn p-2"
                        href="{{ get_file('uploads/agreements/Brokage-Signed-Agreement-Agency-' . $agency->id . '.pdf') }}"
                        download>
                        Download Signed Agreement<i class="ti ti-download text-white"></i>
                    </a>
                    @else
                    <a class="mx-3 btn btn-sm align-items-center btn-primary btn p-2"
                        href="{{ get_file('uploads/agreements/Brokage-Agreement-Agency-' . $agency->id . '.pdf') }}"
                        download>
                        Download Agreement ( Fresh Copy ) <i class="ti ti-download text-white"></i>
                    </a>
                    @endif
                </div>
                <div class="card-body">

                    {{ Form::model($agency, ['route' => ['agency.update', $agency->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) }}
                    <div class="row">
                        @if (empty($agency->brokage_signed_agreement))
                            <div class="form-group col-12">
                                <label for="document" class=" form-label">{{ __('Download Agreement and upload Signed Document') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="file" name="brokage_signed_agreement" id="brokage_signed_agreement"
                                    data-show-preview="false">
                            </div>
                        @endif

                        @if (!empty($agency->brokage_agreement) && $agency->is_agreement_signed == false)
                            <div class="form-group col-lg-6">
                                <label for="document" class=" form-label">{{ __('NO OBJECTION CERTIFICATE') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="file" name="noc" id="noc" data-show-preview="true">
                            </div>
                        @endif
                        <div class="form-group col-lg-6">
                            <label for="document" class=" form-label">{{ __('TRN Certificate') }}
                                <span class="text-danger">*</span>
                            </label>
                            <input type="file" name="trn_certificate" id="trn_certificate" data-show-preview="true">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="document" class=" form-label">{{ __('Rera Certificate') }}
                                <span class="text-danger">*</span>
                            </label>
                            <input type="file" name="rera_certificate" id="rera_certificate" data-show-preview="true">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="document" class=" form-label">{{ __('Passport') }}
                                <span class="text-danger">*</span>
                            </label>
                            <input type="file" name="passport" id="passport" data-show-preview="true">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="document" class=" form-label">{{ __('Emirates ID') }}
                                <span class="text-danger">*</span>
                            </label>
                            <input type="file" name="emirates_id" id="emirates_id" data-show-preview="true">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="document" class=" form-label">{{ __('Rara Card') }}
                                <span class="text-danger">*</span>
                            </label>
                            <input type="file" name="rara_card" id="rara_card" data-show-preview="true">
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>

            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/fileinput.min.js"></script>

    <script>
        $("#brokage_signed_agreement").fileinput({
            showUpload: true,
        });

        function preview(inputs, initialPreview, ispdf, caption) {
            console.log(initialPreview);
            $("#" + inputs).fileinput({
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
        // preview('brokage_agreement', '{{ get_file('uploads/agreements/Brokage-Agreement-Agency-' . $agency->id . '.pdf') }}',
        //     '{{ pathinfo(get_file('uploads/agreements/Brokage-Agreement-Agency-' . $agency->id . '.pdf'), PATHINFO_EXTENSION) === 'pdf' }}',
        //     'Brokage Agreement');
        preview('noc', '{{ get_file('uploads/agreements/NOC-' . $agency->id . '.pdf') }}',
            '{{ pathinfo(get_file('uploads/agreements/NOC-' . $agency->id . '.pdf'), PATHINFO_EXTENSION) === 'pdf' }}',
            'NO OBJECTION CERTIFICATE');
    </script>
@endpush
