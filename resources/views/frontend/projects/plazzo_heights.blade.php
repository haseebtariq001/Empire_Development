@extends('frontend.layouts.project')

@section('meta')
    <title>Welcome to Plazzo Heights, an exquisite development by Empire Developments</title>
@endsection

@section('content')
    <div>
        <div class="position-relative mt-5 pt-5">
            <section class="section novi-background bg-cover section-horace mt-2">
                <div class="section-horace-left bg-gray-800">
                    <div class="section-horace-left-content text-center">
                        <article class="project-classic project-classic-2">
                            <div class="project-classic-title" data-aos="fade-up" data-aos-delay="300" data-aos-once="false">
                                Plazzo<br/> Heights</div>
                            <h6 class="project-classic-text" data-aos="fade-up" data-aos-delay="400" data-aos-once="false">
                                Where Luxury Knows No Limits</h6>
                            <a class="button button-jerry button-primary-outline" data-aos="fade-up" data-aos-delay="600"
                                href="contact-us">Contact
                                Us<span class="button-jerry-line"></span><span class="button-jerry-line"></span><span
                                    class="button-jerry-line"></span><span class="button-jerry-line"></span></a>
                        </article>
                    </div>

                </div>
                <!-- Swiper-->
                <div class="swiper-container swiper-slider swiper-slider-1" data-loop="true" data-autoplay="1000"
                    data-simulate-touch="false" data-custom-prev="#swiper-prev" data-custom-next="#swiper-next"
                    data-slide-effect="fade">

                    <div class="swiper-wrapper text-center">
                        @php
                            $slider_images = [
                                asset('assets/front_assets/img/projects/plazzo-height-buildings.jpg'),
                                asset('assets/front_assets/img/projects/plazzo_heights/studio.jpg'),
                                asset('assets/front_assets/img/projects/plazzo_heights/pool.jpg'),
                                asset('assets/front_assets/img/projects/plazzo_heights/lobby.jpg'),
                                asset('assets/front_assets/img/projects/plazzo_heights/garden.jpg'),
                                asset('assets/front_assets/img/projects/plazzo_heights/ground-pool.jpg'),
                            ];
                        @endphp
                        @foreach ($slider_images as $slider_image)
                            <div class="swiper-slide context-dark p-0" data-slide-bg="{{$slider_image}}">
                                <div class="swiper-slide-caption project-modern">
                                    <div class="project-modern-decor" data-caption-animate="fadeInRight" data-caption-delay="0">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="project-modern-counter text-gradient-gold" data-aos="fade-up" data-aos-once="false">80
                        Months x 1%</div>
                </div>
            </section>
        </div>
        <section class="section novi-background bg-cover section-xl bg-white parallax-scene-js" id="about">
            <div class="container">
                <div class="row row-50 align-items-center justify-content-md-between">
                    <div class="col-md-4 col-lg-3">
                        <div class="row row-40 row-md-60">
                            <div class="col-sm-4 col-md-12 col-xl-11 wow fadeInLeft">
                                <article class="box-icon-classic" data-aos="fade-right" data-aos-once="false"
                                    data-aos-delay="200">
                                    <div class="box-icon-classic-header">
                                        <div class="box-icon-classic-icon novi-icon linearicons-apartment"></div>
                                        <h6 class="box-icon-classic-title">
                                            <a href="#">
                                                Strategic Advantage of the Location
                                            </a>
                                        </h6>
                                    </div>
                                    <div class="box-icon-classic-text">
                                        With proximity to the Mall of Emirates, Dubai Miracle Garden, DXB International Airport, and key highways like Hessa, Al Khail, and E311.
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-4 col-md-12 col-xl-11 wow fadeInLeft" data-wow-delay=".05s">
                                <article class="box-icon-classic" data-aos="fade-right" data-aos-once="false"
                                    data-aos-delay="300">
                                    <div class="box-icon-classic-header">
                                        <div class="box-icon-classic-icon novi-icon fa fa-credit-card"></div>
                                        <h6 class="box-icon-classic-title">
                                            <a href="#">EASY PAYMENT PLAN</a>
                                        </h6>
                                    </div>
                                    <div class="box-icon-classic-text">
                                        Straightforward Payment Plan: Hassle-Free and Interest-Free
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-4 col-md-12 col-xl-11 wow fadeInLeft" data-wow-delay=".1s">
                                <article class="box-icon-classic" data-aos="fade-right" data-aos-once="false"
                                    data-aos-delay="400">
                                    <div class="box-icon-classic-header">
                                        <div class="box-icon-classic-icon novi-icon fas fa-sink"></div>
                                        <h6 class="box-icon-classic-title">
                                            <a href="#"> Experience the Epitome of Exquisite Living</a>
                                        </h6>
                                    </div>
                                    <div class="box-icon-classic-text">
                                        Unrivaled luxury and sophistication. Refined living redefined.
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6">
                        <div class="inset-xl-left-35">
                            <h3 class="wow fadeInRight" data-aos="fade-down" data-aos-once="false">Schedule A Tour <br>for
                                Plazzo Heights </h3>
                            <h6 class="title-style-1 wow fadeInRight" data-aos="fade-down" data-aos-once="false"
                                data-aos-delay="200">We will contact you within
                                24 hours</h6>
                            <div class="form-style-1 context-dark wow blurIn">
                                <!-- RD Mailform-->
                                <form class="text-left" data-form-output="form-output-global" data-form-type="contact"
                                    data-aos="fade-left" data-aos-once="false" data-aos-delay="300" method="post"
                                    action="schedule-tour">
                                    <input type="hidden" name="_token"
                                        value="FLdUeWWmh0n4Ltds2k17UHWKOsp1B3kghzVtQbHl"> <input type="hidden"
                                        name="project" value="Empire Estates">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-name" type="text" name="fname"
                                            placeholder="First Name" required>
                                    </div>
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-name" type="text" name="lname"
                                            placeholder="Last Name" required>
                                    </div>
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-email" type="email" name="email"
                                            placeholder="Email" required>
                                    </div>
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-phone" type="text" name="phone"
                                            placeholder="Phone Number" required>
                                    </div>
                                    <div class="form-wrap">
                                        <input class="form-input schedule_date" id="contact-phone date" type="text"
                                            placeholder="Schedule Date" name="schedule_date" required>
                                    </div>
                                    <div class="form-button">
                                        <button class="button button-jerry button-primary" type="submit">Submit<span
                                                class="button-jerry-line"></span><span
                                                class="button-jerry-line"></span><span
                                                class="button-jerry-line"></span><span class="button-jerry-line"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layer-wrap layer-1">
                <div class="layer" data-depth="0.4"><img
                        src="{{ asset('assets/front_assets/img/building-sketch.png') }}" alt=""
                        width="694" height="539" />
                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover section-xl bg-gray-800 decoration-1" data-aos="fade-down"
            data-aos-once="false" data-aos-delay="200">
            <div class="tabs-custom container" id="tabs-1" data-view-triggerable="true">
                <div class="row row-30 row-md-40 justify-content-lg-between">
                    <div class="col-lg-5">
                        <h6 class="title-style-1 wow fadeInLeft" data-aos="fade-left" data-aos-once="false"
                            data-aos-delay="300">Plazzo Heights </h6>
                        <h1 class="wow fadeInLeft" data-aos="fade-left" data-aos-once="false" data-aos-delay="400">About
                            <br class="d-none d-lg-block">the <span class="font-weight-light">Project</span></h1>
                        <!-- Tab panes-->
                        <div class="tab-content wow fadeInLeft" data-aos="fade-left" data-aos-once="false"
                            data-aos-delay="500">
                            <div class="tab-pane fade show active" id="tabs-1-1">
                                <h3 class="title-style-1">Indulge in Unparalleled Refinement</h3>
                                <p>Welcome to Plazzo Heights, an exquisite development by Empire Developments that transcends the boundaries of opulence in the heart of Dubai.</p>

                            </div>
                            <div class="tab-pane fade" id="tabs-1-2">
                                <h3 class="title-style-1">Step into a World of Exquisite Living</h3>
                                <p>Step into a World of Exquisite Living</p>

                            </div>
                            <div class="tab-pane fade" id="tabs-1-3">
                                <h3 class="title-style-1">Indulge in the Epitome of Sophistication</h3>
                                <p>As you step into the spacious living, dining, and kitchen areas bathed in natural light, courtesy of expansive French-styled windows and doors, you'll feel the warmth and elegance radiate from the Armani-branded floorings. Plazzo Heights adds a touch of timeless beauty to every step you take.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-6">
                        <div class="inset-xl-left-35">
                            <ul class="nav nav-style-1">
                                <li class="nav-item wow blurIn" role="presentation"><a class="nav-link active"
                                        href="#tabs-1-1" data-toggle="tab" data-aos="fade-up"
                                        data-aos-anchor-placement="top-bottom" data-aos-once="false"
                                        data-aos-delay="200">Developed infrastructure</a></li>
                                <li class="nav-item wow blurIn" role="presentation" data-aos="fade-up"
                                    data-aos-once="false" data-aos-delay="300"><a class="nav-link" href="#tabs-1-2"
                                        data-toggle="tab">Premium amenities</a>
                                </li>
                                <li class="nav-item wow blurIn" role="presentation"
                                    data-aos-anchor-placement="top-bottom" data-aos-once="false" data-aos-delay="400"><a
                                        class="nav-link" href="#tabs-1-3" data-toggle="tab">A Visionary
                                        Masterpiece</a></li>
                            </ul>
                            <div class="project-creative wow blurIn" data-aos="fade-up" data-aos-once="false"
                                data-aos-delay="500" data-aos-anchor-placement="top-bottom">
                                <div class="project-creative-figure active" data-view-trigger="#tabs-1-1"><img
                                        src="{{ asset('assets/front_assets/img/projects/plazzo-height-buildings.jpg') }}"
                                        alt="" width="531" height="327" />
                                </div>
                                <div class="project-creative-figure" data-view-trigger="#tabs-1-2"><img
                                        src="{{ asset('assets/front_assets/img/projects/plazzo_heights/studio.jpg') }}"
                                        alt="" width="531" height="327" />
                                </div>
                                <div class="project-creative-figure" data-view-trigger="#tabs-1-3"><img
                                        src="{{ asset('assets/front_assets/img/projects/plazzo_heights/lobby.jpg') }}"
                                        alt="" width="531" height="327" />
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover section-lg section-inset-2 bg-gray-100" id="portfolio">
            <div class="container overflow-hidden">
                <div class="caption-classic">
                    <div class="caption-classic-group">
                        <h1 class="caption-classic-title wow fadeInLeft" style="font-size: 40px" data-aos="fade-left"
                            data-aos-once="false">Floor <span class="font-weight-light">Plans</span></h1>
                        <p class="caption-classic-text wow fadeInRight" style="font-size: 15px" data-aos="fade-right"
                            data-aos-once="false" data-aos-delay="300">Explore a world of possibilities with meticulously designed floor plans that cater to your every desire.</p>
                    </div>
                    <div class="caption-classic-decor wow blurIn"></div>
                </div>
                <!-- Owl Carousel-->
                <div class="owl-carousel owl-style-1" data-autoplay="false" data-items="1" data-margin="30"
                    data-xl-margin="90" data-nav="true" data-dots="true" data-mouse-drag="false"
                    data-smart-speed="600">
                    <article class="project-mary" data-aos="fade-up" data-aos-once="false">
                        <div class="project-mary-figure"><img
                                src="{{asset('assets/front_assets/img/projects/plazzo_heights/floor_plans/studio.png')}}"
                                alt="" width="775" height="524" />
                            <div class="project-mary-link-wrap"><a class="project-mary-link mdi mdi-magnify"
                                    data-fancybox="floor-plan-gallery"
                                    href="{{asset('assets/front_assets/img/projects/plazzo_heights/floor_plans/studio.png')}}"></a>
                            </div>
                        </div>
                        <div class="project-mary-content">
                            <ul class="project-mary-panel">
                                <li class="project-mary-panel-item">
                                    <time class="project-mary-time" datetime="2019-03-15">Area: 443.55 sqft</time>
                                </li>
                                <li class="project-mary-panel-item">
                                    <div class="project-mary-tag">Balcony </div>
                                </li>
                            </ul>
                            <h3 class="project-mary-title"><a href="#">Studio Apartment</a></h3>
                            <p class="project-mary-text">We have worked on this project for three months to completely
                                extend and redesign the old 2-storey house.</p>
                        </div>
                    </article>
                    <article class="project-mary">
                        <div class="project-mary-figure"><img
                                src="{{asset('assets/front_assets/img/projects/plazzo_heights/floor_plans/1-bed.png')}}"
                                alt="" width="775" height="524" />
                            <div class="project-mary-link-wrap"><a class="project-mary-link mdi mdi-magnify"
                                    data-fancybox="floor-plan-gallery"
                                    href="{{asset('assets/front_assets/img/projects/plazzo_heights/floor_plans/1-bed.png')}}"></a>
                            </div>
                        </div>
                        <div class="project-mary-content">
                            <ul class="project-mary-panel">
                                <li class="project-mary-panel-item">
                                    <time class="project-mary-time" datetime="2019-06-19">Area: 8998.42 sqft</time>
                                </li>
                                <li class="project-mary-panel-item">
                                    <div class="project-mary-tag">Floor PLan</div>
                                </li>
                            </ul>
                            <h3 class="project-mary-title"><a href="#">1 Bedroom Apartment</a></h3>
                            <p class="project-mary-text">Our team of exterior designers and architects integrated the
                                latest innovations in this residential project.</p>
                        </div>
                    </article>
                    <article class="project-mary">
                        <div class="project-mary-figure"><img
                                src="{{asset('assets/front_assets/img/projects/plazzo_heights/floor_plans/2-bed.png')}}"
                                alt="" width="775" height="524" />
                            <div class="project-mary-link-wrap"><a class="project-mary-link mdi mdi-magnify"
                                    data-fancybox="floor-plan-gallery"
                                    href="{{asset('assets/front_assets/img/projects/plazzo_heights/floor_plans/2-bed.png')}}"></a>
                            </div>
                        </div>
                        <div class="project-mary-content">
                            <ul class="project-mary-panel">
                                <li class="project-mary-panel-item">
                                    <time class="project-mary-time" datetime="2019-01-10">Area: 21,00.58 sqft</time>
                                </li>
                                <li class="project-mary-panel-item">
                                    <div class="project-mary-tag">Type-T01</div>
                                </li>
                            </ul>
                            <h3 class="project-mary-title"><a href="#">2 Bedroom Apartment</a></h3>
                            <p class="project-mary-text">As one of our first projects in 2019, this house features
                                unique landscape design solutions and work on exterior.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section id="services" class="services mb-5">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Amenities That Define Luxury Living</h2>
                <p>
                    At Plazzo Heights, every detail of sophisticated living has been crafted to offer a genuinely outstanding home experience. Enter a world of unmatched elegance and refinement.
                </p>
            </div><!-- End Section Title -->

            <div class="container">


                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><img
                                    src="{{ asset('assets/front_assets/img/icons/swim.svg') }}" alt=""></div>
                            <div>
                                <h4 class="title">
                                    <a href="#" class="stretched-link">
                                        Swimming Pool
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><img
                                    src="{{ asset('assets/front_assets/img/icons/playground.svg') }}" alt="">
                            </div>
                            <div>
                                <h4 class="title">
                                    <a href="#" class="stretched-link">
                                        Kids Play Area
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><img
                                    src="{{ asset('assets/front_assets/img/icons/sheild.svg') }}" alt="">
                            </div>
                            <div>
                                <h4 class="title">
                                    <a href="#" class="stretched-link">
                                        24-Hours Security
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><img
                                    src="{{ asset('assets/front_assets/img/icons/garage.svg') }}" alt="">
                            </div>
                            <div>
                                <h4 class="title">
                                    <a href="#" class="stretched-link">
                                        Covered Parking
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><img
                                    src="{{ asset('assets/front_assets/img/icons/gym.svg') }}" alt=""></div>
                            <div>
                                <h4 class="title">
                                    <a href="#" class="stretched-link">
                                        Gymnasium
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><img
                                    src="{{ asset('assets/front_assets/img/icons/sauna.svg') }}" alt="">
                            </div>
                            <div>
                                <h4 class="title">
                                    <a href="#" class="stretched-link">
                                        Sauna
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><img
                                    src="{{ asset('assets/front_assets/img/icons/barbecue.svg') }}" alt="">
                            </div>
                            <div>
                                <h4 class="title">
                                    <a href="#" class="stretched-link">
                                        BBQ Area
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="800">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><img
                                    src="{{ asset('assets/front_assets/img/icons/fire-alarm.png') }}" alt="">
                            </div>
                            <div>
                                <h4 class="title">
                                    <a href="#" class="stretched-link">
                                        Fire Alarm
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="900">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><img
                                    src="{{ asset('assets/front_assets/img/icons/kitchen-furniture.png') }}"
                                    alt="">
                            </div>
                            <div>
                                <h4 class="title">
                                    <a href="#" class="stretched-link">
                                        Modular-Kitchen
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <section class="section novi-background bg-cover section-lg bg-gray-100 text-center" id="team">
            <div class="container">
                <h3 class="wow fadeInLeft" data-aos="fade-left" data-aos-once="false">360 View</h3>
                <h6 class="title-style-1 wow fadeInRight" data-aos="fade-right" data-aos-once="false"
                    data-aos-delay="400">Immerse yourself in the unparalleled luxury and sophistication of Plazzo Heights from every angle.</h6>
                <!-- Owl Carousel-->
                <div class="owl-carousel" data-items="1" data-sm-items="1" data-md-items="2" data-xl-items="2"
                    data-margin="5" data-dots="true" data-mouse-drag="false">
                    <article class="team-classic wow fadeInUp"data-aos="fade-up" data-aos-once="false"
                        data-aos-delay="500">
                        <div class="team-classic-figure">
                            <div id="panorama" style="height: 290px"></div>
                        </div>
                        <div class="team-classic-body">
                            <h5 class="team-classic-name"><a href="#">Studio Apartment</a></h5>
                        </div>
                        <div class="team-classic-footer">
                            <div class="team-classic-status">Studio Bedroom 360 view</div>
                            <div class="team-classic-list-panel">

                                <div class="heading-1 team-classic-placeholder">Studio</div>
                            </div>
                        </div>
                    </article>
                    <article class="team-classic wow fadeInUp" data-aos="fade-up" data-aos-once="false"
                        data-aos-delay="600">
                        <div class="team-classic-figure">
                            <div id="1bhk_panorama" style="height: 290px"></div>

                        </div>
                        <div class="team-classic-body">
                            <h5 class="team-classic-name"><a href="#">1 Bedroom Apartment</a></h5>
                        </div>
                        <div class="team-classic-footer">
                            <div class="team-classic-status">1 Bedroom 360 view</div>
                            <div class="team-classic-list-panel">
                                <div class="heading-1 team-classic-placeholder">1 BHK</div>
                            </div>
                        </div>
                    </article>

                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover bg-white section-inset-1 parallax-scene-js" id="contacts">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 d-none d-lg-block wow fadeInLeft" data-aos="fade-left" data-aos-once="false">
                        <img src="{{ asset('assets/front_assets/img/contact-banner.png') }}" alt=""
                            width="538" height="694" />
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <div class="inset-xl-left-35 section-sm">
                            <h3 class="wow fadeInRight" data-aos="fade-right" data-aos-once="false">Connect with <br>Plazzo Heights</h3>
                            <h6 class="title-style-1 wow fadeInRight" data-aos="fade-right" data-aos-once="false"
                                data-aos-delay="400">Have questions or ready to start your journey at Plazzo Heights?</h6>
                            <div class="form-style-1 context-dark wow blurIn" data-aos="fade-right" data-aos-once="false"
                                data-aos-delay="500">
                                <!-- RD Mailform-->
                                <form action="lead" method="POST" class="text-left"
                                    data-aos="fade-up" data-aos-delay="200" data-parsley-validate
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="_token"
                                        value="FLdUeWWmh0n4Ltds2k17UHWKOsp1B3kghzVtQbHl">
                                    <div class="row mt-0">

                                        <div class="col-lg-6 col-sm-12 form-wrap">
                                            <input class="form-input" id="contact-name-2" type="text" name="fname"
                                                required placeholder="First Name">
                                        </div>
                                        <div class="col-lg-6 col-sm-12 form-wrap">
                                            <input class="form-input" id="contact-name-2" type="text" name="lname"
                                                required placeholder="Last Name">
                                        </div>
                                        <div class="col-lg-6 col-sm-12 form-wrap">
                                            <input class="form-input" id="contact-email-2" type="email" name="email"
                                                required placeholder="Email Address">
                                        </div>
                                        <div class="col-lg-6 col-sm-12 form-wrap">
                                            <input class="form-input schedule_date" id="js_move_in_date" type="date"
                                                placeholder="Schedule Date" name="move_in_date" required>

                                        </div>

                                        <div class="col-lg-6 col-sm-12 form-wrap">
                                            <input class="form-input" type="number" placeholder="Property Type"
                                                name="property_type" required>

                                        </div>
                                        <div class="col-lg-6 col-sm-12 form-wrap">
                                            <input class="form-input" type="number" placeholder="Budget" name="budget"
                                                required>

                                        </div>

                                        <div class="col-12 form-wrap">
                                            <input class="form-input" id="contact-phone-2" type="number" name="mobile"
                                                required placeholder="Phone Number">
                                        </div>
                                        <div class="col-lg-6 col-sm-12 form-wrap">
                                            <select name="property_type" class="form-input transparent" required>
                                                <option value="" selected="selected">--Select Property Type--
                                                </option>
                                                <option value="low">Studio Apartment</option>
                                                <option value="medium">1 Bedroom Apartment</option>
                                                <option value="high">2 Bedrooms Apartment</option>
                                                <option value="3-bedrooms-apartment">3 Bedrooms Apartment</option>
                                                <option value="4-bedrooms-apartment">4 Bedrooms Apartment</option>
                                                <option value="penthouse">Penthouse</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-sm-12 form-wrap">
                                            <select name="role" class="form-input transparent" required>
                                                <option value="" selected="selected">--I am --</option>
                                                <option value="Agent">Real Estate Agent</option>
                                                <option value="Inventor">Inventor</option>
                                                <option value="Buyer">Buyer</option>
                                                <option value="Seller">Seller</option>
                                            </select>
                                        </div>
                                        <div class="col-12 form-wrap">
                                            <textarea name="message" rows="1" class="form-input" placeholder="Write your message"></textarea>
                                        </div>

                                    </div>
                                    <div class="form-button">
                                        <button class="button button-jerry button-primary mt-5  "
                                            type="submit">Submit<span class="button-jerry-line"></span><span
                                                class="button-jerry-line"></span><span
                                                class="button-jerry-line"></span><span class="button-jerry-line"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layer-wrap layer-3">
                <div class="layer" data-depth="0.4"><img
                        src="{{ asset('assets/front_assets/img/building-sketch3.png') }}" alt=""
                        width="1047" height="531" />
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
<script>
    pannellum.viewer('panorama', {
        "type": "equirectangular",
        "compass": true,
        "panorama": "assets/img/banners/empire-estate/studio-360.jpg",
        "preview": "assets/img/banners/empire-estate/studio.jpg",
    });
    pannellum.viewer('1bhk_panorama', {
        "type": "equirectangular",
        "compass": true,
        "panorama": "assets/img/banners/empire-estate/1-bhk-360.jpg",
        "preview": "assets/img/banners/empire-estate/1-bhk.jpg",
    });
</script>
@endpush
