@extends('frontend.layouts.project')

@section('meta')
    <title>Welcome to Empire Estate, an exquisite development by Empire Developments</title>
@endsection

@section('content')
    <div>
        <div class="position-relative mt-5 pt-5">
            <section class="section novi-background bg-cover section-horace mt-2">
                <div class="section-horace-left bg-gray-800">
                    <div class="section-horace-left-content text-center">
                        <article class="project-classic project-classic-2">
                            <div class="project-classic-title" data-aos="fade-up" data-aos-delay="300" data-aos-once="false">
                                EMPIRE<br>ESTATES</div>
                            <h6 class="project-classic-text" data-aos="fade-up" data-aos-delay="400" data-aos-once="false">
                                Harmony of Opulent Living</h6>
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
                                asset('assets/front_assets/img/projects/empire_estates/slider_ext_01.jpg'),
                                asset('assets/front_assets/img/projects/empire_estates/balcony_01.jpg'),
                                asset('assets/front_assets/img/projects/empire_estates/bedroom.jpg')
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
                                                Where Luxury Meets Location
                                            </a>
                                        </h6>
                                    </div>
                                    <div class="box-icon-classic-text">
                                        Immerse yourself in a world of unparalleled comfort and convenience at Empire
                                        Estates.
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-4 col-md-12 col-xl-11 wow fadeInLeft" data-wow-delay=".05s">
                                <article class="box-icon-classic" data-aos="fade-right" data-aos-once="false"
                                    data-aos-delay="300">
                                    <div class="box-icon-classic-header">
                                        <div class="box-icon-classic-icon novi-icon fa fa-credit-card"></div>
                                        <h6 class="box-icon-classic-title">
                                            <a href="#">Claim Your Dream at Empire Estates</a>
                                        </h6>
                                    </div>
                                    <div class="box-icon-classic-text">
                                        Easy Payment Plans Available! Elevate your lifestyle at Empire Estates without
                                        compromising your financial peace.
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-4 col-md-12 col-xl-11 wow fadeInLeft" data-wow-delay=".1s">
                                <article class="box-icon-classic" data-aos="fade-right" data-aos-once="false"
                                    data-aos-delay="400">
                                    <div class="box-icon-classic-header">
                                        <div class="box-icon-classic-icon novi-icon fas fa-sink"></div>
                                        <h6 class="box-icon-classic-title">
                                            <a href="#"> Epitome of Exquisite Living</a>
                                        </h6>
                                    </div>
                                    <div class="box-icon-classic-text">
                                        Unrivaled elegance, meticulous design, redefining sophisticated living. Immerse in
                                        splendor, a residence that sets a new standard for richness.
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6">
                        <div class="inset-xl-left-35">
                            <h3 class="wow fadeInRight" data-aos="fade-down" data-aos-once="false">Schedule A Tour <br>for
                                Empire Estates</h3>
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
                        data-src="{{ asset('assets/front_assets/img/building-sketch.png') }}" alt=""
                        width="694" height="539" class="lozad"/>
                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover section-xl bg-gray-800 decoration-1" data-aos="fade-down"
            data-aos-once="false" data-aos-delay="200">
            <div class="tabs-custom container" id="tabs-1" data-view-triggerable="true">
                <div class="row row-30 row-md-40 justify-content-lg-between">
                    <div class="col-lg-5">
                        <h6 class="title-style-1 wow fadeInLeft" data-aos="fade-left" data-aos-once="false"
                            data-aos-delay="300">Empire Estates</h6>
                        <h1 class="wow fadeInLeft" data-aos="fade-left" data-aos-once="false" data-aos-delay="400">About
                            <br class="d-none d-lg-block">the <span class="font-weight-light">Project</span></h1>
                        <!-- Tab panes-->
                        <div class="tab-content wow fadeInLeft" data-aos="fade-left" data-aos-once="false"
                            data-aos-delay="500">
                            <div class="tab-pane fade show active" id="tabs-1-1">
                                <h3 class="title-style-1">Indulge in Unparalleled Refinement</h3>
                                <p>Ascend to the heights of sophistication and discover a world where luxury is redefined.
                                    In a realm of opulent elegance, indulge in the ultimate experience..</p>

                            </div>
                            <div class="tab-pane fade" id="tabs-1-2">
                                <h3 class="title-style-1">Indulge in the Epitome of Sophistication</h3>
                                <p>As one of the city's most luxurious addresses, Empire Estates stands out with its modern
                                    aesthetic philosophy and distinctive architecture. Elevate your lifestyle with an
                                    incredible clubhouse that ensures your days are always exciting and never dull.</p>

                            </div>
                            <div class="tab-pane fade" id="tabs-1-3">
                                <h3 class="title-style-1">Experience the Epitome of Exquisite Living</h3>
                                <p>Empire Estates is a realm of unrivaled elegance and sophistication, meticulously crafted
                                    to redefine the essence of sophisticated living. Immerse yourself in the splendor of a
                                    home that exceeds expectations, setting a new standard for richness.</p>
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
                                        data-src="{{ asset('assets/front_assets/img/projects/empire_estates/ext_dark.jpg') }}"
                                        alt="" width="531" height="327" class="lozad"/>
                                </div>
                                <div class="project-creative-figure" data-view-trigger="#tabs-1-2"><img
                                        data-src="{{ asset('assets/front_assets/img/projects/empire_estates/podium.jpg') }}"
                                        alt="" width="531" height="327" class="lozad"/>
                                </div>
                                <div class="project-creative-figure" data-view-trigger="#tabs-1-3"><img
                                        data-src="{{ asset('assets/front_assets/img/projects/empire_estates/gate.jpg') }}"
                                        alt="" width="531" height="327" class="lozad"/>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover section-lg section-inset-3 bg-white parallax-scene-js">
            <div class="container">
                <div class="row row-50 justify-content-md-between">
                    <div class="col-md-6">
                        <h3 class="wow fadeInRight" data-aos="fade-right" data-aos-once="false">Master Plan<br>Of
                            Luxurious Apartment</h3>
                        <h6 class="title-style-1 wow fadeInRight" data-aos="fade-right" data-aos-once="false"
                            data-aos-delay="400">We deliver the best solutions
                        </h6>
                        <article class="video-classic wow blurIn" data-aos="fade-right" data-aos-once="false"
                            data-aos-delay="500">
                            <div class="video-classic-figure">
                                <img data-src="{{ asset('assets/front_assets/img/projects/empire_estates/ext_light.jpg') }}"
                                    alt="" width="533" height="362" class="lozad"/>
                            </div>
                            <a class="video-classic-link" data-lightgallery="item" href="https://youtu.be/c1F4HMses_o">
                                <span class="icon mdi mdi-play"></span>
                            </a>
                        </article>


                    </div>
                    <div class="col-md-4 col-xl-3 inset-xl-top-70">
                        <div class="row row-30 row-md-50 justify-content-center justify-content-md-start">
                            <div class="col-6 col-sm-4 col-md-12 col-lg-11 wow fadeInRight">
                                <article class="counter-classic" data-aos="fade-left" data-aos-once="false"
                                    data-aos-delay="300">
                                    <div class="counter-classic-header">
                                        <div class="heading-1 counter-classic-number"><span class="counter">154</span>
                                        </div>
                                        <h6 class="counter-classic-title">Studio Apartments</h6>
                                    </div>
                                    <div class="counter-classic-text">Designing a studio apartment with a kitchen,
                                        bathroom, living space, bedroom, and balcony for a seamless and functional
                                        living experience.</div>
                                </article>
                            </div>
                            <div class="col-6 col-sm-4 col-md-12 col-lg-11 wow fadeInRight" data-wow-delay=".05s">
                                <article class="counter-classic" data-aos="fade-left" data-aos-once="false"
                                    data-aos-delay="400">
                                    <div class="counter-classic-header">
                                        <div class="heading-1 counter-classic-number"><span class="counter">126</span>
                                        </div>
                                        <h6 class="counter-classic-title">1 Bedroom Apartments</h6>
                                    </div>
                                    <div class="counter-classic-text">Presenting elegant 1 BHK apartments with a total
                                        title deed area of 898.42 sqft, fully fitted kitchens, luxurious bedrooms.</div>
                                </article>
                            </div>
                            <div class="col-6 col-sm-4 col-md-12 col-lg-11 wow fadeInRight" data-wow-delay=".1s">
                                <article class="counter-classic" data-aos="fade-left" data-aos-once="false"
                                    data-aos-delay="500">
                                    <div class="counter-classic-header">
                                        <div class="heading-1 counter-classic-number"><span class="counter">45</span>
                                        </div>
                                        <h6 class="counter-classic-title">2 Bedroom Apartments</h6>
                                    </div>
                                    <div class="counter-classic-text">An expansive living space with a total title deed
                                        area of 2,078.83 sqft, featuring a fully fitted kitchen,</div>
                                </article>
                            </div>
                            <div class="col-xl-12 wow fadeInUp" data-aos="fade-up" data-aos-once="false"
                                data-aos-delay="600"><a class="button button-jerry button-primary"
                                    href="https://empiredevelopments.ae/contact-us">Contact Us<span
                                        class="button-jerry-line"></span><span class="button-jerry-line"></span><span
                                        class="button-jerry-line"></span><span class="button-jerry-line"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layer-wrap layer-2">
                <div class="layer" data-depth="0.4"><img
                        data-src="{{ asset('assets/front_assets/img/building-sketch.png') }}" alt=""
                        width="853" height="574" class="lozad"/>
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
                            data-aos-once="false" data-aos-delay="300">Empire Estates offers a variety of spacious
                            studios, 1 and 2-bedroom apartments, each designed to fit your unique needs and lifestyle.
                            Explore our diverse floor plans and find the perfect space to call home.</p>
                    </div>
                    <div class="caption-classic-decor wow blurIn"></div>
                </div>
                <!-- Owl Carousel-->
                <div class="owl-carousel owl-style-1" data-autoplay="false" data-items="1" data-margin="30"
                    data-xl-margin="90" data-nav="true" data-dots="true" data-mouse-drag="false"
                    data-smart-speed="600">
                    @php
                        $floor_plans = [
                            [
                                'floor_plan_img' => asset('assets/front_assets/img/projects/empire_estates/floor_plans/studio.jpg'),
                                'floor_plan_title' => 'Studio Apartment',
                                'floor_plan_type' => 'Studio',
                                'floor_plan_desc' => 'We have worked on this project for three months to completely extend and redesign the old 2-storey house.',
                                'floor_plan_area' => 'Area: 443.55 sqft',
                            ],
                            [
                                'floor_plan_img' => asset('assets/front_assets/img/projects/empire_estates/floor_plans/1bed.jpg'),
                                'floor_plan_title' => '1 Bedroom Apartment',
                                'floor_plan_type' => 'Floor PLan',
                                'floor_plan_desc' => 'We have worked on this project for three months to completely extend and redesign the old 2-storey house.',
                                'floor_plan_area' => 'Area: 8998.42 sqft',
                            ],
                            [
                                'floor_plan_img' => asset('assets/front_assets/img/projects/empire_estates/floor_plans/1bed_a.jpg'),
                                'floor_plan_title' => '1 Bedroom Apartment',
                                'floor_plan_type' => '1 BHK',
                                'floor_plan_desc' => 'We have worked on this project for three months to completely extend and redesign the old 2-storey house.',
                                'floor_plan_area' => 'Area: 443.55 sqft',
                            ],
                            [
                                'floor_plan_img' => asset('assets/front_assets/img/projects/empire_estates/floor_plans/2bed.jpg'),
                                'floor_plan_title' => '2 Bedroom Apartment',
                                'floor_plan_type' => '2 BHK',
                                'floor_plan_desc' => 'We have worked on this project for three months to completely extend and redesign the old 2-storey house.',
                                'floor_plan_area' => 'Area: 443.55 sqft',
                            ],
                            [
                                'floor_plan_img' => asset('assets/front_assets/img/projects/empire_estates/floor_plans/2bed_a.jpg'),
                                'floor_plan_title' => '2 Bedroom Apartment',
                                'floor_plan_type' => '2 BHK',
                                'floor_plan_desc' => 'We have worked on this project for three months to completely extend and redesign the old 2-storey house.',
                                'floor_plan_area' => 'Area: 443.55 sqft',
                            ],
                            [
                                'floor_plan_img' => asset('assets/front_assets/img/projects/empire_estates/floor_plans/2bed_b.jpg'),
                                'floor_plan_title' => '2 Bedroom Apartment',
                                'floor_plan_type' => '2 BHK',
                                'floor_plan_desc' => 'We have worked on this project for three months to completely extend and redesign the old 2-storey house.',
                                'floor_plan_area' => 'Area: 443.55 sqft',
                            ],
                            [
                                'floor_plan_img' => asset('assets/front_assets/img/projects/empire_estates/floor_plans/2bed_c.jpg'),
                                'floor_plan_title' => '2 Bedroom Apartment',
                                'floor_plan_type' => '2 BHK',
                                'floor_plan_desc' => 'We have worked on this project for three months to completely extend and redesign the old 2-storey house.',
                                'floor_plan_area' => 'Area: 443.55 sqft',
                            ],
                            [
                                'floor_plan_img' => asset('assets/front_assets/img/projects/empire_estates/floor_plans/2bed_d.jpg'),
                                'floor_plan_title' => '2 Bedroom Apartment',
                                'floor_plan_type' => '2 BHK',
                                'floor_plan_desc' => 'We have worked on this project for three months to completely extend and redesign the old 2-storey house.',
                                'floor_plan_area' => 'Area: 443.55 sqft',
                            ],
                            [
                                'floor_plan_img' => asset('assets/front_assets/img/projects/empire_estates/floor_plans/3bed.jpg'),
                                'floor_plan_title' => '3 Bedroom Apartment',
                                'floor_plan_type' => '3 BHK',
                                'floor_plan_desc' => 'We have worked on this project for three months to completely extend and redesign the old 2-storey house.',
                                'floor_plan_area' => 'Area: 443.55 sqft',
                            ],
                            [
                                'floor_plan_img' => asset('assets/front_assets/img/projects/empire_estates/floor_plans/duplex/2bed.jpg'),
                                'floor_plan_title' => '2 Bedroom Duplex Apartment',
                                'floor_plan_type' => '2 BHK',
                                'floor_plan_desc' => 'We have worked on this project for three months to completely extend and redesign the old 2-storey house.',
                                'floor_plan_area' => 'Area: 443.55 sqft',
                            ],
                            [
                                'floor_plan_img' => asset('assets/front_assets/img/projects/empire_estates/floor_plans/duplex/2bed_a.jpg'),
                                'floor_plan_title' => '2 Bedroom Duplex Apartment',
                                'floor_plan_type' => '2 BHK',
                                'floor_plan_desc' => 'We have worked on this project for three months to completely extend and redesign the old 2-storey house.',
                                'floor_plan_area' => 'Area: 443.55 sqft',
                            ],
                            [
                                'floor_plan_img' => asset('assets/front_assets/img/projects/empire_estates/floor_plans/duplex/2bed_b.jpg'),
                                'floor_plan_title' => '2 Bedroom Duplex Apartment',
                                'floor_plan_type' => '2 BHK',
                                'floor_plan_desc' => 'We have worked on this project for three months to completely extend and redesign the old 2-storey house.',
                                'floor_plan_area' => 'Area: 443.55 sqft',
                            ],
                            [
                                'floor_plan_img' => asset('assets/front_assets/img/projects/empire_estates/floor_plans/duplex/2bed_c.jpg'),
                                'floor_plan_title' => '2 Bedroom Duplex Apartment',
                                'floor_plan_type' => '2 BHK',
                                'floor_plan_desc' => 'We have worked on this project for three months to completely extend and redesign the old 2-storey house.',
                                'floor_plan_area' => 'Area: 443.55 sqft',
                            ],
                        ];
                        $floor_plans = json_decode(json_encode($floor_plans), false);
                    @endphp

                    @foreach ($floor_plans as $floor_plan)
                        <article class="project-mary">
                            <div class="project-mary-figure"><img
                                    data-src="{{ $floor_plan->floor_plan_img }}"
                                    alt="" width="775" height="524" class="lozad"/>
                                <div class="project-mary-link-wrap"><a class="project-mary-link mdi mdi-magnify"
                                        data-fancybox="floor-plan-gallery"
                                        href="{{ $floor_plan->floor_plan_img }}"></a>
                                </div>
                            </div>
                            <div class="project-mary-content">
                                <ul class="project-mary-panel">
                                    <li class="project-mary-panel-item">
                                        <time class="project-mary-time" datetime="2019-06-19"></time>
                                    </li>
                                    <li class="project-mary-panel-item">
                                        <div class="project-mary-tag">{{ $floor_plan->floor_plan_type }}</div>
                                    </li>
                                </ul>
                                <h3 class="project-mary-title"><a href="#">{{ $floor_plan->floor_plan_title }}</a></h3>
                                <p class="project-mary-text">{{ $floor_plan->floor_plan_desc }}</p>
                            </div>
                        </article>
                    @endforeach



                </div>
            </div>
        </section>
        <section id="services" class="services mb-5">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Immerse Yourself in Luxurious Amenities</h2>
                <p>
                    Empire Estates is more than just a residence; it's a haven of unparalleled comfort and luxury.
                </p>
            </div><!-- End Section Title -->

            <div class="container">


                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><img
                                    data-src="{{ asset('assets/front_assets/img/icons/swim.svg') }}" alt="" class="lozad"></div>
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
                                    data-src="{{ asset('assets/front_assets/img/icons/playground.svg') }}" alt="" class="lozad">
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
                                    data-src="{{ asset('assets/front_assets/img/icons/sheild.svg') }}" alt="" class="lozad">
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
                                    data-src="{{ asset('assets/front_assets/img/icons/garage.svg') }}" alt="" class="lozad">
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
                                    data-src="{{ asset('assets/front_assets/img/icons/gym.svg') }}" alt="" class="lozad"></div>
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
                                    data-src="{{ asset('assets/front_assets/img/icons/sauna.svg') }}" alt="" class="lozad">
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
                                    data-src="{{ asset('assets/front_assets/img/icons/barbecue.svg') }}" alt="" class="lozad">
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
                                    data-src="{{ asset('assets/front_assets/img/icons/fire-alarm.png') }}" alt="" class="lozad">
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
                                    data-src="{{ asset('assets/front_assets/img/icons/kitchen-furniture.png') }}"
                                    alt="" class="lozad">
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
                <h3 class="wow fadeInLeft" data-aos="fade-left" data-aos-once="false">Unveil a Panoramic World</h3>
                <h6 class="title-style-1 wow fadeInRight" data-aos="fade-right" data-aos-once="false"
                    data-aos-delay="400">Witness the breathtaking beauty of your surroundings and discover Empire Estates in a whole new way.</h6>
                <!-- Owl Carousel-->
                <div class="owl-carousel" data-items="1" data-sm-items="1" data-md-items="3" data-xl-items="3"
                    data-margin="5" data-dots="true" data-mouse-drag="false">
                    @php
                        $panorams =  [
                            [
                                'panora_img'=> asset('assets/front_assets/img/projects/empire_estates/balcony_01.jpg'),
                                'panora_src'=> route('empire.estates.360.studio'),
                                'panora_title'=> "Studio Apartment",
                                'panora_txt1'=> "Studio Bedroom 360 view",
                                'panora_txt2'=> "Studio",
                            ],
                            [
                                'panora_img'=> asset('assets/front_assets/img/projects/empire_estates/dining.jpg'),
                                'panora_src'=> route('empire.estates.360.1bed'),
                                'panora_title'=> "1 BHK Apartment",
                                'panora_txt1'=> "1 BHK 360 view",
                                'panora_txt2'=> "1 BHK",
                            ],
                            [
                                'panora_img'=> asset('assets/front_assets/img/projects/empire_estates/bedroom.jpg'),
                                'panora_src'=> route('empire.estates.360.2bed'),
                                'panora_title'=> "2 BHK Apartment",
                                'panora_txt1'=> "2 BHK 360 view",
                                'panora_txt2'=> "2 BHK",
                            ],
                            [
                                'panora_img'=> asset('assets/front_assets/img/projects/empire_estates/bedduplex.jpg'),
                                'panora_src'=> route('empire.estates.360.2dublixbed'),
                                'panora_title'=> "2 BHK Duplex Apartment",
                                'panora_txt1'=> "2 Duplex BHK 360 view",
                                'panora_txt2'=> "2 Duplex BHK",
                            ],
                            [
                                'panora_img'=> asset('assets/front_assets/img/projects/empire_estates/3bed.jpg'),
                                'panora_src'=> route('empire.estates.360.3bed'),
                                'panora_title'=> "3 BHK Apartment",
                                'panora_txt1'=> "3 BHK 360 view",
                                'panora_txt2'=> "3 BHK",
                            ],
                        ];
                        $panorams = json_decode(json_encode($panorams), false);
                    @endphp
                    @foreach ($panorams as $panoram)
                        <article class="team-classic wow fadeInUp"data-aos="fade-up" data-aos-once="false" data-aos-delay="500">
                            <a href="{{ $panoram->panora_src }}">
                                <div class="team-classic-figure">
                                    <img data-src="{{ $panoram->panora_img }}" alt="" class="lozad">
                                </div>
                                <div class="team-classic-body">
                                    <h5 class="team-classic-name"><a href="{{ $panoram->panora_src }}">{{ $panoram->panora_title }}</a></h5>
                                </div>
                                <div class="team-classic-footer">
                                    <div class="team-classic-status">{{ $panoram->panora_txt1 }}</div>
                                    <div class="team-classic-list-panel">

                                        <div class="heading-1 team-classic-placeholder">{{ $panoram->panora_txt2 }}</div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    @endforeach



                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover bg-white section-inset-1 parallax-scene-js" id="contacts">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 d-none d-lg-block wow fadeInLeft" data-aos="fade-left" data-aos-once="false">
                        <img data-src="{{ asset('assets/front_assets/img/contact-banner.png') }}" alt=""
                            width="538" height="694" class="lozad"/>
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <div class="inset-xl-left-35 section-sm">
                            <h3 class="wow fadeInRight" data-aos="fade-right" data-aos-once="false">Get in touch
                                with<br>our team</h3>
                            <h6 class="title-style-1 wow fadeInRight" data-aos="fade-right" data-aos-once="false"
                                data-aos-delay="400">Start your journey towards a life of luxury and convenience with Empire Estates.</h6>
                            <div class="form-style-1 context-dark wow blurIn" data-aos="fade-right" data-aos-once="false"
                                data-aos-delay="500">
                                <!-- RD Mailform-->
                                <form action="leads" method="POST" class="text-left"
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
                        data-src="{{ asset('assets/front_assets/img/building-sketch3.png') }}" alt=""
                        width="1047" height="531" class="lozad"/>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')

@endpush
