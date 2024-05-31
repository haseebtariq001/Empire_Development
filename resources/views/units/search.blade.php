@extends('layouts.main')
@section('page-title')
    {{ __('Search Property') }}
@endsection
@section('page-breadcrumb')
    {{ __('Search Property') }}
@endsection
<link href="https://cdn.jsdelivr.net/npm/nouislider/distribute/nouislider.min.css" rel="stylesheet">
<style>
    .noUi-connect {
        background: linear-gradient(45deg, rgba(255, 227, 141, 1) 16%, rgba(186, 136, 89, 1) 72%) !important;
    }
</style>
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class=" multi-collapse mt-2" id="multiCollapseExample1">
                <div class="card">
                    <div class="card-body">
                        {{ Form::open(['route' => ['unit.search'], 'method' => 'GET', 'id' => 'product_service']) }}
                        <div class="row">

                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="btn-box">
                                    {{ Form::label('unit_project_id', __('Projects'), ['class' => 'text-type form-label']) }}
                                    {{ Form::select('unit_project_id', $projects, request()->input('unit_project_id'), ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Select Project']) }}
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="btn-box">
                                    {{ Form::label('status', __('Property Status'), ['class' => 'text-type form-label']) }}
                                    {{ Form::select('status', $all_units->pluck('status', 'status'), request()->input('status'), ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Select Status']) }}

                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="btn-box">
                                    {{ Form::label('unit_type', __('Property Type'), ['class' => 'text-type form-label']) }}
                                    {{ Form::select('unit_type', $all_units->unique('unit_type')->pluck('unit_type', 'unit_type'), request()->input('unit_type'), ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Select Property Type']) }}
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-4">
                                <div class="btn-box">
                                    {{ Form::label('area', __('Area Range (sqft)'), ['class' => 'text-type form-label']) }}
                                    <div id="area-slider" style="margin-top: 6px; ">
                                    </div>
                                    <div id="area-display"></div>
                                    {{ Form::hidden('area', null, ['id' => 'area-value']) }}
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-4">
                                <div class="btn-box">
                                    {{ Form::label('selling_price', __('Price Range (AED)'), ['class' => 'text-type form-label']) }}
                                    <div id="price-slider"
                                        style="
                                    margin-top: 6px;
                                ">
                                    </div>
                                    <div id="price-display"></div>
                                    {{ Form::hidden('selling_price', null, ['id' => 'price-value']) }}

                                    {{-- {{ Form::select('selling_price', generatePriceRanges($sellingPrices), request()->input('selling_price'), ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Select Price Range']) }} --}}
                                </div>

                            </div>

                            <div class="col-12d-flex justify-content-end align-items-center">
                                <a class="btn btn-primary me-4 text-white"
                                    onclick="document.getElementById('product_service').submit(); return false;"
                                    data-bs-toggle="tooltip" title="{{ __('apply') }}">
                                    <span class="btn-inner--icon"><i class="ti ti-search"></i> Search</span>
                                </a>
                                <a href="{{ route('unit.search') }}" class="btn btn-danger me-4" data-bs-toggle="tooltip"
                                    title="{{ __('Reset') }}">
                                    <span class="btn-inner--icon"><i class="fa fa-refresh text-white-off"></i> Reset</span>
                                </a>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body table-border-style">
                    <h5></h5>
                    <div class="table-responsive">
                        <table class="table mb-0 pc-dt-simple" id="products">
                            <thead>
                                <tr>
                                    <th>{{ __('Project Name') }}</th>
                                    <th>{{ __('Unit No') }}</th>
                                    <th>{{ __('Unit Type') }}</th>
                                    <th>{{ __('Floor Number') }}</th>
                                    <th>{{ __('Size') }}</th>
                                    <th>{{ __('Unit View') }}</th>
                                    <th>{{ __('Selling Price') }}</th>
                                    <th>{{ __('Status') }}</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($units as $unit)
                                    <tr>
                                        <td>{{ $unit->project->name }}</td>
                                        <td>{{ $unit->unit_no }}</td>
                                        <td>{{ $unit->unit_type }}</td>
                                        <td>{{ $unit->floor_number }}</td>
                                        <td>{{ $unit->area }}</td>
                                        <td>{{ $unit->apartment_view }}</td>
                                        <td>{{ $unit->selling_price }}</td>
                                        <td>{{ $unit->status }}</td>
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

<script src="https://cdn.jsdelivr.net/npm/nouislider/distribute/nouislider.min.js"></script>
@push('scripts')
    {{-- <script>
    function createSlider(elementId, inputId, displayId, data, unit) {
        var maxValue = Math.max(...data);

        var slider = document.getElementById(elementId);
        var input = document.getElementById(inputId);
        var display = document.getElementById(displayId);

        noUiSlider.create(slider, {
            start: [0, maxValue],
            connect: true,
            range: {
                'min': 0,
                'max': maxValue
            },
            step: 1,
            format: {
                to: function(value) {
                    return value.toFixed(2);
                },
                from: function(value) {
                    return value.replace();
                }
            }
        });

        slider.noUiSlider.on('update', function(values) {
            input.value = values.join(',');
            display.innerHTML = values[0] + ' - ' + values[1];
        });
    }

    $(document).ready(function() {
        createSlider('price-slider', 'price-value', 'price-display', {!! json_encode($all_units->pluck('selling_price')->toArray()) !!}, 'AED');
        createSlider('area-slider', 'area-value', 'area-display', {!! json_encode($all_units->pluck('area')->toArray()) !!}, 'sq.ft');
    });
</script> --}}
    <script>
        $(document).ready(function() {
            var selectedPrice =
            "{{ $request->selling_price ?? '' }}"; // Retrieve selected price range from the request
            var selectedArea = "{{ $request->area ?? '' }}"; // Retrieve selected area range from the request

            var priceValues = {!! json_encode($all_units->pluck('selling_price')->toArray()) !!};
            var areaValues = {!! json_encode($all_units->pluck('area')->toArray()) !!};

            createSlider('price-slider', 'price-value', 'price-display', priceValues, 'AED', selectedPrice);
            createSlider('area-slider', 'area-value', 'area-display', areaValues, 'sq.ft', selectedArea);
        });

        function createSlider(elementId, inputId, displayId, data, unit, selectedRange) {
            var maxValue = Math.max(...data);

            var slider = document.getElementById(elementId);
            var input = document.getElementById(inputId);
            var display = document.getElementById(displayId);

            noUiSlider.create(slider, {
                start: [0, maxValue],
                connect: true,
                range: {
                    'min': 0,
                    'max': maxValue
                },
                step: 1,
                format: {
                    to: function(value) {
                        return value.toFixed(2);
                    },
                    from: function(value) {
                        return value.replace();
                    }
                }
            });

            slider.noUiSlider.on('update', function(values) {
                input.value = values.join(',');
                display.innerHTML = values[0] + ' - ' + values[1];
            });

            // Set selected range if available
            if (selectedRange) {
                var rangeValues = selectedRange.split(',');
                slider.noUiSlider.set(rangeValues);
            }
        }
    </script>
@endpush
