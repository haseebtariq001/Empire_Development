@extends('layouts.main')
@php

    $plural_name = __('Expression of Interest');
    $singular_name = __('Expression of Interest');

@endphp
@section('page-title')
    {{ $plural_name }}
@endsection
@section('page-breadcrumb')
    {{ $plural_name }}
@endsection
{{-- @section('page-action')
    <div>
        <a href="#" class="btn btn-sm btn-primary" data-ajax-popup="true" data-size="md"
            data-title="{{ __('Create New ' . $singular_name) }}" data-url="{{ route('users.create') }}"
            data-bs-toggle="tooltip" data-bs-original-title="{{ __('Create') }}">
            <i class="ti ti-plus"></i>
        </a>
    </div>
@endsection --}}
@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table mb-0 pc-dt-simple" id="users">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{ __('Unit No') }}</th>
                                    <th scope="col">{{ __('Project Name') }}</th>
                                    <th scope="col">{{ __('Payment Status') }}</th>
                                    <th scope="col">{{ __('Amount (AED') }} </th>
                                    <th scope="col">{{ __('Documnet Status') }}</th>
                                    <th scope="col">{{ __('EOI Date') }}</th>
                                    <th scope="col">{{ __('Picture') }}</th>
                                    <th scope="col">{{ __('Name') }}</th>
                                    <th scope="col">{{ __('Email') }}</th>
                                    <th scope="col">{{ __('Ageny Name') }}</th>
                                    <th width="10%"> {{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($eois as $eoi)
                                    <tr>
                                        <td>{{ $loop->iteration ?? 'Null' }}</td>
                                        <td>{{ $eoi->unit->unit_no }}</td>
                                        <td>{{ ucfirst($eoi->project->name) }}</td>
                                        <td>{{ $eoi->status }}</td>
                                        <td>{{ $eoi->payments->amount }}</td>
                                        <td>unsigned</td>


                                        <td>{{ format_date($eoi->created_at) }}</td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-dark btn-flex btn-center btn-sm"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ route('Eoi-payments.show', [$eoi->id]) }}"
                                                        class="menu-link px-3">View</a>
                                                </div>
                                                @if ($eoi->status == 'pending')
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('payment', [$eoi->id]) }}"
                                                            class="menu-link px-3">Pay Now</a>
                                                    </div>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>

                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
