@extends('frontend.layouts.app')
@push('styles')
    <style>
        .custom-wrapper {
            padding: 158px 0 40px;
            max-width: 1170px;
            width: 100%;
            display: flex;
            align-items: center;
            flex: 1;
            margin: 0 auto;
        }

        .eoi-card {
            background: #20272C;
            box-shadow: 20px 30px 30px rgba(0, 0, 0, 0.2);
            border-radius: 20px;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.575rem 1rem;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1.5;
            color: #808191;
            background-color: #22242c;
            background-clip: padding-box;
            border: 2px solid #3E3F4A;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 6px;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/front_assets/css/project-details.css') }}">

@endpush
@section('content')
    <main class="custom-wrapper">
        <div class="custom-row">
            @if(session()->has('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
         @endif
            <div class="card mb-xl-10 py-5 eoi-card context-dark ">
                @php
                    $route_url = isset($route) ? route('Eoi-payments.store') : route('Eoi-payments.update', [$eoi->id]);
                @endphp
                <form action="{{ $route_url }}" method="POST">
                    @csrf
                    @if (!isset($route))
                        @method('PUT')
                    @endif
                    <div class="card-header align-items-center d-flex justify-content-between">
                        <h3 class="fw-bold text-white">Expression Of Interest "EOI"</h3>
                        @if (!isset($route))
                            <div class="mb-7 mx-4 text-end">
                                <div><span class="fw-bold">Project:</span> {{ $eoi->project->name }}</div>
                                <div><span class="fw-bold">Unit No:</span> {{ $eoi->unit->unit_no }}</div>
                            </div>
                        @endif
                    </div>
                    <div class="card-body py-10 px-5">
                        <div class="scroll-y me-n7 pe-7">

                            <div class="row mb-7 mx-4">
                                <div class="col-lg-6 col-sm-12">
                                    <label class="text-white mb-2">First Name</label>
                                    <input type="text" class="form-control mb-2" placeholder="First Name" name="fname"
                                        value="{{ old('fname') }}" />

                                    @error('fname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label class="text-white mb-2">Last Name</label>
                                    <input type="text" class="form-control mb-2" placeholder="Last Name" name="lname"
                                        value="{{ old('lname') }}" />

                                    @error('lname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label class="text-white mb-2">Phone</label>
                                    <input type="number" class="form-control mb-2" placeholder="Phone" name="phone"
                                        value="{{ old('phone') }}" />

                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label class="text-white mb-2">Email</label>
                                    <input type="email" class="form-control mb-2" placeholder="Email" name="email"
                                        value="{{ old('email') }}" />

                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Country -->
                                <div class="col-lg-6 col-sm-12">

                                    <div class="form-group">
                                        <label>{{ __('Country') }} </label>
                                        <select name="country" class="required-input countries form-control mb-3"
                                            id="countryId">
                                            <option value="">Select Country</option>
                                        </select>

                                    </div>
                                </div>

                                <!-- state -->
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label>{{ __('State') }} <span class="text-primary">*</span></label>
                                        <select name="state"
                                            class="states required-input form-control mb-3  {{ $errors->has('city') ? ' is-invalid' : '' }}"
                                            id="stateId">
                                            <option value="">Select State</option>
                                        </select>

                                        @if ($errors->has('state'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('state') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <!-- City -->
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label>{{ __('City') }} <span class="text-primary">*</span></label>
                                        <select name="city"
                                            class="cities  form-control mb-3  {{ $errors->has('city') ? ' is-invalid' : '' }}"
                                            id="cityId">
                                            <option value="">Select City</option>
                                        </select>

                                        @if ($errors->has('city'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('city') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label class="text-white mb-2">Address</label>
                                    <input type="text" class="form-control mb-2" placeholder="address" name="address"
                                        value="{{ old('address') }}" />

                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label class="text-white mb-2">Nationality</label>
                                    <input type="text" class="form-control mb-2" placeholder="Nationality"
                                        name="nationality" value="{{ old('nationality') }}" />

                                    @error('nationality')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label class="text-white mb-2">Passport Number</label>
                                    <input type="text" class="form-control mb-2" placeholder="Passport Number"
                                        name="passport_no" value="{{ old('passport_no') }}" />

                                    @error('passport_no')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                @if (isset($route))
                                    <div class="col-lg-6 col-sm-12">
                                        <label class="text-white mb-2">Project</label>
                                        <select name="project_id" id="project" class="form-control mb-3 bg-transparent">
                                            <option value="">--Select Project</option>
                                            @foreach ($projects as $project)
                                                {{-- <option value="{{ $project->id }}">{{ $project->name }}</option> --}}
                                                <option value="{{ $project->id }}"
                                                    {{ old('project_id') == $project->id ? 'selected' : '' }}>
                                                    {{ $project->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('project_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <label class="text-white mb-2">Unit number</label>
                                        <select name="unit_id" id="unit" class="form-control mb-3 bg-transparent">
                                            <option value="">--Select Unit</option>

                                        </select>

                                        @error('unit_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                @endif
                            </div>

                        </div>

                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="card-footer d-flex justify-content-end">
                        <!--begin::Button-->
                        <div class="form-button">
                            <button class="button button-jerry button-primary mt-5  " type="submit">Submit<span
                                    class="button-jerry-line"></span><span class="button-jerry-line"></span><span
                                    class="button-jerry-line"></span><span class="button-jerry-line"></span>
                            </button>
                        </div>
                        <!--end::Button-->
                    </div>
                    <!--end::Modal footer-->

                </form>
            </div>
        </div>
    </main>
@endsection
    


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="{{ asset('js/dependent-country-city.js') }}"></script>
<script>


    document.addEventListener('DOMContentLoaded', function() {
    var projectSelect = document.getElementById('project');
    var unitSelect = document.getElementById('unit');
    var eoiUnitId = {{ old('unit_id') ?? 0 }}; // Default to 0 if not set

    function populateUnits(project_id) {
        unitSelect.innerHTML = '';

        if (project_id) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var units = JSON.parse(xhr.responseText);

                        units.forEach(function(unit) {
                            var option = document.createElement('option');
                            option.value = unit.id;
                            option.textContent = 'unit-' + unit.unit_no + ', ' + unit.unit_type + ', Floor-' + unit.floor_number;
                            unitSelect.appendChild(option);
                        });

                        // Preselect the unit based on eoiUnitId
                        var selectedOption = Array.from(unitSelect.options).find(option => option.value === eoiUnitId.toString());
                        if (selectedOption) {
                            selectedOption.selected = true;
                        }
                    } else {
                        console.error('Error fetching units:', xhr.status);
                    }
                }
            };

            xhr.open('GET', '/fetch-units/' + project_id, true);
            xhr.send();
        }
    }

    projectSelect.addEventListener('change', function() {
        var project_id = this.value;
        populateUnits(project_id);
    });

    // Trigger the change event to populate the units and select the old value
    projectSelect.dispatchEvent(new Event('change'));
});

</script>
