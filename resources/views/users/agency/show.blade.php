@extends('layouts.main')
@section('page-title')
    {{ __('Agency Mangement') }}
@endsection
@section('page-breadcrumb')
    {{ __('Agency Mangement') }}
@endsection
<style>
    .emp-card {
        min-height: 193px !important;
    }
</style>
@push('css')
    <link rel="stylesheet" href="{{ asset('Modules/Hrm/Resources/assets/css/custom.css') }}">
@endpush
@section('page-action')
    {{-- <div class="col-auto p-0">
        <div class="d-flex justify-content-end drp-languages">
            <ul class="list-unstyled mb-0 m-2">
                <li class="dropdown dash-h-item drp-language">
                    <a class="dash-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <span class="drp-text hide-mob text-primary"> {{ __('Joining Letter') }}
                            <i class="ti ti-chevron-down drp-arrow nocolor hide-mob"></i>
                    </a>
                    <div class="dropdown-menu dash-h-dropdown">
                        <a href="{{ route('joiningletter.download.pdf', $agency->id) }}" class=" btn-icon dropdown-item"
                            data-bs-toggle="tooltip" data-bs-placement="top" target="_blanks"><i
                                class="ti ti-download ">&nbsp;</i>{{ __('PDF') }}</a>

                        <a href="{{ route('joininglatter.download.doc', $agency->id) }}" class=" btn-icon dropdown-item"
                            data-bs-toggle="tooltip" data-bs-placement="top" target="_blanks"><i
                                class="ti ti-download ">&nbsp;</i>{{ __('DOC') }}</a>
                    </div>
                </li>
            </ul>
            <ul class="list-unstyled mb-0 m-2">
                <li class="dropdown dash-h-item drp-language">
                    <a class="dash-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <span class="drp-text hide-mob text-primary"> {{ __('Experience Certificate') }}
                            <i class="ti ti-chevron-down drp-arrow nocolor hide-mob"></i>
                    </a>
                    <div class="dropdown-menu dash-h-dropdown">
                        <a href="{{ route('exp.download.pdf', $agency->id) }}" class=" btn-icon dropdown-item"
                            data-bs-toggle="tooltip" data-bs-placement="top" target="_blanks"><i
                                class="ti ti-download ">&nbsp;</i>{{ __('PDF') }}</a>

                        <a href="{{ route('exp.download.doc', $agency->id) }}" class=" btn-icon dropdown-item"
                            data-bs-toggle="tooltip" data-bs-placement="top" target="_blanks"><i
                                class="ti ti-download ">&nbsp;</i>{{ __('DOC') }}</a>
                    </div>
                </li>
            </ul>
            <ul class="list-unstyled mb-0 m-2">
                <li class="dropdown dash-h-item drp-language">
                    <a class="dash-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <span class="drp-text hide-mob text-primary"> {{ __('NOC') }}
                            <i class="ti ti-chevron-down drp-arrow nocolor hide-mob"></i>
                    </a>
                    <div class="dropdown-menu dash-h-dropdown">
                        <a href="{{ route('noc.download.pdf', $agency->id) }}" class=" btn-icon dropdown-item"
                            data-bs-toggle="tooltip" data-bs-placement="top" target="_blanks"><i
                                class="ti ti-download ">&nbsp;</i>{{ __('PDF') }}</a>

                        <a href="{{ route('noc.download.doc', $agency->id) }}" class=" btn-icon dropdown-item"
                            data-bs-toggle="tooltip" data-bs-placement="top" target="_blanks"><i
                                class="ti ti-download ">&nbsp;</i>{{ __('DOC') }}</a>
                    </div>
                </li>
            </ul>
        </div>
    </div> --}}
    <div class="col-auto pe-0 pt-3">
        {{-- @can('designation create') --}}
        <a href="{{ route('agency.edit', $agency->id) }}" class="btn btn-sm btn-primary p-2" data-toggle="tooltip"
            title="{{ __('Edit') }}">
            <i class="ti ti-pencil"></i>
        </a>
        <a href="{{ route('agency.docs', $agency->id) }}" class="btn btn-sm btn-primary p-2" data-toggle="tooltip"
            title="{{ __('Documents') }}">
            <i class="ti ti-file"></i>
        </a>
        {{-- @endcan --}}
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-sm-12 col-md-6">

                    <div class="card ">
                        <div class="card-body employee-detail-body fulls-card emp-card">
                            <h5>{{ __('Personal Detail') }}</h5>
                            <hr>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="info text-points font-style">
                                        <strong class="font-bold">{{ __('Name') }} :</strong>
                                        <span>{{ $agency->user->fname }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info text-points font-style">
                                        <strong class="font-bold">{{ __('Email') }} :</strong>
                                        <span>{{ $agency->user->email }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info text-points">
                                        <strong class="font-bold">{{ __('Phone') }} :</strong>
                                        <span>{{ $agency->user->mobile_no }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info text-points">
                                        <strong class="font-bold">{{ __('Country') }} :</strong>
                                        <span>{{ $agency->user->country }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info text-points">
                                        <strong class="font-bold">{{ __('State') }} :</strong>
                                        <span>{{ $agency->user->state }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info text-points">
                                        <strong class="font-bold">{{ __('City') }} :</strong>
                                        <span>{{ $agency->user->city }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info text-points">
                                        <strong class="font-bold">{{ __('Address') }} :</strong>
                                        <span>{{ $agency->user->address }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info text-points">
                                        <strong class="font-bold">{{ __('PO.Box') }} :</strong>
                                        <span>{{ $agency->po_box }}</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">

                    <div class="card ">
                        <div class="card-body employee-detail-body fulls-card emp-card">
                            <h5>{{ __('Company Detail') }}</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="info text-points">
                                        <strong class="font-bold">{{ __('Registration No') }}
                                            : </strong>
                                        <span>{{ $agency->registration_no }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info text-points font-style">
                                        <strong class="font-bold">{{ __('Agency Name') }}
                                            :</strong>
                                        <span>{{ $agency->company_name }}</span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="info text-points">
                                        <strong class="font-bold">{{ __('Website') }}
                                            :</strong>
                                        <span>{{ $agency->website }}</span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="info text-points">
                                        <strong class="font-bold">{{ __('Company Phone') }} :</strong>
                                        <span>{{ $agency->company_whatsapp }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info text-points">
                                        <strong class="font-bold">{{ __('TRN Issue Place') }} :</strong>
                                        <span>{{ $agency->trno_issue_place }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info text-points">
                                        <strong class="font-bold">{{ __('TRN Expiry') }} :</strong>
                                        <span>{{ $agency->trno_expiry }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info text-points">
                                        <strong class="font-bold">{{ __('License No') }} :</strong>
                                        <span>{{ $agency->agency_license_number }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6">

                    <div class="card ">
                        <div class="card-body employee-detail-body fulls-card emp-card">
                            <h5>{{ __('Document Detail') }}</h5>
                            <hr>
                            <div class="row">
                                @if ($agency->is_agreement_signed == false)
                                    <p class="text-danger">Please Upload the signed Agreement</p>
                                @else
                                    <div class="col-md-6">
                                        <div class="info text-points">
                                            <strong class="font-bold">{{ __('Broker Agreement') }} : </strong>
                                            <span><a href="{{ get_file('uploads/agreements/Brokage-Agreement-Agency-' . $agency->id . '.pdf') ?? '' }}"
                                                    target="_blank">{{ __('View') }}</a></span>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-md-6">
                                    <div class="info text-points">
                                        <strong class="font-bold">{{ __('Trade License Certificate') }} : </strong>
                                        <span><a href="{{ get_file('uploads/broker_documents/' . $agency->trn_certificate) ?? '' }}"
                                                target="_blank">{{ __('View') }}</a></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info text-points">
                                        <strong class="font-bold">{{ __('Rera Certificate') }} : </strong>
                                        <span><a href="{{ get_file('uploads/broker_documents/' . $agency->rera_certificate) ?? '' }}"
                                                target="_blank">{{ __('View') }}</a></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info text-points">
                                        <strong class="font-bold">{{ __('Passport Copy') }} : </strong>
                                        <span><a href="{{ get_file('uploads/broker_documents/' . $agency->passport) ?? '' }}"
                                                target="_blank">{{ __('View') }}</a></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info text-points">
                                        <strong class="font-bold">{{ __('Emirates ID') }} : </strong>
                                        <span><a href="{{ get_file('uploads/broker_documents/' . $agency->emirates_id) ?? '' }}"
                                                target="_blank">{{ __('View') }}</a></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info text-points">
                                        <strong class="font-bold">{{ __('Rara Card') }} : </strong>
                                        <span><a href="{{ get_file('uploads/broker_documents/' . $agency->rara_card) ?? '' }}"
                                                target="_blank">{{ __('View') }}</a></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">

                    <div class="card ">
                        <div class="card-body employee-detail-body fulls-card emp-card">
                            <h5>{{ __('Bank Account Detail') }}</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="info text-points">
                                        <strong class="font-bold">{{ __('Account Holder Name') }} : </strong>
                                        <span>{{ $agency->ac_name }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info text-points font-style">
                                        <strong class="font-bold">{{ __('Account Number') }} :</strong>
                                        <span>{{ $agency->account_number }}</span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="info text-points">
                                        <strong class="font-bold">{{ __('Bank Name') }} :</strong>
                                        <span>{{ $agency->bank_name }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info text-points">
                                        <strong class="font-bold">{{ __('Swift Code') }} :</strong>
                                        <span>{{ $agency->swift_code }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info text-points">
                                        <strong class="font-bold">{{ __('Branch Name') }} :</strong>
                                        <span>{{ $agency->branch_name }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info text-points">
                                    <strong class="font-bold">{{ __('Branch Location') }} :</strong>
                                    <span>{{ $agency->branch_address }}</span>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
