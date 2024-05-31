@extends('Front.layouts.project-flows-layout')
<style>
    html,
    body {
        position: relative;
        height: 100%;
    }

    body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
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
</style>
@section('content')
    <main class="valign-wrapper main-menu">
        <span class="container-fluid grey-text text-lighten-1 menu" style="height: 90vh;">
            <div class="center-align">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/banners/empire-estate/Interior/1-BHK/1bdr_View04.jpg') }}"
                                alt="" srcset="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/banners/empire-estate/Interior/1-BHK/1bdr_View05.jpg') }}"
                                alt="" srcset="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/banners/empire-estate/Interior/1-BHK/Lounge.jpeg') }}"
                                alt="" srcset="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/banners/empire-estate/Interior/1-BHK/1bdr_View07.jpg') }}"
                                alt="" srcset="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/banners/empire-estate/Interior/1-BHK/bathroom.jpeg') }}"
                                alt="" srcset="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/banners/empire-estate/Interior/STUDIO/2.jpg') }}"
                                alt="" srcset="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/banners/empire-estate/Interior/STUDIO/3.jpg') }}"
                                alt="" srcset="">
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

    @include('Front.pages.project-flows.footer', [
        'btn_class' => 'opacity1',
        'back_route' => route('empire.system.menu'),
    ])
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            // autoplay: {
            //     delay: 2500,
            //     disableOnInteraction: false
            // },
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
    </script>
@endsection
