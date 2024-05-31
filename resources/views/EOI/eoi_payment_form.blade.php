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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush
@section('content')
    <main class="custom-wrapper">
        <div class="custom-row">
            <div class="card mb-xl-10 py-5 eoi-card context-dark ">
                @php
                    $route_url = isset($route) ? route('Eoi-payments.store') : route('Eoi-payments.update', [$eoi->id]);
                    $user = Auth::user();
                @endphp
                <form id="kt_modal_new_card_form" accept-charset="UTF-8" class="form require-validation" method="POST"
                    data-cc-on-file="false" action="{{ route('make.payment') }}"
                    data-stripe-publishable-key="{{ config('stripe.public_key') }}">
                    @csrf
                    <input type="hidden" name="unit" value="{{ $eoi->unit_id }}">
                    <input type="hidden" name="amount" value="{{ $eoi->amount }}">
                    <input type="hidden" name="eoi_id" value="{{ $eoi->id }}">
                    @if (!isset($route))
                        @method('PUT')
                    @endif
                    <div class="card-header align-items-center d-flex justify-content-between">
                        <h3 class="fw-bold text-white">Payment For EOI</h3>
                        @if (!isset($route))
                            <div class="mb-7 mx-4 text-end">
                                <div><span class="fw-bold">Project:</span> {{ $eoi->project->name }}</div>
                                <div><span class="fw-bold">Unit No:</span> {{ $eoi->unit->unit_no }}</div>
                            </div>
                        @endif
                    </div>
                    <div class="card-body py-10 px-5">
                        <div class="scroll-y me-n7 pe-7">

                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <label class="text-white mb-2">Card Name</label>
                                    <input type="text" class="form-control form-control-solid" placeholder=""
                                        name="card_name" value="Max Doe" />
                                    @error('card_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label class="text-white mb-2">Card Number</label>
                                    <div class="position-relative">
                                        <input type="number" class="card-number form-control form-control-solid"
                                            placeholder="Enter card number" name="card_number" />
                                        <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                            <img src="{{ asset('assets/images/svg/visa.svg') }}" alt=""
                                                class="h-25px" />
                                            <img src="{{ asset('assets/images/svg/mastercard.svg') }}" alt=""
                                                class="h-25px" />
                                            <img src="{{ asset('assets/images/svg/american-express.svg') }}" alt=""
                                                class="h-25px" />
                                        </div>
                                    </div>
                                    @error('card_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label class="text-white mb-2">Expiration Date</label>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <input type="text" id="monthPicker" name="card_expiry_month"
                                        placeholder="Select Month">

                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <input type="text" id="yearPicker" name="card_expiry_year" placeholder="Select Year">

                                </div>



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
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="{{ asset('js/dependent-country-city.js') }}"></script>
<script>
    $(document).ready(function() {
        const monthPicker = document.getElementById('monthPicker');
        const yearPicker = document.getElementById('yearPicker');

        // Month Picker
        flatpickr(monthPicker, {
            dateFormat: "m",
            enableTime: false, 
            altInput: true, 
            altFormat: "F", 
            mode: "single",
            monthSelectorType: "static"
        });

        // Year Picker
        flatpickr(yearPicker, {
            dateFormat: "Y", 
            enableTime: false, 
            altInput: true, 
            altFormat: "Y", 
            mode: "single", 
        });


    });
</script>
