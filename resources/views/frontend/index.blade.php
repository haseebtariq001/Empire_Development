@extends('frontend.layouts.app')

@section('meta')
    <title>Empire Development Where Luxury Meets Unparalleled Value</title>
@endsection

@section('content')
    @component('frontend.components.hero')
        <video class="lozad" data-poster="{{ asset('assets/front_assets/videos/home_page_video_cmp.jpg') }}" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source data-src="{{ asset('assets/front_assets/videos/home_page_cmp.mp4') }}" type="video/mp4">
        </video>
        <div class="container"></div>
    @endcomponent

    @component('frontend.components.showcase')
    @endcomponent

    @component('frontend.components.gradian-section')
    @endcomponent


    <section class="bg-dark text-center dark-section">
        <div class="container">

            @component('frontend.components.video')
                <source data-src="{{ asset('assets/front_assets/videos/home_intro_cmp.mp4') }}" type="video/mp4" >
            @endcomponent

            <div class="section-header">
                <img data-src="{{ asset('assets/front_assets/img/logo-white-lg.png') }}" alt="" class="lozad img-fluid">
                <h2 class="gradient-gold">Where Uniqueness Redefines</h2>
                <h3 class="text-light font-cursive">Luxurious Living</h3>
                <p class="text-light">
                    Immerse yourself in the epitome of opulence with our luxurious living spaces. Each residence is a
                    testament to exquisite craftsmanship and meticulous attention to detail. From sprawling penthouses with
                    panoramic views to lavish estates nestled in serene landscapes, we redefine what it means to live in
                    luxury.
                </p>
            </div>

            @component('frontend.components.grid-section')
            @endcomponent

            <div class="section-header mt-5">
                <h2 class="gradient-gold">Project Recently Lanched</h2>
            </div>
        </div>


    </section>

    <section class="gradian-section gradian-section-img">
        <div class="container">
            @component('frontend.components.col-2')
                <div class="col-md-6">
                    <h2>Elevate Your Lifestyle<br> To <span class="text-gold">Unprecedented Heights</span></h2>
                    <p>Embark on a journey of luxury and refinement as you elevate your lifestyle to unparalleled heights at
                        Empire Developments. Our commitment to excellence ensures an extraordinary living experience, where
                        opulence meets innovation. Welcome to a realm where every moment, every detail, and every space
                        transcends the ordinary, offering a lifestyle beyond compare.</p>
                    <a href="#" class="btn-gradient-gold">SCHEDULE A TOUR</a>
                </div>
                <div class="col-md-1">
                    <div class="line"></div>
                </div>
                <div class="col-md-6 push-down">
                    <h2>Meticulously <br /> <span class="text-gold">Crafted Living</span></h2>
                    <p>Discover a world where every detail is a work of art and every corner is a testament to precision. At
                        Empire Developments, we redefine living with spaces that are meticulously crafted to offer an
                        unparalleled experience of sophistication and comfort. Welcome to a life where every aspect of your home
                        reflects the dedication to craftsmanship and the pursuit of perfection.</p>
                    <a href="#" class="btn-gradient-gold">LEARN MORE</a>
                </div>
            @endcomponent
            <img data-src="{{ asset('assets/front_assets/img/grid-bg-logo.png') }}" alt="Picture" class="lozad grid-bg-img">
        </div>

    </section>

    <section class="swiper-section-overlay">
        <h2 class="text-center text-light">EMPIRE RESIDENCE</h2>
        @component('frontend.components.swiper')
        @endcomponent
    </section>

    <section class="bg-dark text-light text-center dark-lg-section">

        <div class="container">
            <div class="section-header">
                <h2 class="gradient-gold">Projects Successfully Delivered</h2>
                <p>
                    Experience the assurance of a proven track record at Empire Developments. Our commitment to excellence
                    is reflected in a portfolio of successfully delivered projects. Each one stands as a testament to our
                    dedication, quality craftsmanship, and the fulfillment of our promises. Explore our legacy of
                    achievements, where dreams are turned into reality with precision and expertise.
                </p>
            </div>

            <div class="row">
                <div class="col-md-6 project-card">
                    <h2>WHERE LUXURY MEETS ELEGANCE</h2>
                    <p>
                        Experience the perfect fusion of comfort and style as you step into your luxurious living space at
                        Empire
                        Residence. Our apartments are thoughtfully designed to accommodate your every need, ensuring that
                        every moment spent here is a delightful experience. Unwind in spacious living areas that invite
                        relaxation
                        and tranquility. Whether you prefer cozy evenings by the fireplace or enjoying the scenic views from
                        your
                        private balcony, our apartments provide the perfect backdrop for your lifestyle.
                    </p>
                    <a href="{{ route('plazzo.residence') }}" class="btn-gradient-gold">VIEW PROJECT</a>
                    <h3 class="text-end">PLAZZO RESIDENCE</h3>
                    <img data-src="{{ asset('assets/front_assets/img/9.png') }}" alt="" class="lozad img-fluid">
                </div>
                <div class="col-md-6 project-card">
                    <h3 class="text-end">PLAZZO HEIGHTS</h3>
                    <img data-src="{{ asset('assets/front_assets/img/plazzo.png') }}" alt="" class="lozad img-fluid">
                    <h2>A VISIONARY MASTERPIECE</h2>
                    <p>
                        Nestled in the prestigious Jumeirah Village Triangle, this visionary masterpiece is set to redefine
                        luxurious living. Immaculately designed to offer the utmost in comfort and style, this remarkable
                        residential development is more than just a place to call home; it's a statement of sophistication
                        and
                        modern living. As you approach this prestigious address, you'll be greeted by architectural
                        excellence that leaves an indelible mark. The attention to detail in every facet of this development
                        is
                        evident, from the stunning facade to the thoughtfully landscaped surroundings.
                    </p>
                    <a href="{{ route ('plazzo.heights') }}" class="btn-gradient-gold">VIEW PROJECT</a>
                </div>
            </div>
        </div>
    </section>

    <section class="showcase-lg">
        <img data-src="{{ asset('assets/front_assets/img/grid-bg-logo_.png') }}" alt="" class="lozad showcase-bg-img">
        <div class="overlay">
            <div class="project-handover">
                <h3>PROJECT<br>
                    HANDING<br>
                    OVER IN<br>
                </h3>
                <span class="text-gold days-num">30</span>
                <span class="days-day">Days</span>
            </div>

            <div class="overlay-header">
                <span class="font-cursive">The</span>
                <img data-src="{{ asset('assets/front_assets/img/logo-white-lg.png') }}" alt="" class="lozad img-fluid">
                <span class="font-cursive">Advantage</span>
                <p>
                    Empire Development doesn't just create residences; we add value to your living experience. We strive to
                    exceed your expectations by delivering excellence in
                    every aspect of our developments. Our commitment to quality ensures that your investment in an Empire
                    Development property is not just a symbol of luxury but a
                    testament to a wise and rewarding choice.
                </p>
            </div>
            @component('frontend.components.grid-icon')
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-4 col-md-5">
                            <div class="icon">
                                <img data-src="{{ asset('assets/front_assets/img/icon-1.png') }}" alt="" class="lozad">
                            </div>
                        </div>
                        <div class="col-8 col-md-7">
                            <h3>HIGH-YIELD RETURNS</h3>
                            <p>
                                Empire Development properties offer lucrative
                                investment returns, with a history of outperforming
                                the market and delivering substantial capital
                                appreciation and rental income potential.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 col-md-5">
                            <div class="icon">
                                <img data-src="{{ asset('assets/front_assets/img/icon-2.png') }}" alt="" class="lozad">
                            </div>
                        </div>
                        <div class="col-8 col-md-7">
                            <h3>UNMATCHED LUXURY AND STYLE</h3>
                            <p>
                                Epitomize luxury living, featuring exquisite designs,
                                premium finishes, and opulent amenities. Invest in
                                properties that reflect your refined taste and elevate
                                your lifestyle to new heights.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 col-md-5">
                            <div class="icon">
                                <img data-src="{{ asset('assets/front_assets/img/icon-4.png') }}" alt="" class="lozad">
                            </div>
                        </div>
                        <div class="col-8 col-md-7">
                            <h3>PROVEN TRACK RECORD</h3>
                            <p>
                                Empire Development has a proven track record of
                                successful projects, earning the trust and confidence
                                of investors. Join a winning team and invest with a
                                developer known for delivering on promises.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-4 col-md-5">
                            <div class="icon">
                                <img data-src="{{ asset('assets/front_assets/img/icon-3.png') }}" alt="" class="lozad">
                            </div>
                        </div>
                        <div class="col-8 col-md-7">
                            <h3>ICONIC LANDMARKS</h3>
                            <p>
                                Iconic landmarks that captivate attention and
                                become prestigious symbols of architectural
                                brilliance. Owning an Empire property means being
                                part of a legacy that leaves a lasting impression
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 col-md-5">
                            <div class="icon">
                                <img data-src="{{ asset('assets/front_assets/img/icon-5.png') }}" alt="" class="lozad">
                            </div>
                        </div>
                        <div class="col-8 col-md-7">
                            <h3>STRONG RENTAL DEMAND</h3>
                            <p>
                                Empire properties are in high demand among
                                discerning tenants seeking luxury living experiences.
                                Benefit from a steady stream of high-quality tenants
                                and enjoy consistent rental income
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 col-md-5">
                            <div class="icon">
                                <img data-src="{{ asset('assets/front_assets/img/icon-6.png') }}" alt="" class="lozad">
                            </div>
                        </div>
                        <div class="col-8 col-md-7">
                            <h3>FUTURE GROWTH POTENTIAL</h3>
                            <p>
                                Benefit from Empire Development's vision for growth
                                and expansion. Invest in a developer with a strong
                                pipeline of upcoming projects, ensuring long-term
                                appreciation and potential for portfolio diversification
                            </p>
                        </div>
                    </div>
                </div>
            @endcomponent


        </div>

    </section>


    <section class="bg-dark gradian-section grid-text-img py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>A Digital Experience <span class="text-gradient-gold">&nbsp;&nbsp;&nbsp;_______________</span></h2>
                    <h3>MANAGE YOUR<br>PROPERTY 24/7</h3>
                    <p>Empower your property ownership experience with our seamless and efficient 24/7 property management
                        services. At Empire Estate, we understand the importance of convenience and peace of mind. Our
                        dedicated team ensures that your property is managed around the clock, providing you with the
                        assurance and support you deserve. Welcome to a new era of property management tailored to your
                        lifestyle.
                    </p>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li>
                                <i class="gradient-gold"><img data-src="{{ asset('assets/front_assets/img/voice.png') }}" alt="" class="lozad"></i>
                                <span>Voice service request</span>
                            </li>
                            <li>
                                <i class="gradient-gold"><img data-src="{{ asset('assets/front_assets/img/bell.png') }}" alt="" class="lozad"></i>
                                <span>Service request status</span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <i class="gradient-gold"><img data-src="{{ asset('assets/front_assets/img/file.png') }}" alt="" class="lozad"></i>
                                <span>Digital handover process</span>
                            </li>
                            <li>
                                <i class="gradient-gold"><img data-src="{{ asset('assets/front_assets/img/card.png') }}" alt="" class="lozad"></i>
                                <span>Online payment</span>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-6">
                    <img data-src="{{ asset('assets/front_assets/img/10.png') }}" alt="" class="lozad img-fluid">
                </div>
            </div>
        </div>



    </section>
@endsection
