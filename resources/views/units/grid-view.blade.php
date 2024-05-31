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
    <div class="float-end d-flex">
        <p class="text-muted d-sm-flex align-items-center mb-0 me-3">
            <a href="{{ route('empire-projects.show', [$project->id]) }}" data-bs-toggle="tooltip"
                data-bs-original-title="{{ __('List View') }}" class="btn btn-sm btn-primary btn-icon ">
                <i class="ti ti-list"></i>
            </a>
        </p>
        @can('project create')
            @if (Auth::user()->type == 'company')
                <p class="text-muted d-sm-flex align-items-center mb-0 me-3">
                    <a class="btn btn-sm btn-primary" data-size="lg" data-ajax-popup="true" data-title="{{ __('Create Unit') }}"
                        data-url="{{ route('project.unit.create', [$project->slug]) }}" data-toggle="tooltip"
                        title="{{ __('Create Unit') }}"><i class="ti ti-plus"></i></a>
                </p>
                <p class="text-muted d-sm-flex align-items-center mb-0 me-3">
                    <a href="#" class="btn btn-sm btn-primary btn-icon" data-ajax-popup="true"
                        data-title="{{ __('Unit Import') }}" data-url="{{ route('unit.import', [$project->id]) }}"
                        data-toggle="tooltip" title="{{ __('Import') }}"><i class="ti ti-file-import"></i>
                    </a>
                </p>
            @endif
        @endcan

        <p class="text-muted d-sm-flex align-items-center mb-0">
            <a href="#" class="btn btn-sm btn-primary btn-icon" data-ajax-popup="true"
                data-title="{{ __('Unit Export') }}" data-url="{{ route('unit.export', [$project->id]) }}"
                data-toggle="tooltip" title="{{ __('Export') }}"><i class="ti ti-file-export"></i>
            </a>
        </p>
    </div>
@endsection

