@extends('layouts.auth')
@section('page-title')
    {{ __('Register') }}
@endsection
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/css/intlTelInput.css"
        integrity="sha512-s51TDsIcMqlh1YdQbF3Vj4StcU/5s97VyLEEpkPWwP0CJfjZ/C5zAaHnG+DZroGDn1UagQezDEy61jP4yoi4vQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput.min.css" media="all"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('css/register/multi-step.css') }}">
@endpush
@section('language-bar')
    <div class="lang-dropdown-only-desk">
        <li class="dropdown dash-h-item drp-language">
            <a class="dash-head-link dropdown-toggle btn" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="drp-text"> {{ Str::upper($lang) }}
                </span>
            </a>
            <div class="dropdown-menu dash-h-dropdown dropdown-menu-end">
                @foreach (languages() as $key => $language)
                    <a href="{{ route('register', $key) }}"
                        class="dropdown-item @if ($lang == $key) text-primary @endif">
                        <span>{{ Str::ucfirst($language) }}</span>
                    </a>
                @endforeach
            </div>
        </li>
    </div>
@endsection
<style>
    .custom-login .card {
        width: 100% !important;
    }

    .custom-login .custom-wrapper .card .card-body.register-form {
        max-width: 900px;
        margin: auto !important
    }

    .iti {
        display: block !important;
    }

    .typeahead.dropdown-menu {
        position: absolute;
        display: inline-block;
    }
</style>
@section('content')
    {{-- <div class="card">
        <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate="">
            @csrf
            <div class="card-body">
                <div class="">
                    <h2 class="mb-3 f-w-600">{{ __('Register') }}</h2>
                </div>
                <div class="">
                    <div class="form-group mb-3">
                        <label class="form-label">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="error invalid-name text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">{{ __('WorkSpace Name') }}</label>
                        <input id="store_name" type="text" class="form-control @error('store_name') is-invalid @enderror"
                            name="store_name" value="{{ old('store_name') }}" required autocomplete="store_name">
                        @error('store_name')
                            <span class="error invalid-name text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <input type="hidden" name = "type" value="register" id="type">
                    <div class="form-group mb-3">
                        <label class="form-label">{{ __('Email') }}</label>
                        <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="error invalid-email text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="error invalid-password text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label class="form-label">{{ __('Confirm password') }}</label>
                        <input id="password-confirm" type="password"
                            class="form-control @error('password_confirmation') is-invalid @enderror"
                            name="password_confirmation" required autocomplete="new-password">
                        @error('password_confirmation')
                            <span class="error invalid-password_confirmation text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    @if (module_is_active('GoogleCaptcha') && admin_setting('google_recaptcha_is_on') == 'on')
                        <div class="form-group col-lg-12 col-md-12 mt-3">
                            {!! NoCaptcha::display() !!}
                            @error('g-recaptcha-response')
                                <span class="error small text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    @endif
                    <div class="d-grid">
                        <button class="btn btn-primary btn-block mt-2" type="submit">{{ __('Register') }}</button>
                    </div>

                </div>
                <p class="mb-2 my-4 text-center">{{ __('Already have an account?') }} <a
                        href="{{ route('login', $lang) }}" class="f-w-400 text-primary">{{ __('Login') }}</a></p>
            </div>
        </form>
    </div> --}}
    <div class="row card-body register-form">
        <!-- TITLE -->
        {{-- <div class="col-lg-4 offset-lg-1 mx-0 px-0">
            <div id="title-container">
                <div>
                    <img class="form-image" src="{{ asset('assets/images/logo/ED-logo-black.png') }}">
                    <h4>Broker Registration</h4>
                </div>
                <div class="d-flex justify-content-between align-items-end py-2">
                    <!-- Back link -->
                    <div class="me-2">
                        <a href="{{ route('login') }}" class="text-white rounded-circle">
                            <i class="fa-solid fa-arrow-left fs-6"></i>
                        </a>
                    </div>
                    <!-- End Back link -->
                    <!-- Sign Up link -->
                    <div class="m-0">
                        <span class="text-gray-400 fw-bold fs-6 me-2">Already a member ?</span>
                        <a href="{{ route('login') }}" class="text-light fw-bold fs-6">Sign In</a>
                    </div>
                    <!-- End Sign Up link -->
                </div>
            </div>
        </div> --}}
        <!-- FORMS -->
        <div class="col-12 mx-0 px-0">
            @include('partials.add-agency-form', ['is_registration_form' => true, 'agencies' => $agencies])
        </div>
        <div id="preloader-wrapper">
            <div id="preloader"></div>
            <div class="preloader-section section-left"></div>
            <div class="preloader-section section-right"></div>
        </div>
    </div>

@endsection
@push('custom-scripts')
    @if (module_is_active('GoogleCaptcha') && admin_setting('google_recaptcha_is_on') == 'on')
        {!! NoCaptcha::renderJs() !!}
    @endif
@endpush
@push('script')
    <!-- Include other JavaScript libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Include other JavaScript libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/js/intlTelInput.min.js"
        integrity="sha512-uZZS8rsETXJQX6Jy57Zdc7PAmP83GCjC1F/LX0xUj12wY5SlfUX+CVnYFEX89doutQPeFbI9FjUCkpuTWqlBwg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/js/intlTelInput-jquery.min.js"
        integrity="sha512-sVhsc+r7sEickzS6LohO+VDVv2ler/3QY7op8ScWV8KVLLq+m1WAl6uplr/YHmqI0L0j99ehNRh2cIwn7zXcdg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"></script>

    <!-- Include Fileinput JavaScript libraries -->
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/buffer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/filetype.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/piexif.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/sortable.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/fileinput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/locales/LANG.js"></script>

    <script src="{{ asset('js/dependent-country-city.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src="{{ asset('js/register/multi-step.js') }}"></script>
    <script src="{{ asset('js/register/register.js') }}"></script>
@endpush
