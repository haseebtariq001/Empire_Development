@extends('layouts.main')
@php

    $plural_name = __(' Agents');
    $singular_name = __(' Agent');
@endphp
@section('page-title')
    {{ $plural_name }}
@endsection
@section('page-breadcrumb')
    {{ $plural_name }}
@endsection
@section('page-action')
    <div>
        @can('user logs history')
            <a href="{{ route('users.userlog.history') }}" class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="{{ __('User Logs History') }}"><i class="ti ti-user-check"></i>
            </a>
        @endcan
        @can('agent manage')
            <a href="{{ route('agent.list') }}" data-bs-toggle="tooltip" data-bs-original-title="{{ __('List View') }}"
                class="btn btn-sm btn-primary btn-icon ">
                <i class="ti ti-list"></i>
            </a>
        @endcan

        @can('agent create')
            <a href="#" class="btn btn-sm btn-primary" data-ajax-popup="true" data-size="md"
                data-title="{{ __('Create New ' . $singular_name) }}" data-url="{{ route('users.create') }}"
                data-bs-toggle="tooltip" data-bs-original-title="{{ __('Create') }}">
                <i class="ti ti-plus"></i>
            </a>
        @endcan

    </div>
@endsection
@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <div id="loading-bar-spinner" class="spinner">
            <div class="spinner-icon"></div>
        </div>
        @foreach ($agents as $agent)
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-header border-0 pb-0">

                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="true">
                                    <i class="feather icon-more-vertical"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                    @can('agent edit')
                                            <a data-url="{{ route('agents.show', [$agent->agent_id]) }}" class="dropdown-item" data-ajax-popup="true"
                                                data-original-title="{{ __('View') }}" data-title="{{ __('Agent Profile') }}">
                                                <i class="ti ti-eye"></i>
                                                <span>{{ __('Veiw') }}</span>
                                            </a>
                                            <a data-url="{{ route('agents.edit', $agent->agent_id) }}" class="dropdown-item"
                                                data-ajax-popup="true" data-title="{{ __('Update ' . $singular_name) }}"
                                                data-toggle="tooltip" data-original-title="{{ __('Edit') }}">
                                                <i class="ti ti-pencil"></i>
                                                <span>{{ __('Edit') }}</span>
                                            </a>
                                    @endcan
                                    @can('agent delete')
                                        {{ Form::open(['route' => ['agents.destroy', $agent->agent_id], 'class' => 'm-0']) }}
                                        @method('DELETE')
                                        <a href="#!" class="dropdown-item bs-pass-para show_confirm" aria-label="Delete"
                                            data-confirm="{{ __('Are You Sure?') }}"
                                            data-text="{{ __('This action can not be undone. Do you want to continue?') }}"
                                            data-confirm-yes="delete-form-{{ $agent->agent_id }}">
                                            <i class="ti ti-trash"></i>
                                            <span>{{ __('Delete') }}</span>
                                        </a>
                                        {{ Form::close() }}
                                    @endcan


                                    @can('user login manage')
                                        @if ($agent->user->is_enable_login == 1)
                                            <a href="{{ route('users.login', \Crypt::encrypt($agent->user->id)) }}"
                                                class="dropdown-item">
                                                <i class="ti ti-road-sign"></i>
                                                <span class="text-danger"> {{ __('Login Disable') }}</span>
                                            </a>
                                        @elseif ($agent->user->is_enable_login == 0 && $agent->user->password == null)
                                            <a href="#"
                                                data-url="{{ route('users.reset', \Crypt::encrypt($agent->user->id)) }}"
                                                data-ajax-popup="true" data-size="md" class="dropdown-item login_enable"
                                                data-title="{{ __('New Password') }}" class="dropdown-item">
                                                <i class="ti ti-road-sign"></i>
                                                <span class="text-success"> {{ __('Login Enable') }}</span>
                                            </a>
                                        @else
                                            <a href="{{ route('users.login', \Crypt::encrypt($agent->user->id)) }}"
                                                class="dropdown-item">
                                                <i class="ti ti-road-sign"></i>
                                                <span class="text-success"> {{ __('Login Enable') }}</span>
                                            </a>
                                        @endif
                                    @endcan
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-body  text-center">
                        <img src="{{ check_file($agent->user->avatar) ? get_file($agent->user->avatar) : get_file('uploads/users-avatar/avatar.png') }}"
                            alt="user-image" class="img-fluid rounded-circle" width="120px">
                        <h4 class="mt-2">{{ $agent->user->name }}</h4>
                        <small>{{ $agent->user->email }}</small>
                        @if (Auth::user()->type == 'super admin')
                            <div class="mt-4">
                                <div class="row justify-content-between align-items-center">

                                    <div class="col-6 text-center Id ">
                                        <a href="#" data-url="{{ route('company.info', $agent->agent_id) }}" data-size="lg"
                                            data-ajax-popup="true" class="btn btn-outline-primary"
                                            data-title="{{ __('Company Info') }}">{{ __('AdminHub') }}</a>
                                    </div>
                                    <div class="col-12">
                                        <hr class="my-3">
                                    </div>
                                    @php
                                        $plan_expire_date = !empty($agent->user->plan_expire_date) ? $agent->user->plan_expire_date : '';
                                        if ($plan_expire_date == '0000-00-00') {
                                            $plan_expire_date = date('d-m-Y');
                                        }
                                        if (empty($plan_expire_date)) {
                                            $plan_expire_date = !empty($agent->user->trial_expire_date) ? $agent->user->trial_expire_date : '--';
                                        }
                                    @endphp
                                   
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
        
        @auth('web')
                @can('agent create')
                    <div class="col-md-3 All">
                        <a class="btn-addnew-project " style="padding: 90px 10px;" data-ajax-popup="true"
                            data-title="{{ __('Create New ' . $singular_name) }}"  data-url="{{ route('users.create') }}">
                            <div class="bg-primary proj-add-icon">
                                <i class="ti ti-plus my-2"></i>
                            </div>
                            <h6 class="mt-4 mb-2">{{ __('New ' . $singular_name) }}</h6>
                            <p class="text-muted text-center">{{ __('Click here to Create New ' . $singular_name) }}</p>
                        </a>
                    </div>
                @endcan
        @endauth
    </div>
    <!-- [ Main Content ] end -->
@endsection
@push('scripts')
    {{-- Password  --}}
    <script>
        $(document).on('change', '#password_switch', function() {
            if ($(this).is(':checked')) {
                $('.ps_div').removeClass('d-none');
                $('#password').attr("required", true);

            } else {
                $('.ps_div').addClass('d-none');
                $('#password').val(null);
                $('#password').removeAttr("required");
            }
        });
        $(document).on('click', '.login_enable', function() {
            setTimeout(function() {
                $('.modal-body').append($('<input>', {
                    type: 'hidden',
                    val: 'true',
                    name: 'login_enable'
                }));
            }, 2000);
        });
    </script>
@endpush
