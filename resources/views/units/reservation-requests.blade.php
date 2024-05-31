@extends('layouts.main')
@section('page-title')
   {{ __('Reservation Requests for Unit-'. $unit->unit_no) }}
@endsection
@section('page-breadcrumb')
   Reservation Requests
@endsection
@section('page-action')

    <div>
        @can('user logs history')
            <a href="{{ route('users.userlog.history') }}" class="btn btn-sm btn-primary"
                    data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('User Logs History') }}"><i class="ti ti-user-check"></i>
            </a>
        @endcan
        @can('user import')
            <a href="#" class="btn btn-sm btn-primary" data-ajax-popup="true" data-title="{{ __('Import') }}"
                data-url="{{ route('users.file.import') }}" data-toggle="tooltip" title="{{ __('Import') }}"><i
                    class="ti ti-file-import"></i>
            </a>
        @endcan
        @can('user manage')
            <a href="{{ route('users.list.view') }}" data-bs-toggle="tooltip" data-bs-original-title="{{ __('List View') }}"
                class="btn btn-sm btn-primary btn-icon ">
                <i class="ti ti-list"></i>
            </a>
        @endcan
        @can('user create')
            <a href="#" class="btn btn-sm btn-primary" data-ajax-popup="true" data-size="md"
                data-title="{{ __('Create New Reservation') }}" data-url="{{ route('users.create') }}" data-bs-toggle="tooltip"
                data-bs-original-title="{{ __('Create') }}">
                <i class="ti ti-plus"></i>
            </a>
        @endcan
    </div>