@section('content')
    <section class="section">
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
                                                <span class="h6 font-weight-bold mb-0 ">{{ $project->total_floor }}</span>
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
                                                <span class="h6 font-weight-bold mb-0 ">{{ $project->booking_percentage }}
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
            <div class="col-12">
                <div class="row ">
                    <div class="col-xl-12 col-lg-12 col-md-12 d-flex align-items-center justify-content-end">
                        <div class="text-sm-right status-filter">
                            <div class="btn-group mb-3">
                                <button type="button" class="btn btn-light  text-white btn_tab  bg-black-light active"
                                    data-filter="*" data-status="All">{{ __('All') }}</button>
                                @foreach ($unique_floors as $floor)
                                    <button type="button" class="btn btn-light bg-black-light text-white btn_tab"
                                        data-filter=".{{ $floor }}">{{ 'Floor#' . $floor }}</button>
                                @endforeach
                            </div>
                        </div>
                    </div><!-- end col-->
                </div>


                <div class="filters-content">
                    <div class="row  d-flex grid">
                        @isset($units)
                            @foreach ($units as $unit)
                                <div class="col-md-6 col-xl-3 All  {{ $unit->floor_number }}">
                                    <div class="card">
                                        <div class="card-header border-0 pb-0">
                                            <div class="d-flex align-items-center">
                                                <a href="@can('unit manage') {{ route('units.show', [$unit->id]) }} @endcan"
                                                    class="">
                                                    <img alt="{{ $unit->status }}" class="img-fluid wid-30 me-2 fix_img"
                                                        avatar="{{ $unit->status }}">
                                                </a>

                                                {{-- <h5 class="mb-0">
                                        @if ($project->is_active)
                                            <a href="@can('project manage') {{ route('projects.show', [$project->id]) }} @endcan"
                                                title="{{ $project->name }}" class="">{{ $project->name }}<i class="px-2 ti ti-eye"></i></a>
                                        @else
                                            <a href="#" title="{{ __('Locked') }}"
                                                class="">{{ $project->name }}</a>
                                        @endif
                                    </h5> --}}
                                            </div>
                                            @if ($unit->status != 'Sold')
                                                <div class="card-header-right">
                                                    <div class="btn-group card-option">

                                                        <button type="button" class="btn dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="feather icon-more-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end pointer">
                                                            @if ($unit->status == 'Available')
                                                                @can('salesoffer create')
                                                                    <a class="dropdown-item" data-ajax-popup="true"
                                                                        data-size="lg"
                                                                        data-title="{{ __('Generate Sales Offer') }}"
                                                                        data-url="{{ route('unit.sales.offer', [$project->slug, $unit->id]) }}">
                                                                        <i class="ti ti-pencil"></i>
                                                                        <span>{{ __('Sales Offer') }}</span>
                                                                    </a>
                                                                @endcan
                                                                @can('unit make reservation')
                                                                    <a class="dropdown-item" data-ajax-popup="true"
                                                                        data-size="lg" data-title="{{ __('Reserve Unit') }}"
                                                                        data-url="{{ route('unit.reserve', [$unit->id]) }}">
                                                                        <i class="fa-regular fa-file-lines"></i>
                                                                        <span>{{ __('Reserve') }}</span>
                                                                    </a>
                                                                @endcan
                                                            @elseif ($unit->status == 'Reserved')
                                                                @can('unit release')
                                                                    <form id="delete-form1-{{ $unit->id }}"
                                                                        action="{{ route('unit.release', [$unit->id]) }}"
                                                                        method="GET">
                                                                        <a href="#"
                                                                            class="dropdown-item  delete-popup bs-pass-para show_confirm"
                                                                            data-confirm="{{ __('Are You Sure?') }}"
                                                                            data-text="{{ __('This action can not be undone. Do you really want to release this unit?') }}"
                                                                            data-confirm-yes="delete-form-{{ $project->id }}">
                                                                            <i class="ti ti-rocket"></i>
                                                                            <span>{{ __('Release') }}</span>
                                                                        </a>

                                                                        @csrf
                                                                        @method('DELETE')

                                                                    </form>
                                                                @endcan
                                                            @endif

                                                            {{-- @if (Auth::user()->type == 'company') --}}
                                                            @can('unit edit')
                                                                <a class="dropdown-item" data-ajax-popup="true" data-size="lg"
                                                                    data-title="{{ __('Edit Unit') }}"
                                                                    data-url="{{ route('project.unit.edit', [$project->slug, $unit->unit_no]) }}">
                                                                    <i class="ti ti-pencil"></i> <span>{{ __('Edit') }}</span>
                                                                </a>
                                                            @endcan
                                                            @can('unit delete')
                                                                <form id="delete-form-{{ $project->id }}"
                                                                    action="{{ route('unit.destroy', [$unit->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <a href="#"
                                                                        class="dropdown-item text-danger delete-popup bs-pass-para show_confirm"
                                                                        data-confirm="{{ __('Are You Sure?') }}"
                                                                        data-text="{{ __('This action can not be undone. Do you want to continue?') }}"
                                                                        data-confirm-yes="delete-form-{{ $project->id }}">
                                                                        <i class="ti ti-trash"></i>
                                                                        <span>{{ __('Delete') }}</span>
                                                                    </a>
                                                                    @method('DELETE')
                                                                </form>
                                                            @endcan
                                                            {{-- @else
                                                            <a href="#" class="dropdown-item"
                                                                title="{{ __('Locked') }}">
                                                                <i data-feather="lock"></i> <span>{{ __('Locked') }}</span>
                                                            </a>
                                                        @endif --}}

                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="card-body">
                                            <div class="row g-2 justify-content-between">

                                                <div class="col-auto">
                                                    <p class="mb-0"><b>{{ __('View:') }}</b> {{ $unit->apartment_view }}
                                                    </p>

                                                </div>
                                            </div>
                                            <p class="text-muted text-sm mt-3">{{ $unit->description }}</p>
                                            <h6 class="text-muted">Price: {{ $unit->selling_price }}</h6>
                                            {{-- <div class="user-group mx-2">
                                    @foreach ($project->users as $user)
                                        @if ($user->pivot->is_active)
                                            <img alt="image" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="{{ $user->name }}"
                                                @if ($user->avatar) src="{{ get_file($user->avatar) }}" @else src="{{ get_file('avatar.png') }}" @endif
                                                class="rounded-circle " width="25" height="25">
                                        @endif
                                    @endforeach
                                </div> --}}
                                            <div class="card mb-0 mt-3">
                                                <div class="card-body p-3">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h6 class="mb-0">{{ $unit->floor_number }}</h6>
                                                            <p class="text-muted text-sm mb-0">{{ __('Floor') }}</p>
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            <h6 class="mb-0">{{ $unit->unit_no }}</h6>
                                                            <p class="text-muted text-sm mb-0">{{ __('Unit#') }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endisset


                      

                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection



@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
        integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/letter.avatar.js') }}"></script>

    <script>
        $(document).ready(function() {

            $('.status-filter button').click(function() {
                $('.status-filter button').removeClass('active');
                $(this).addClass('active');

                var data = $(this).attr('data-filter');
                $grid.isotope({
                    filter: data
                })
            });

            var $grid = $(".grid").isotope({
                itemSelector: ".All",
                percentPosition: true,
                masonry: {
                    columnWidth: ".All"
                }
            })
        });
    </script>
@endpush
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/fileinput.min.js"></script>


<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('#file_input').fileinput({
                allowedFileExtensions: ['xlsx'],
            });
        }, 100);
    });
</script>
