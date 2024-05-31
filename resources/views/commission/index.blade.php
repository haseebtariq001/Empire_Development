@extends('layouts.main')
@section('page-title')
    {{ __('Commission Earned') }}
@endsection
@section('page-breadcrumb')
    {{ __('Commission Earned') }}
@endsection
@push('css')
@endpush
@section('page-action')
    <div>
        @stack('addButtonHook')

        @can('invoice manage')
            <a href="{{ route('invoice.grid.view') }}" data-bs-toggle="tooltip" data-bs-original-title="{{ __('Grid View') }}"
                class="btn btn-sm btn-primary btn-icon">
                <i class="ti ti-layout-grid"></i>
            </a>
        @endcan

        @can('invoice create')
            <a href="#" class="btn btn-sm btn-primary" data-ajax-popup="true" data-size="md"
                data-title="{{ __('Create New Offer') }}" data-url="{{ route('salesOffer.create') }}" data-bs-toggle="tooltip"
                data-bs-original-title="{{ __('Create') }}">
                <i class="ti ti-plus"></i>
            </a>
        @endcan
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table mb-0 pc-dt-simple" id="assets">
                            <thead>
                                <tr>
                                    <th> {{ __('Client Name') }}</th>
                                    <th> {{ __('Unit Number') }}</th>
                                    <th>{{ __('Sold Price') }}</th>
                                    <th style="width: 10%">{{ __('Commission Amount (AED)') }}</th>
                                    <th>{{ __('Commission Perc (%)') }}</th>
                                    <th>{{ __('Total Commission (AED)') }}</th>
                                    <th>{{ __('Sold On') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($commissions as $commission)
                                    <tr>
                                       
                                        <td>{{ $commission->user->name }}</td>
                                        <td>{{ $commission->clientUnit->unit->unit_no }}</td>
                                        <td>{{ $commission->clientUnit->unit->selling_price }}</td>
                                        <td>{{ $commission->amount }}</td>
                                        <td>{{ $commission->commission_percent }} %</td>
                                        <td>{{ $commission->amount }}</td>
                                        <td>{{ company_date_formate($commission->sold_on) }}</td>



                                        <td>
                                            @if ($commission->status == 'In progress')
                                                <label
                                                    class="badge bg-warning p-2 px-3 rounded">{{ __('In progress') }}</label>
                                            @elseif ($commission->status == 'Offer Sent')
                                                <label
                                                    class="badge bg-secondary p-2 px-3 rounded">{{ __('Offer Sent') }}</label>
                                            @elseif ($commission->status == 'Closed Won')
                                                <label
                                                    class="badge bg-success p-2 px-3 rounded">{{ __('Closed Won') }}</label>
                                            @else
                                                <label
                                                    class="badge bg-danger p-2 px-3 rounded">{{ $commission->status }}</label>
                                            @endif
                                        </td>

                                            <td class="Action">
                                                <span>
                                                        <div class="action-btn bg-warning ms-2">
                                                            {{-- <a href="{{ get_file('uploads/sales-offer/' . $sales_offer->offer->file) }}" --}}
                                                            <a href=""
                                                                target="blank" class="mx-3 btn btn-sm align-items-center"
                                                                data-bs-toggle="tooltip" title="{{ __('View') }}">
                                                                <i class="ti ti-eye  text-white"></i>
                                                            </a>
                                                        </div>                                           
                                                </span>
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
@endsection
@push('scripts')
    <script>
        $(document).on("click", ".cp_link", function() {
            var value = $(this).attr('data-link');
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(value).select();
            document.execCommand("copy");
            $temp.remove();
            toastrs('success', '{{ __('Link Copy on Clipboard') }}', 'success')
        });
    </script>
@endpush
