@extends('layouts.main')
@section('page-title', 'Reserved Units')
@section('page-breadcrumb', 'Reserved Units')

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
                                @foreach ($reserved_units as $key => $unit)
                                    <tr>
                                        <td>

                                            @if ($unit->status == 'Reserved')
                                                <label class="badge bg-danger p-2 px-3 rounded">{{ __('Reserved') }}</label>
                                            @elseif ($unit->status == 'Sold')
                                                <label class="badge bg-success p-2 px-3 rounded">{{ __('Sold') }}</label>
                                            @else
                                                <label
                                                    class="badge bg-secondary p-2 px-3 rounded">{{ __('Available') }}</label>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="#" class="d-block font-weight-500 mb-0"
                                                @can('project edit') data-ajax-popup="true" data-title="{{ __('Unit Details') }}"  data-url="" @endcan>
                                                <h5 class="m-0"> {{ $unit->unit_no }} </h5>
                                            </a>
                                        </td>
                                        <td> {{ $unit->unit_type }} </td>
                                        <td> {{ $unit->apartment_view }} </td>
                                        <td> {{ $unit->floor_number }} </td>
                                        <td> {{ $unit->area }} </td>
                                        <td> {{ $unit->selling_price }} </td>

                                        <td class="col-auto">
                                           
                                            <form id="delete-form1-{{ $unit->id }}"
                                                action="{{ route('unit.release', [$unit->id]) }}" method="GET"
                                                style="display: none;" class="d-inline-flex">
                                                <a href="#"
                                                    class="action-btn btn-primary mx-1  btn btn-sm d-inline-flex align-items-center bs-pass-para show_confirm"
                                                    data-confirm="{{ __('Are You Sure?') }}"
                                                    data-text="{{ __('This action can not be undone. Do you really want to release this unit?') }}"
                                                    data-confirm-yes="delete-form1-{{ $unit->id }}"
                                                    data-toggle="tooltip" title="{{ __('Release Unit') }}"><i
                                                        class="ti ti-rocket"></i></a>
                                                @csrf
                                                @method('DELETE')

                                            </form>
                                            {{-- @can('view reservation') --}}
                                            <div class="action-btn btn-primary ms-2">
                                                <a class="action-btn btn-dark mx-1  btn btn-sm d-inline-flex align-items-center"
                                                   
                                                    data-title="{{ __('View Reservation') }}"
                                                    href="{{ route('unit.reservation.show', [$unit->id]) }}"
                                                    data-toggle="tooltip" title="{{ __('View Reservation') }}"><i
                                                        class="ti ti-eye text-white"></i></a>
                                            </div>
                                            {{-- @endcan --}}
                                            @can('project edit')
                                                <div class="action-btn btn-primary ms-2">
                                                    <a class="action-btn btn-info mx-1  btn btn-sm d-inline-flex align-items-center"
                                                        data-ajax-popup="true" data-size="lg"
                                                        data-title="{{ __('Edit Unit') }}"
                                                        data-url="{{ route('project.unit.edit', [$unit->project->slug, $unit->unit_no]) }}"
                                                        data-toggle="tooltip" title="{{ __('Edit') }}"><i
                                                            class="ti ti-pencil text-white"></i></a>
                                                </div>

                                                <form id="delete-form1-{{ $unit->id }}"
                                                    action="{{ route('unit.destroy', [$unit->id]) }}" method="POST"
                                                    style="display: none;" class="d-inline-flex">
                                                    <a href="#"
                                                        class="action-btn btn-danger mx-1  btn btn-sm d-inline-flex align-items-center bs-pass-para show_confirm"
                                                        data-confirm="{{ __('Are You Sure?') }}"
                                                        data-text="{{ __('This action can not be undone. Do you want to continue?') }}"
                                                        data-confirm-yes="delete-form1-{{ $unit->id }}"
                                                        data-toggle="tooltip" title="{{ __('Delete') }}"><i
                                                            class="ti ti-trash"></i></a>
                                                    @csrf
                                                    @method('DELETE')

                                                </form>
                                            @endcan

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
            }, 1000);
        });
    </script>
@endpush
