@extends('layouts.project-flows-layout')
<script src="{{ asset('assets/js/pdf.js') }}"></script>
<script src="{{ asset('assets/js/pdfThumbnails.js') }}" data-pdfjs-src="{{ asset('assets/js/pdf.js') }}"></script>

@section('content')
    <style>
        .bg-image {
            background: url('/assets/front_assets/Image/empire-estates/exterior/Nadeem/exterior-placeholder.png');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .autoplay-progress {
            position: absolute;
            right: 16px;
            bottom: 16px;
            z-index: 10;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: var(--swiper-theme-color);
        }

        .autoplay-progress svg {
            --progress: 0;
            position: absolute;
            left: 0;
            top: 0px;
            z-index: 10;
            width: 100%;
            height: 100%;
            stroke-width: 4px;
            stroke: var(--swiper-theme-color);
            fill: none;
            stroke-dashoffset: calc(125.6 * (1 - var(--progress)));
            stroke-dasharray: 125.6;
            transform: rotate(-90deg);
        }

        .swiper-wrapper {
            height: 85vh;
        }

        .bg-image .img-fluid {
            width: 100%;
            height: 350px;
            object-fit: cover;
        }

        .fancybox__slide.has-iframe .fancybox__content {
            height: 100vh !important;
        }

        .fancybox__container.is-compact .fancybox__slide.has-iframe .fancybox__content {
            width: 100%;
            height: 100%;
        }

        .lazyload {
            width: 2px;
            height: 2px;
        }
    </style>
    <main class="valign-wrapper main-menu bg-image">
        <span class="container grey-text text-lighten-1 menu d-flex justify-content-center align-items-center"
            style="height: 85vh;">
            <div class="center-align">
                <div class="row">
                    <div class="col-lg-4 col-sm-4 my-3">
                        <a class="" href="" id="render_menu">
                            <div class="card option-card">
                                <div class="card-body">
                                    <div>
                                        <div class="icon">
                                            <img src="{{ asset('assets/front_assets/icons/image.png') }}"
                                                alt="Socail media icon" width="50%">
                                        </div>
                                        <div class="text">
                                            Renders
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-4 my-3">
                        <a class="" href="#" id="video_menu">
                            <div class="card option-card">
                                <div class="card-body">
                                    <div>
                                        <div class="icon">
                                            <img src="{{ asset('assets/front_assets/icons/video.png') }}"
                                                alt="Socail media icon" width="50%">
                                        </div>
                                        <div class="text">
                                            Videos
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-4 my-3">
                        <a class="" href="" id="360_menu">
                            <div class="card option-card">
                                <div class="card-body">
                                    <div>
                                        <div class="icon">
                                            <img src="{{ asset('images/360.png') }}" alt="360 image icon" width="40%">
                                        </div>
                                        <div class="text">
                                            360 Views
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-4 my-3">
                        <a class="" href="" id="social_posts">
                            <div class="card option-card">
                                <div class="card-body">
                                    <div>
                                        <div class="icon">
                                            <img src="{{ asset('assets/front_assets/icons/social-media.png') }}"
                                                alt="Socail media icon" width="50%">
                                        </div>
                                        <div class="text">
                                            Socail Posts
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-4 my-3">
                        <a class="" href="" id="broucher">
                            <div class="card option-card">
                                <div class="card-body">
                                    <div>
                                        <div class="icon">
                                            <img src="{{ asset('assets/front_assets/icons/brochure.png') }}"
                                                alt="Broucher Icon" width="50%">
                                        </div>
                                        <div class="text">
                                            Brouchers
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </span>
    </main>

    <main class="valign-wrapper renders-menu bg-image">
        <span class="container grey-text text-lighten-1 menu d-flex justify-content-center align-items-center"
            style="height: 85vh;">
            <div class="center-align">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 my-3">
                        <a class="" href="" id="1bhk_menu">
                            <div class="card option-card">
                                <div class="card-body">
                                    <div>
                                        <div class="icon">
                                            <img src="{{ asset('assets/front_assets/icons/1bhk.png') }}" alt="bedroom icon"
                                                width="20%">
                                        </div>
                                        <div class="text">
                                            1 Bedroom
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-sm-12 my-3">
                        <a class="" href="#" id="2bhk_menu">
                            <div class="card option-card">
                                <div class="card-body">
                                    <div>
                                        <div class="icon">
                                            <img src="{{ asset('assets/front_assets/icons/2bhk.png') }}" alt="bedroom icon"
                                                width="20%">
                                        </div>
                                        <div class="text">
                                            2 Bedroom
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-sm-12 my-3">
                        <a class="" href="#" id="3bhk_menu">
                            <div class="card option-card">
                                <div class="card-body">
                                    <div>
                                        <div class="icon">
                                            <img src="{{ asset('assets/front_assets/icons/3bhk.png') }}" alt="bedroom icon"
                                                width="20%">
                                        </div>
                                        <div class="text">
                                            3 Bedroom
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-sm-12 my-3">
                        <a class="" href="#" id="studio_menu">
                            <div class="card option-card">
                                <div class="card-body">
                                    <div>
                                        <div class="icon">
                                            <img src="{{ asset('assets/front_assets/icons/studio.png') }}"
                                                alt="bedroom icon" width="20%">
                                        </div>
                                        <div class="text">
                                            Studio
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </span>
    </main>

    <main class="valign-wrapper 360-menu bg-image">
        <div class="overlay"></div>
        <span class="container grey-text text-lighten-1 menu overflow-auto" style="height: 85vh;">
            <div class="center-align">
                <section id="360_view" class="services">
                    <div class="section-title py-3" data-aos="fade-up">
                        <h2 class="text-light text-uppercase">
                            Empire Estates 360 View
                        </h2>
                    </div>
                    <div class="row">
                        @php 
                            $panorams = [
                                [
                                    'panora_img' => asset('assets/front_assets/img/projects/empire_estates/balcony_01.jpg'),
                                    'panora_src' => 'https://empiredevelopments.ae/empire-estates/360views/studio',
                                    'panora_title' => 'Studio Apartment',
                                    'panora_txt1' => 'Studio Bedroom 360 view',
                                    'panora_txt2' => 'Studio',
                                ],
                                [
                                    'panora_img' => asset('assets/front_assets/img/projects/empire_estates/dining.jpg'),
                                    'panora_src' => 'https://empiredevelopments.ae/empire-estates/360views/1bed',
                                    'panora_title' => '1 BHK Apartment',
                                    'panora_txt1' => '1 BHK 360 view',
                                    'panora_txt2' => '1 BHK',
                                ],
                                [
                                    'panora_img' => asset('assets/front_assets/img/projects/empire_estates/bedroom.jpg'),
                                    'panora_src' => 'https://empiredevelopments.ae/empire-estates/360views/2bed',
                                    'panora_title' => '2 BHK Apartment',
                                    'panora_txt1' => '2 BHK 360 view',
                                    'panora_txt2' => '2 BHK',
                                ],
                                [
                                    'panora_img' => asset('assets/front_assets/img/projects/empire_estates/bedduplex.jpg'),
                                    'panora_src' => 'https://empiredevelopments.ae/empire-estates/360views/2dublixbed',
                                    'panora_title' => '2 BHK Duplex Apartment',
                                    'panora_txt1' => '2 Duplex BHK 360 view',
                                    'panora_txt2' => '2 Duplex BHK',
                                ],
                                [
                                    'panora_img' => asset('assets/front_assets/img/projects/empire_estates/3bed.jpg'),
                                    'panora_src' => 'https://empiredevelopments.ae/empire-estates/360views/3bed',
                                    'panora_title' => '3 BHK Apartment',
                                    'panora_txt1' => '3 BHK 360 view',
                                    'panora_txt2' => '3 BHK',
                                ],
                            ];
                            $panorams = json_decode(json_encode($panorams), false);
                        @endphp
                        @foreach ($panorams as $panoram)
                            <div class="col-lg-4 col-sm-12">
                                <a href="{{ $panoram->panora_src }}" data-fancybox="vr_gallery" data-type="iframe"
                                    width="90%" height="100vh">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ $panoram->panora_img }}" alt="" srcset=""
                                                class="img-fluid">
                                        </div>
                                        <div class="card-footer">
                                            <div class="card-text">{{ $panoram->panora_txt2 }}</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </section>
            </div>
        </span>
    </main>
    {{-- Socail Posts --}}
    <main class="valign-wrapper socail-menu bg-image">
        <div class="overlay"></div>
        <span class="container grey-text text-lighten-1 menu overflow-auto" style="height: 85vh;">
            <div class="center-align">
                <section id="social_posts" class="services">
                    <div class="section-title py-3" data-aos="fade-up">
                        <h2 class="text-light text-uppercase">
                            Socail Media Posts
                        </h2>
                    </div>
                    <div class="row">
                        @php
                            $socail_posts = ['assets/front_assets/Image/empire-estates/social-posts/post2.jpg', 'assets/front_assets/Image/empire-estates/social-posts/post-3.jpg', 'assets/front_assets/Image/empire-estates/social-posts/post-4.jpg', 'assets/front_assets/Image/empire-estates/social-posts/post-5.jpg', 'assets/front_assets/Image/empire-estates/social-posts/post-6.jpg', 'assets/front_assets/Image/empire-estates/social-posts/post-7.jpg', 'assets/front_assets/Image/empire-estates/social-posts/post-8.jpg', 'assets/front_assets/Image/empire-estates/social-posts/post-9.jpg', 'assets/front_assets/Image/empire-estates/social-posts/intrest.jpg'];
                        @endphp
                        @foreach ($socail_posts as $posts)
                            <div class="col-lg-4 col-sm-12">
                                <div class="card">

                                    <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                        <img class="img-fluid" data-fancybox="posts_gallery" src="{{ asset($posts) }}"
                                            alt="Socail Media Post" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </section>
            </div>
        </span>
    </main>
    {{-- brouchers --}}
    <main class="valign-wrapper broucher-menu bg-image">
        <div class="overlay"></div>
        <span class="container grey-text text-lighten-1 menu overflow-auto" style="height: 85vh;">
            <div class="center-align">
                <section id="broucher" class="services">
                    <div class="section-title py-3" data-aos="fade-up">
                        <h2 class="text-light text-uppercase">
                            Brouchers
                        </h2>
                    </div>
                    <div class="row">
                        @php
                            $brouchers = [
                                [
                                    'file' => asset('public/assets/front_assets/brouchers/Fact Sheet-EE.pdf'),
                                    'file_title' => 'Fact Sheet',
                                ],
                                [
                                    'file' => asset('public/assets/front_assets/brouchers/Typical Floor Plans Book-Empire Estates.pdf'),
                                    'file_title' => 'Typical Floor Plans Book',
                                ],
                                [
                                    'file' => asset('public/assets/front_assets/brouchers/brochure.pdf'),
                                    'file_title' => 'Broucher',
                                ],
                                [
                                    'file' => asset('public/assets/front_assets/brouchers/Empire Estates-Individual Units Floor Plan.pdf'),
                                    'file_title' => 'Individual Units Floor Plan',
                                ],
                            ];
                            $brouchers = json_decode(json_encode($brouchers), false);

                        @endphp
                        @foreach ($brouchers as $broucher)
                            <div class="col-lg-4 col-sm-4 my-3">
                                <a class="" href="{{ $broucher->file }}" id="broucher" data-fancybox="broucher">
                                    <div class="card option-card">
                                        <div class="card-body">
                                            <div>
                                                <div class="icon">
                                                    <img src="{{ asset('assets/front_assets/icons/pdf.png') }}"
                                                        alt="Socail media icon" width="50%">
                                                </div>
                                                <div class="text">
                                                    {{ $broucher->file_title }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </section>
            </div>
        </span>
    </main>
    @php
        $one_bed_paths = ['assets/front_assets/Image/empire-estates/1 Bed Apt/Balcony.jpg', 'assets/front_assets/Image/empire-estates/1 Bed Apt/Bath.jpg', 'assets/front_assets/Image/empire-estates/1 Bed Apt/Bedroom View 01.jpg', 'assets/front_assets/Image/empire-estates/1 Bed Apt/Bedroom View 02.jpg', 'assets/front_assets/Image/empire-estates/1 Bed Apt/Dining.jpg', 'assets/front_assets/Image/empire-estates/1 Bed Apt/Long Lounge.jpg', 'assets/front_assets/Image/empire-estates/1 Bed Apt/Lounge 01.jpg', 'assets/front_assets/Image/empire-estates/1 Bed Apt/Lounge 02.jpg', 'assets/front_assets/Image/empire-estates/1 Bed Apt/Lounge 03.jpg', 'assets/front_assets/Image/empire-estates/1 Bed Apt/Pool.jpg', 'assets/front_assets/Image/empire-estates/1 Bed Apt/Vanity Area.jpg'];

        $two_bed_paths = [
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Bath Room_01.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Bathroom_Cam02.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Bedroom Terrace_01_A.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Bedroom_01_A.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Bedroom_01_B.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Bedroom_01_C.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Bedroom_01_D.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Bedroom_02_A.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Bedroom_02_B.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Dining-01.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Dining-02.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Kitchen.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Living 02.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Living-Kitchen.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Living-01.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Living-03.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Living-04.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Terrace-outdoor-2.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Terrace-Outdor-1.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Terrace-Outdor-2.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Terrace-pool 1.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Terrace-Pool.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Bath Room_01.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Bathroom_Cam02.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Bedroom Terrace_01_A.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Bedroom_01_A.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Bedroom_01_B.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Bedroom_01_C.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Bedroom_01_D.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Bedroom_02_A.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Bedroom_02_B.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Dining-01.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Dining-02.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Kitchen.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Living 02.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Living-01.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Living-03.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Living-04.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Living-Kitchen.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Terrace-outdoor-2.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Terrace-Outdor-1.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Terrace-Outdor-2.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Terrace-pool 1.jpg',
            'assets/front_assets/Image/empire-estates/2-Bed Duplex/Terrace-Pool.jpg',
        ];

        $three_bed_paths = ['assets/front_assets/Image/empire-estates/3 Bed Apartment/3 Bed Bathroom_01.jpg', 'assets/front_assets/Image/empire-estates/3 Bed Apartment/Bathroom_02..jpg', 'assets/front_assets/Image/empire-estates/3 Bed Apartment/Bathroom-03.jpg', 'assets/front_assets/Image/empire-estates/3 Bed Apartment/Bed Room_03.jpg', 'assets/front_assets/Image/empire-estates/3 Bed Apartment/Bedroom 01-Cam_01.jpg', 'assets/front_assets/Image/empire-estates/3 Bed Apartment/Bedroom 01-Cam_02.jpg', 'assets/front_assets/Image/empire-estates/3 Bed Apartment/Bedroom-02.jpg', 'assets/front_assets/Image/empire-estates/3 Bed Apartment/Lounge Dinnng & Kitchen_01_A.jpg', 'assets/front_assets/Image/empire-estates/3 Bed Apartment/Lounge Dinnng & Kitchen_01_B.jpg', 'assets/front_assets/Image/empire-estates/3 Bed Apartment/Terrace.jpg'];
        $studio_paths = ['assets/front_assets/Image/empire-estates/Studio_APT/BATHROOM.jpg', 'assets/front_assets/Image/empire-estates/Studio_APT/Bed_01.jpg', 'assets/front_assets/Image/empire-estates/Studio_APT/Kitchen View01.jpg', 'assets/front_assets/Image/empire-estates/Studio_APT/Kitchen View02.jpg', 'assets/front_assets/Image/empire-estates/Studio_APT/LOUNGE.jpg', 'assets/front_assets/Image/empire-estates/Studio_APT/Studio Apt Balcony.jpg'];

    @endphp

    <main class="valign-wrapper  1bhk-menu bg-image overflow-md">
        <div class="overlay"></div>
        <span class="container-fluid grey-text text-lighten-1 menu overflow-auto" style="height: 85vh;">
            <div class="center-align">
                <div class="row">
                    @foreach ($one_bed_paths as $imagePath)
                        <div class="col-lg-4 col-sm-12">
                            <div class="card">

                                <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                    <img class="img-fluid" data-fancybox="1bhk_gallery" src="{{ asset($imagePath) }}"
                                        alt="Interior Render" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </span>
    </main>
    <main class="valign-wrapper 2bhk-menu bg-image overflow-md">
        <div class="overlay"></div>
        <span class="container-fluid grey-text text-lighten-1 menu overflow-auto" style="height: 85vh;">
            <div class="center-align">
                <div class="row">
                    @foreach ($two_bed_paths as $imagePath)
                        <div class="col-lg-4 col-sm-12">
                            <div class="card">

                                <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                    <img class="img-fluid" data-fancybox="2bhk_gallery" src="{{ asset($imagePath) }}"
                                        alt="Interior Render" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </span>
    </main>

    <main class="valign-wrapper 3bhk-menu bg-image overflow-md">
        <div class="overlay"></div>
        <span class="container-fluid grey-text text-lighten-1 menu overflow-auto d-flex align-items-center"
            style="height: 85vh;">
            <div class="center-align">
                <div class="row">
                    @foreach ($three_bed_paths as $imagePath)
                        <div class="col-lg-4 col-sm-12">
                            <div class="card">
                                <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                    <img class="img-fluid" data-fancybox="3bhk_gallery" src="{{ asset($imagePath) }}"
                                        alt="Interior Render" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </span>
    </main>
    <main class="valign-wrapper studio-menu bg-image overflow-md">
        <div class="overlay"></div>
        <span class="container-fluid grey-text text-lighten-1 menu overflow-auto d-flex align-items-center"
            style="height: 85vh;">
            <div class="center-align">
                <div class="row">
                    @foreach ($studio_paths as $imagePath)
                        <div class="col-lg-4 col-sm-12">
                            <div class="card">
                                <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                    <img class="img-fluid" data-fancybox="studio_gallery" src="{{ asset($imagePath) }}"
                                        alt="Interior Render" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </span>
    </main>

    <main class="valign-wrapper video-menu bg-image">
        <div class="overlay"></div>
        <span class="container-fluid grey-text text-lighten-1 menu" style="height: 85vh;">
            <div class="center-align">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a data-fancybox="video-gallery" data-width="640" data-height="360"
                                href="{{ asset('assets/front_assets/videos/home_intro.mp4') }}">
                                <img data-src="{{ asset('assets/front_assets/videos/home_intro.png') }}" alt=""
                                    class="lazyload" width="2" height="2">
                                <div class="video-overlay">
                                    <div class="play-button"></div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fancybox="video-gallery" data-width="640" data-height="360"
                                href="{{ asset('assets/front_assets/videos/home_page.mp4') }}">
                                <img data-src="{{ asset('assets/front_assets/Image/1.png') }}" alt=""  class="lazyload" width="2" height="2">
                                <div class="video-overlay">
                                    <div class="play-button"></div>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a data-fancybox="video-gallery" data-width="640" data-height="360"
                                href="https://youtu.be/xYTOKXKhov0">
                                <img data-src="{{ asset('assets/front_assets/Image/empire-estates/exterior/Ext01.jpg') }}"
                                    alt=""  class="lazyload" width="2" height="2">
                                <div class="video-overlay">
                                    <div class="play-button"></div>
                                </div>
                            </a>
                        </div>


                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                    <div class="autoplay-progress">
                        <svg viewBox="0 0 48 48">
                            <circle cx="24" cy="24" r="20"></circle>
                        </svg>
                        <span></span>
                    </div>
                </div>
            </div>
        </span>
    </main>

    @include('project-flows.footer', [
        'btn_class' => 'opacity1',
        'back_route' => route('empire.system'),
    ])
    @push('js')
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <script>
            $(document).ready(function() {

                $('.lazyload').each(function() {
                    $(this).attr('src', $(this).data('src'));
                });

                $('.lazyload').on('load', function() {
                    $(this).css({
                        'width': '', 
                        'height': ''
                    });
                });

                if ($('.main-menu').is(':visible')) {
                    $('.back-button').hide();
                }
                $('.renders-menu').hide();
                $('.video-menu').hide();
                $('.1bhk-menu').hide();
                $('.2bhk-menu').hide();
                $('.3bhk-menu').hide();
                $('.studio-menu').hide();
                $('.360-menu').hide();
                $('.socail-menu').hide();
                $('.broucher-menu').hide();

                $('#render_menu').on('click', function(e) {
                    e.preventDefault();
                    $('.back-button').show();
                    $('.renders-menu').show();
                    $('.main-menu').hide();
                });

                $('#1bhk_menu').on('click', function(e) {
                    e.preventDefault();
                    $('.back-button').show();
                    $('.1bhk-menu').show();
                    $('.renders-menu').hide();

                });

                $('#2bhk_menu').on('click', function(e) {
                    e.preventDefault();
                    $('.back-button').show();
                    $('.2bhk-menu').show();
                    $('.renders-menu').hide();

                });

                $('#3bhk_menu').on('click', function(e) {
                    e.preventDefault();
                    $('.back-button').show();
                    $('.3bhk-menu').show();
                    $('.renders-menu').hide();

                });

                $('#studio_menu').on('click', function(e) {
                    e.preventDefault();
                    $('.back-button').show();
                    $('.studio-menu').show();
                    $('.renders-menu').hide();

                });

                $('#360_menu').on('click', function(e) {
                    e.preventDefault();
                    $('.back-button').show();
                    $('.360-menu').show();
                    $('.main-menu').hide();
                });

                $('#social_posts').on('click', function(e) {
                    e.preventDefault();
                    $('.back-button').show();
                    $('.socail-menu').show();
                    $('.main-menu').hide();
                });

                $('#broucher').on('click', function(e) {
                    e.preventDefault();
                    $('.back-button').show();
                    $('.broucher-menu').show();
                    $('.main-menu').hide();
                });

                $('#video_menu').on('click', function(e) {
                    e.preventDefault();
                    $('.back-button').show();
                    $('.video-menu').show();
                    $('.main-menu').hide();
                    $('.renders-menu').hide();
                });

                $('#1bhk_menu').on('click', function(e) {
                    e.preventDefault();
                    $('.back-button').show();
                    $('.1bhk-menu').show();
                    $('.renders-menu').hide();
                });

                $('.back-button').on('click', function(e) {
                    e.preventDefault();

                    if ($('.video-menu').is(':visible')) {
                        $('.main-menu').show();
                        $('.back-button').hide();
                        $('.video-menu').hide();
                        $('.renders-menu').hide();
                    } else if ($('.renders-menu').is(':visible')) {
                        $('.main-menu').show();
                        $('.back-button').hide();
                        $('.renders-menu').hide();
                    } else if ($('.1bhk-menu').is(':visible') ||
                        $('.2bhk-menu').is(':visible') ||
                        $('.3bhk-menu').is(':visible') ||
                        $('.studio-menu').is(':visible')) {
                        $('.renders-menu').show();
                        $('.1bhk-menu, .2bhk-menu, .3bhk-menu, .studio-menu').hide();
                    } else if ($('.360-menu').is(':visible')) {
                        $('.main-menu').show();
                        $('.back-button').hide();
                        $('.360-menu').hide();
                    } else if ($('.socail-menu').is(':visible')) {
                        $('.main-menu').show();
                        $('.back-button').hide();
                        $('.socail-menu').hide();
                    } else if ($('.broucher-menu').is(':visible')) {
                        $('.main-menu').show();
                        $('.back-button').hide();
                        $('.broucher-menu').hide();
                    }
                });
            });
            const progressCircle = document.querySelector(".autoplay-progress svg");
            const progressContent = document.querySelector(".autoplay-progress span");
            var swiper = new Swiper(".video-swiper");
            var swiper = new Swiper(".mySwiper", {
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                },
                on: {
                    autoplayTimeLeft(s, time, progress) {
                        progressCircle.style.setProperty("--progress", 1 - progress);
                        progressContent.textContent = `${Math.ceil(time / 1000)}s`;
                    }
                }
            });

            pannellum.viewer('2bhk_panorama', {
                "type": "equirectangular",
                "compass": true,
                "panorama": "{{ asset('assets/images/banners/empire-estate/studio-360.jpg') }}",
                "preview": "{{ asset('assets/images/banners/empire-estate/studio.jpg') }}",
            });
            pannellum.viewer('1bhk_panorama', {
                "type": "equirectangular",
                "compass": true,
                "panorama": "{{ asset('assets/images/banners/empire-estate/1-bhk-360.jpg') }}",
                "preview": "{{ asset('assets/images/banners/empire-estate/1-bhk.jpg') }}",
            });

            $('[data-fancybox="broucher"]').fancybox({
                type: 'iframe',
            });
        </script>
    @endpush
@endsection
