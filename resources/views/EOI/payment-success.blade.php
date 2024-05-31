@extends('frontend.layouts.app')
<link rel="stylesheet" href="{{ asset('assets/front_assets/css/project-details.css') }}">

@section('content')
    <style>
        .verification-promt-card {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .verification-promt-card .card {
            width: 62%;
            padding: 35px;
        }
        .eoi-card {
            background: #20272C;
            box-shadow: 20px 30px 30px rgba(0, 0, 0, 0.2);
            border-radius: 20px;
        }
    </style>
    <div class="row">
        <div class="container verification-promt-card">

            <div class="card eoi-card ">
                <div class="text-center">
                    <img class="theme-light-show mb-2" style="width: 40%" src="{{ asset('assets/front_assets/img/logo-white-v2.png') }}"
                        alt="" />
                </div>
                <div class="card-body">
                    <div class="mb-4 text-sm text-white">
                        {{ __('Your commitment to reserving a unit with us is greatly appreciated, and we are thrilled to have the opportunity to serve you. Your payment has been successfully received.') }}
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div>
                        <a href="{{ route('start')}}" class="btn-gradient-gold"> {{ __('Go To Home') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