@endsection
@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <div id="loading-bar-spinner" class="spinner"><div class="spinner-icon"></div></div>
        <div class="col-12">
            <div class="card bg-primary">
                <div class="card-body">
                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                        <div class="d-block">
                            <h4 class="text-white"> Unit - {{ $unit->unit_no }}</h4>
                            <h5 class="text-white text-nowrap">
                                {{ $unit->project->name }}
                            </h5>
                        </div>
                        <div class="d-flex  align-items-center">
                            {{-- <div class="px-3">
                                <span class="text-white text-sm">{{ __('Project') }}:</span>
                                <h5 class="text-white text-nowrap">
                                    {{ $unit->project->name }}
                                </h5>
                            </div> --}}
                            {{-- <div class="px-3">
                                <span class="text-white text-sm">{{ __('Launch Date') }}:</span>
                                <h5 class="text-white text-nowrap">
                                    {{ $unit->project->launch_date }}
                                </h5>
                            </div> --}}
                            {{-- <div class="px-3">
                                <span class="text-white text-sm">{{ __('Total Units') }}:</span>
                                <h5 class="text-white text-nowrap">
                                    {{ $unit->project->total_units }}
                                </h5>
                            </div> --}}
                        </div>
    
                        @if (!Auth::user()->can('project edit'))
                            <button class="btn btn-light d">
                                <a href="#" class="" title="{{ __('Locked') }}">
                                    <i class="ti ti-lock"> </i></a>
                            </button>
                        @else
                            <div class="d-flex align-items-center ">
                                @can('project edit')
                                    <div class="btn btn-light d-flex align-items-between me-3">
                                        <a href="#" class="" data-size="lg"
                                            data-url="{{ route('project.unit.edit', [$unit->project->slug, $unit->unit_no]) }}"
                                            data-="" data-ajax-popup="true"
                                            data-title="{{ __('Edit ') }}" data-toggle="tooltip"
                                            title="{{ __('Edit') }}">
                                            <i class="ti ti-pencil"> </i>
                                        </a>
                                    </div>
                                @endcan
                                @can('project delete')
                                    {!! Form::open([
                                        'method' => 'DELETE',
                                        'route' => ['projects.destroy', $unit->project->id],
                                        'id' => 'delete-form-' . $unit->project->id,
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
       
        </div>
        @foreach ($reservations as $reservation)
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <div class="d-flex align-items-center">
                            <span class="badge bg-primary p-2 px-3 rounded text-black">By: {{ ucwords($reservation->client->creator->type) }}</span>
                        </div>
                        <div class="card-header-right">
                            @can('user manage')
                                <div class="btn-group card-option">
                                    @if($reservation->client->is_disable == 1 || Auth::user()->type == "super admin")
                                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="true">
                                            <i class="feather icon-more-vertical"></i>
                                        </button>
                                    @else
                                        <div class="btn">
                                            <i class="ti ti-lock"></i>
                                        </div>
                                    @endif
                                    <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                        @can('user edit')
                                            <a data-url="{{ route('users.edit', $reservation->client->id) }}" class="dropdown-item"
                                                data-ajax-popup="true" data-title="{{ __('Update') }}"
                                                data-toggle="tooltip" data-original-title="{{ __('Edit') }}">
                                                <i class="ti ti-pencil"></i>
                                                <span>{{ __('Edit') }}</span>
                                            </a>
                                            <a data-url="{{ route('client.cheque.show', $reservation->id) }}" class="dropdown-item"
                                                data-ajax-popup="true" data-title="{{ __('Preview Cheque') }}"
                                                data-toggle="tooltip" data-original-title="{{ __('View Cheque') }}">
                                                <i class="ti ti-eye"></i>
                                                <span>{{ __('View Cheque') }}</span>
                                            </a>
                                         
                                            {{-- <a data-url="{{ route('client.cheque.amount', $reservation->id) }}" class="dropdown-item"
                                                data-ajax-popup="true" data-title="{{ __('Recieved Amount') }}"
                                                data-toggle="tooltip" data-original-title="{{ __('Authorize Purchase') }}">
                                                <i class="ti ti-eye"></i>
                                                <span>{{ __('Authorize Purchase') }}</span>
                                            </a> --}}
                                           
                                        @endcan
                                        @can('user delete')
                                            {{ Form::open(['route' => ['users.destroy', $reservation->client->id], 'class' => 'm-0']) }}
                                            @method('DELETE')
                                            <a href="#!" class="dropdown-item bs-pass-para show_confirm" aria-label="Delete"
                                                data-confirm="{{ __('Are You Sure?') }}"
                                                data-text="{{ __('This action can not be undone. Do you want to continue?') }}"
                                                data-confirm-yes="delete-form-{{ $reservation->client->id }}">
                                                <i class="ti ti-trash"></i>
                                                <span>{{ __('Delete') }}</span>
                                            </a>
                                            {{ Form::close() }}
                                        @endcan
                                        
                                      
                                    </div>
                                </div>
                            @endcan
                        </div>
                    </div>
                    <div class="card-body  text-center">
                        <img src="{{ check_file($reservation->client->avatar) ? get_file($reservation->client->avatar) : get_file('uploads/users-avatar/avatar.png') }}"
                            alt="user-image" class="img-fluid rounded-circle" width="120px">
                        <h4 class="mt-2">{{ $reservation->client->name }}</h4>
                        <small>{{ $reservation->client->email }}</small>
                        <br>
                        <small>By: {{ $reservation->client->creator->name }}</small>
                        @if( Auth::user()->type == "super admin")
                            <div class="mt-4">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-6 text-center">
                                        <span class="d-block font-bold mb-0">{{!empty($reservation->client->plan) ? (!empty($reservation->client->plan->name) ? $reservation->client->plan->name :'Basice Plan'):'Plan Not Activated'}}</span>
                                    </div>
                                    <div class="col-6 text-center Id ">
                                        <a href="#" data-url="{{route('company.info', $reservation->client->id)}}" data-size="lg" data-ajax-popup="true" class="btn btn-outline-primary" data-title="{{__('Company Info')}}">{{__('AdminHub')}}</a>
                                    </div>
                                    <div class="col-12">
                                        <hr class="my-3">
                                    </div>
                                    @php
                                        $plan_expire_date = !empty($reservation->client->plan_expire_date) ? $reservation->client->plan_expire_date :'';
                                        if($plan_expire_date == '0000-00-00'){
                                            $plan_expire_date = date('d-m-Y');
                                        }
                                        if(empty($plan_expire_date)){
                                            $plan_expire_date =  !empty($reservation->client->trial_expire_date) ? $reservation->client->trial_expire_date : '--';
                                        }
                                    @endphp
                                    <div class="col-12 text-center pb-2">
                                        <span class="text-dark text-xs">{{__('Plan Expired :' )}}
                                            @if(!empty($reservation->client->plan))
                                                {{company_date_formate($plan_expire_date)}}
                                            @else
                                                --
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
        @auth('web')
            @can('user create')
                <div class="col-md-3 All">
                    <a href="#" class="btn-addnew-project " style="padding: 90px 10px;" data-ajax-popup="true" data-size="md"
                        data-title="{{ __('Create New Reservation') }}" data-url="{{ route('users.create') }}">
                        <div class="bg-primary proj-add-icon">
                            <i class="ti ti-plus my-2"></i>
                        </div>
                        <h6 class="mt-4 mb-2">{{ __('New Reservation') }}</h6>
                        <p class="text-muted text-center">{{ __('Click here to Create New Reservaion') }}</p>
                    </a>
                </div>
            @endcan
        @endauth
    </div>
    <!-- [ Main Content ] end -->
@endsection