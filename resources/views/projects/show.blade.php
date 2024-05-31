@extends('layouts.main')
@php
    if ($project->type == 'project') {
        $name = 'Project';
    } else {
        $name = 'Project Template';
    }
@endphp
@section('page-title')
    {{ __($name . ' Detail') }}
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/dropzone.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('Modules/Taskly/Resources/assets/css/custom.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">
@endpush
@section('page-breadcrumb')
    {{ __($name . ' Detail') }}
@endsection

@section('page-action')
    @if ($project->type == 'project')
        @stack('addButtonHook')
    @else
        @stack('projectConvertButton')
    @endif
@endsection
@push('css')
    <link rel="stylesheet" href="{{ Module::asset('Taskly:Resources/assets/css/dropzone.min.css') }}">
    <style>
        .milestone-card {
            height: auto !important;
        }
    </style>
@endpush
@section('content')
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card bg-primary">
                                <div class="card-body">
                                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                                        <h4 class="text-white"> {{ $project->name }}</h4>
                                        <div class="d-flex  align-items-center">
                                            <div class="px-3">
                                                <span class="text-white text-sm">{{ __('Location') }}:</span>
                                                <h5 class="text-white text-nowrap">
                                                    {{ $project->location }}
                                                </h5>
                                            </div>
                                            <div class="px-3">
                                                <span class="text-white text-sm">{{ __('Launch Date') }}:</span>
                                                <h5 class="text-white text-nowrap">
                                                    {{ $project->launch_date }}
                                                </h5>
                                            </div>
                                            <div class="px-3">
                                                <span class="text-white text-sm">{{ __('Total Units') }}:</span>
                                                <h5 class="text-white text-nowrap">
                                                    {{ $project->total_units }}
                                                </h5>
                                            </div>
                                            <div class="px-3">
                                                @if ($project->status == 'Closed')
                                                    <div class="badge  bg-danger p-2 px-3 rounded"> {{ __('Closed') }}
                                                    </div>
                                                @elseif($project->status == 'HandOver')
                                                    <div class="badge  bg-warning p-2 px-3 rounded">{{ __('HandOver') }}
                                                    </div>
                                                @else
                                                    <div class="badge bg-success p-2 px-3 rounded">{{ __('Launched') }}
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="btn btn-light d-flex align-items-between">
                                            <a class="" data-size="lg"
                                                href="{{ route('project.downloads', [$project->slug]) }}" data-=""
                                                data-title="{{ __('Marketing Material ') . $name }}" data-toggle="tooltip"
                                                title="{{ __('Marketing Material') }}">
                                                <i class="ti ti-download"> </i>
                                            </a>
                                        </div>
                                        @if (!Auth::user()->can('project edit') || Auth::user()->type != 'company')
                                            <button class="btn btn-light d">
                                                <a href="#" class="" title="{{ __('Locked') }}">
                                                    <i class="ti ti-lock"> </i></a>
                                            </button>
                                        @else
                                            <div class="d-flex align-items-center ">

                                                @can('project edit')
                                                    <div class="btn btn-light d-flex align-items-between me-3">
                                                        <a href="#" class="" data-size="lg"
                                                            data-url="{{ route('empire-projects.edit', [$project->id]) }}"
                                                            data-="" data-ajax-popup="true"
                                                            data-title="{{ __('Edit ') . $name }}" data-toggle="tooltip"
                                                            title="{{ __('Edit') }}">
                                                            <i class="ti ti-pencil"> </i>
                                                        </a>
                                                    </div>
                                                @endcan
                                                @can('project delete')
                                                    {!! Form::open([
                                                        'method' => 'DELETE',
                                                        'route' => ['empire-projects.destroy', $project->id],
                                                        'id' => 'delete-form-' . $project->id,
                                                    ]) !!}
                                                    <button class="btn btn-light d" type="button"><a href="#"
                                                            data-toggle="tooltip" title="{{ __('Delete') }}"
                                                            class="bs-pass-para show_confirm"><i class="ti ti-trash">
                                                            </i></a></button>
                                                    {!! Form::close() !!}
                                                @endcan

                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @if ($project->type == 'project')
                                    <div class="col-lg-3 col-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="theme-avtar bg-primary">
                                                        <i class="fas fas fa-calendar-day"></i>
                                                    </div>
                                                    <div class="col text-end">
                                                        <h6 class="text-muted">{{ __('Days left') }}</h6>
                                                        <span class="h6 font-weight-bold mb-0 ">{{ $daysleft }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="theme-avtar bg-info">
                                                        <i class="fas fa-money-bill-alt"></i>
                                                    </div>
                                                    <div class="col text-end">
                                                        <h6 class="text-muted">{{ __('Budget') }}</h6>
                                                        <span
                                                            class="h6 font-weight-bold mb-0 ">{{ company_setting('defult_currancy') }}
                                                            {{ number_format($project->budget) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @php
                                    $class = $project->type == 'template' ? 'col-lg-6 col-6' : 'col-lg-3 col-6';
                                @endphp

                                <div class="{{ $class }}">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="theme-avtar bg-danger">
                                                    <i class="fas fa-stairs"></i>
                                                </div>
                                                <div class="col text-end">
                                                    <h6 class="text-muted">{{ __('Total Floors') }}</h6>
                                                    <span
                                                        class="h6 font-weight-bold mb-0 ">{{ $project->total_floor }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="{{ $class }}">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="theme-avtar bg-primary">
                                                    <i class="fa-solid fa-hourglass-start"></i>
                                                </div>
                                                <div class="col text-end">
                                                    <h6 class="text-muted">{{ __('On Booking (%)') }}</h6>
                                                    <span
                                                        class="h6 font-weight-bold mb-0 ">{{ $project->booking_percentage }}
                                                        %</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="{{ $class }}">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="theme-avtar bg-success">
                                                    <i class="fas fa-check-double"></i>
                                                </div>
                                                <div class="col text-end">
                                                    <h6 class="text-muted">{{ __('On Completion (%)') }}</h6>
                                                    <span
                                                        class="h6 font-weight-bold mb-0 ">{{ $project->completion_percentage }}
                                                        %</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="{{ $class }}">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="theme-avtar bg-warning">
                                                    <i class="fa-solid fa-calendar-week"></i>
                                                </div>
                                                <div class="col text-end">
                                                    <h6 class="text-muted">{{ __('Installment (%)') }}</h6>
                                                    <span
                                                        class="h6 font-weight-bold mb-0 ">{{ $project->installment_percentage }}
                                                        %</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card milestone-card">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="mb-0">{{ __('Units') }} ({{ $units->count() }})</h5>
                                        </div>
                                        <div class="float-end d-flex">
                                            <p class="text-muted d-sm-flex align-items-center mb-0 me-3">
                                                <a href="{{ route('project.units.grid.view', [$project->id]) }}"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-original-title="{{ __('Grid View') }}"
                                                    class="btn btn-sm btn-primary btn-icon ">
                                                    <i class="ti ti-layout-grid"></i>
                                                </a>
                                            </p>
                                            @can('project create')
                                                @if (Auth::user()->type == 'company')
                                                    <p class="text-muted d-sm-flex align-items-center mb-0 me-3">
                                                        <a class="btn btn-sm btn-primary" data-size="lg"
                                                            data-ajax-popup="true" data-title="{{ __('Create Unit') }}"
                                                            data-url="{{ route('project.unit.create', [$project->slug]) }}"
                                                            data-toggle="tooltip" title="{{ __('Create Unit') }}"><i
                                                                class="ti ti-plus"></i></a>
                                                    </p>
                                                    <p class="text-muted d-sm-flex align-items-center mb-0 me-3">
                                                        <a href="#" class="btn btn-sm btn-primary btn-icon"
                                                            data-ajax-popup="true" data-title="{{ __('Unit Import') }}"
                                                            data-url="{{ route('unit.import', [$project->id]) }}"
                                                            data-toggle="tooltip" title="{{ __('Import') }}"><i
                                                                class="ti ti-file-import"></i>
                                                        </a>
                                                    </p>
                                                @endif
                                            @endcan

                                            <p class="text-muted d-sm-flex align-items-center mb-0">
                                                <a href="#" class="btn btn-sm btn-primary btn-icon"
                                                    data-ajax-popup="true" data-title="{{ __('Unit Export') }}"
                                                    data-url="{{ route('unit.export', [$project->id]) }}"
                                                    data-toggle="tooltip" title="{{ __('Export') }}"><i
                                                        class="ti ti-file-export"></i>
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-body table-border-style">
                                    <div class="table-responsive">
                                        <table class="table mb-0 pc-dt-simple" id="users">
                                            <thead>
                                                <tr>
                                                    <th>{{ __('Status') }}</th>
                                                    <th>{{ __('Unit No') }}</th>
                                                    <th>{{ __('Type') }}</th>
                                                    <th>{{ __('Apartment View') }}</th>
                                                    <th>{{ __('Floor Number') }}</th>
                                                    <th>{{ __('Area') }}</th>
                                                    <th>{{ __('Selling Price') }}</th>
                                                    <th>{{ __('Action') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($units as $key => $unit)
                                                    <tr>
                                                        <td>

                                                            @if ($unit->status == 'Reserved')
                                                                <label
                                                                    class="badge bg-danger p-2 px-3 rounded">{{ __('Reserved') }}</label>
                                                            @elseif ($unit->status == 'Sold')
                                                                <label
                                                                    class="badge bg-success p-2 px-3 rounded">{{ __('Sold') }}</label>
                                                            @else
                                                                <label
                                                                    class="badge bg-secondary p-2 px-3 rounded">{{ __('Available') }}</label>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            {{ $unit->unit_no }}

                                                            {{-- <a href="#"
                                                            data-ajax-popup="true" data-title="{{ __('Unit Detail') }}"
                                                            data-url="{{ route('unit.show',[$unit->id])}}"
                                                            data-toggle="tooltip" title="{{ __('Unit Detail') }}"> {{ $unit->unit_no }} 
                                                        </a> --}}

                                                        </td>
                                                        <td> {{ $unit->unit_type }} </td>
                                                        <td> {{ $unit->apartment_view }} </td>
                                                        <td> {{ $unit->floor_number }} </td>
                                                        <td> {{ $unit->area }} </td>
                                                        <td> {{ $unit->selling_price }} </td>

                                                        <td class="col-auto">

                                                            @if ($unit->status == 'Available')
                                                                @can('salesoffer create')
                                                                    <div class="action-btn btn-primary ms-2">
                                                                        <a class="action-btn btn-success mx-1  btn btn-sm d-inline-flex align-items-center"
                                                                            data-ajax-popup="true" data-size="lg"
                                                                            data-title="{{ __('Generate Sales Offer') }}"
                                                                            data-url="{{ route('unit.sales.offer', [$project->slug, $unit->id]) }}"
                                                                            data-toggle="tooltip"
                                                                            title="{{ __('Generate Sales Offer') }}"><i
                                                                                class="ti ti-file text-white"></i></a>
                                                                    </div>
                                                                @endcan
                                                                @can('unit make reservation')
                                                                    <div class="action-btn btn-primary ms-2">
                                                                        <a class="action-btn btn-secondary mx-1  btn btn-sm d-inline-flex align-items-center"
                                                                            data-ajax-popup="true" data-size="lg"
                                                                            data-title="{{ __('Reserve Unit') }}"
                                                                            data-url="{{ route('unit.reserve', [$unit->id]) }}"
                                                                            data-toggle="tooltip"
                                                                            title="{{ __('Reserve Unit') }}"><i
                                                                                class="fa-regular fa-file-lines"></i></a>
                                                                    </div>
                                                                @endcan
                                                            @elseif ($unit->status == 'Reserved')
                                                                @if (Auth::user()->type == 'company')
                                                                    <form id="delete-form1-{{ $unit->id }}"
                                                                        action="{{ route('unit.release', [$unit->id]) }}"
                                                                        method="GET" style="display: none;"
                                                                        class="d-inline-flex">
                                                                        <a href="#"
                                                                            class="action-btn btn-primary mx-1  btn btn-sm d-inline-flex align-items-center bs-pass-para show_confirm"
                                                                            data-confirm="{{ __('Are You Sure?') }}"
                                                                            data-text="{{ __('This action can not be undone. Do you really want to release this unit?') }}"
                                                                            data-confirm-yes="delete-form1-{{ $unit->id }}"
                                                                            data-toggle="tooltip"
                                                                            title="{{ __('Release Unit') }}"><i
                                                                                class="ti ti-rocket"></i></a>
                                                                        @csrf
                                                                        @method('DELETE')

                                                                    </form>
                                                                @endif
                                                            @endif
                                                            @if (Auth::user()->type == 'company')
                                                                @can('unit edit')
                                                                    <div class="action-btn btn-primary ms-2">
                                                                        <a class="action-btn btn-info mx-1  btn btn-sm d-inline-flex align-items-center"
                                                                            data-ajax-popup="true" data-size="lg"
                                                                            data-title="{{ __('Edit Unit') }}"
                                                                            data-url="{{ route('project.unit.edit', [$project->slug, $unit->unit_no]) }}"
                                                                            data-toggle="tooltip"
                                                                            title="{{ __('Edit') }}"><i
                                                                                class="ti ti-pencil text-white"></i></a>
                                                                    </div>
                                                                @endcan

                                                                @if (Auth::user()->type == 'company' && $unit->trashed())
                                                                    <form
                                                                        action="{{ route('unit.restore', [$unit->id]) }}"
                                                                        method="POST" class="d-inline-flex">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <a href="#"
                                                                            class="action-btn btn-success mx-1  btn btn-sm d-inline-flex align-items-center bs-pass-para show_confirm"
                                                                            data-confirm="{{ __('Are You Sure?') }}"
                                                                            data-text="{{ __('Make Unit Visible to users?') }}"
                                                                            data-confirm-yes="delete-form1-{{ $unit->id }}"
                                                                            data-toggle="tooltip"
                                                                            title="{{ __('Show') }}"><i
                                                                                class="fa-regular fa-eye"></i></a>
                                                                    </form>
                                                                @else
                                                                    @can('unit delete')
                                                                        <form id="delete-form1-{{ $unit->id }}"
                                                                            action="{{ route('unit.destroy', [$unit->id]) }}"
                                                                            method="POST" style="display: none;"
                                                                            class="d-inline-flex">
                                                                            <a href="#"
                                                                                class="action-btn btn-danger mx-1  btn btn-sm d-inline-flex align-items-center bs-pass-para show_confirm"
                                                                                data-confirm="{{ __('Are You Sure?') }}"
                                                                                data-text="{{ __('This Unit will not be visible to users') }}"
                                                                                data-confirm-yes="delete-form1-{{ $unit->id }}"
                                                                                data-toggle="tooltip"
                                                                                title="{{ __('Hide') }}"><i
                                                                                    class="fa-regular fa-eye-slash"></i></a>
                                                                            @csrf
                                                                            @method('DELETE')

                                                                        </form>
                                                                    @endcan
                                                                @endif
                                                            @endif


                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- @if (module_is_active('Account', $project->created_by) && $project->type == 'project')
                    <div class="col-md-12">
                        <div class="card deta-card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="mb-0">{{ __('Activity') }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <div class="timeline timeline-one-side top-10-scroll" data-timeline-content="axis"
                                    data-timeline-axis-style="dashed" style="max-height: 300px;">
                                    @foreach ($project->activities as $activity)
                                        <div class="timeline-block px-2 pt-3">
                                            @if ($activity->log_type == 'Upload File')
                                                <span class="timeline-step timeline-step-sm border border-primary text-white">
                                                    <i class="fas fa-file text-dark"></i></span>
                                            @elseif($activity->log_type == 'Create Milestone')
                                                <span class="timeline-step timeline-step-sm border border-info text-white"> <i
                                                        class="fas fa-cubes text-dark"></i></span>
                                            @elseif($activity->log_type == 'Create Task')
                                                <span class="timeline-step timeline-step-sm border border-success text-white">
                                                    <i class="fas fa-tasks text-dark"></i></span>
                                            @elseif($activity->log_type == 'Create Bug')
                                                <span class="timeline-step timeline-step-sm border border-warning text-white">
                                                    <i class="fas fa-bug text-dark"></i></span>
                                            @elseif($activity->log_type == 'Move' || $activity->log_type == 'Move Bug')
                                                <span
                                                    class="timeline-step timeline-step-sm border round border-danger text-white">
                                                    <i class="fas fa-align-justify text-dark"></i></span>
                                            @elseif($activity->log_type == 'Create Invoice')
                                                <span class="timeline-step timeline-step-sm border border-bg-dark text-white">
                                                    <i class="fas fa-file-invoice text-dark"></i></span>
                                            @elseif($activity->log_type == 'Invite User')
                                                <span class="timeline-step timeline-step-sm border border-success"> <i
                                                        class="fas fa-plus text-dark"></i></span>
                                            @elseif($activity->log_type == 'Share with Client')
                                                <span class="timeline-step timeline-step-sm border border-info text-white"> <i
                                                        class="fas fa-share text-dark"></i></span>
                                            @elseif($activity->log_type == 'Create Timesheet')
                                                <span class="timeline-step timeline-step-sm border border-success text-white">
                                                    <i class="fas fa-clock-o text-dark"></i></span>
                                            @endif
                                            <div class=" row last_notification_text">
                                                <span class="col-1 m-0 h6 text-sm"> <span>{{ $activity->log_type }} </span> </span>
                                                <br>
                                                <span class="col text-start text-sm h6"> {!! $activity->getRemark() !!} </span>
                                                <div class="col-auto text-end notification_time_main">
                                                    <p class="text-muted">{{ $activity->created_at->diffForHumans() }}</p>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endif --}}

            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            var type = '{{ $project->type }}';
            if (type == 'template') {
                $('.pro_type').addClass('d-none');
            } else {
                $('.pro_type').removeClass('d-none');
            }
        });
    </script>
    <script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/letter.avatar.js') }}"></script>
    <script src="{{ Module::asset('Taskly:Resources/assets/js/dropzone.min.js') }}"></script>

    {{-- <script>
        Dropzone.autoDiscover = false;
        myDropzone = new Dropzone("#dropzonewidget", {
            maxFiles: 20,
            maxFilesize: 20,
            parallelUploads: 1,
            acceptedFiles: ".jpeg,.jpg,.png,.pdf,.doc,.txt",
            url: "{{ route('projects.file.upload', [$project->id]) }}",
            success: function(file, response) {
                if (response.is_success) {
                    dropzoneBtn(file, response);
                    toastrs('{{ __('Success') }}', 'File Successfully Uploaded', 'success');
                } else {
                    myDropzone.removeFile(response.error);
                    toastrs('Error', response.error, 'error');
                }
            },
            error: function(file, response) {
                myDropzone.removeFile(file);
                if (response.error) {
                    toastrs('Error', response.error, 'error');
                } else {
                    toastrs('Error', response, 'error');
                }
            }
        });
        myDropzone.on("sending", function(file, xhr, formData) {
            formData.append("_token", $('meta[name="csrf-token"]').attr('content'));
            formData.append("project_id", {{ $project->id }});
        });

        @if (isset($permisions) && in_array('show uploading', $permisions))
            $(".dz-hidden-input").prop("disabled", true);
            myDropzone.removeEventListeners();
        @endif

        function dropzoneBtn(file, response) {

            var html = document.createElement('div');
            var download = document.createElement('a');
            download.setAttribute('href', response.download);
            download.setAttribute('class', "action-btn btn-primary mx-1  btn btn-sm d-inline-flex align-items-center");
            download.setAttribute('data-toggle', "tooltip");
            download.setAttribute('download', file.name);
            download.setAttribute('title', "{{ __('Download') }}");
            download.innerHTML = "<i class='ti ti-download'> </i>";
            html.appendChild(download);

            @if (isset($permisions) && in_array('show uploading', $permisions))
            @else
                var del = document.createElement('a');
                del.setAttribute('href', response.delete);
                del.setAttribute('class', "action-btn btn-danger mx-1  btn btn-sm d-inline-flex align-items-center");
                del.setAttribute('data-toggle', "popover");
                del.setAttribute('title', "{{ __('Delete') }}");
                del.innerHTML = "<i class='ti ti-trash '></i>";

                del.addEventListener("click", function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    if (confirm("Are you sure ?")) {
                        var btn = $(this);
                        $.ajax({
                            url: btn.attr('href'),
                            type: 'DELETE',
                            success: function(response) {
                                if (response.is_success) {
                                    btn.closest('.dz-image-preview').remove();
                                    toastrs('{{ __('Success') }}', 'File Successfully Deleted',
                                        'success');
                                } else {
                                    toastrs('{{ __('Error') }}', 'Something Wents Wrong.', 'error');
                                }
                            },
                            error: function(response) {
                                response = response.responseJSON;
                                if (response.is_success) {
                                    toastrs('{{ __('Error') }}', 'Something Wents Wrong.', 'error');
                                } else {
                                    toastrs('{{ __('Error') }}', 'Something Wents Wrong.', 'error');
                                }
                            }
                        })
                    }
                });

                html.appendChild(del);
            @endif

            file.previewTemplate.appendChild(html);
        }

        @php($files = $project->files)
        @foreach ($files as $file)

            @php($storage_file = get_base_file($file->file_path))
            // Create the mock file:
            var mockFile = {
                name: "{{ $file->file_name }}",
                size: "{{ get_size(get_file($file->file_path)) }}"
            };
            // Call the default addedfile event handler
            myDropzone.emit("addedfile", mockFile);
            // And optionally show the thumbnail of the file:
            myDropzone.emit("thumbnail", mockFile, "{{ get_file($file->file_path) }}");
            myDropzone.emit("complete", mockFile);

            dropzoneBtn(mockFile, {
                download: "{{ get_file($file->file_path) }}",
                delete: "{{ route('projects.file.delete', [$project->id, $file->id]) }}"
            });
        @endforeach
    </script> --}}
    {{-- <script>
        (function() {
            var options = {
                chart: {
                    height: 135,
                    type: 'line',
                    toolbar: {
                        show: false,
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    width: 2,
                    curve: 'smooth'
                },
                series: [
                    @foreach ($chartData['stages'] as $id => $name)
                        {
                            name: "{{ __($name) }}",
                            // data:
                            data: {!! json_encode($chartData[$id]) !!},
                        },
                    @endforeach
                ],
                xaxis: {
                    categories: {!! json_encode($chartData['label']) !!},
                },
                colors: {!! json_encode($chartData['color']) !!},

                grid: {
                    strokeDashArray: 4,
                },
                legend: {
                    show: false,
                },

                yaxis: {
                    tickAmount: 5,
                    min: 1,
                    max: 40,
                },
            };
            var chart = new ApexCharts(document.querySelector("#task-chart"), options);
            chart.render();
        })();

        $('.cp_link').on('click', function() {
            var value = $(this).attr('data-link');
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(value).select();
            document.execCommand("copy");
            $temp.remove();
            toastrs('success', '{{ __('Link Copy on Clipboard') }}', 'success')
        });
    </script> --}}
@endpush
