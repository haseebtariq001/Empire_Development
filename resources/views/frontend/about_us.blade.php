@extends('frontend.layouts.app')

@section('meta')
    <title>About Empire Development</title>
@endsection

@section('content')

    <section class="bg-dark dark-section mt-5 pt-5">
        <div class="section-header text-center">
            <span class="font-cursive text-light display-6">Welcome to</span>
            <img src="{{ asset('assets/front_assets/img/logo-white-lg.png') }}" alt="" class="img-fluid w-25">
            <h2 class="gradient-gold">Luxurious Living Timeless Legacies, Elevating Your Lifestyle</h2>
            <h3 class="text-light font-cursive"></h3>
            <p class="text-light">
                Embark on a journey with Empire Development, a beacon of innovation and luxury in the realm of real estate.
                Renowned for our unwavering commitment to excellence, we redefine the art of living through unparalleled
                craftsmanship, cutting-edge design, and a customer-centric approach that makes your dreams our top priority.
            </p>
        </div>

        @component('frontend.components.gradian-section')
            @component('frontend.components.col-2')
                <div class="col-md-6">
                    <h2>Our Story:<br> <span class="text-gold">Redefining Luxury Living</span></h2>
                    <p>At Empire Development, we believe in creating more than just living spaces; we craft experiences that
                        transcend the ordinary. With a distinguished portfolio of successful projects, our name has become
                        synonymous with redefining luxury living. Our team brings together a wealth of expertise, seamlessly
                        blending innovation, opulence, and a relentless pursuit of perfection.</p>

                </div>
                <div class="col-md-1">
                    <div class="line"></div>
                </div>
                <div class="col-md-6 push-down">
                    <h2>Beyond Aesthetics: <span class="text-gold">Enriching Your Living Experience</span></h2>
                    <p>Empire Residences, our hallmark development, is more than a place to reside—it's a sanctuary of indulgence.
                        Immerse yourself in the tranquility of lush gardens, rejuvenate your senses at our spa, or maintain peak
                        physical condition at our state-of-the-art fitness center. The pinnacle of relaxation awaits you by our
                        stunning rooftop infinity pool, providing breathtaking views of Dubai's iconic skyline.</p>

                </div>
            @endcomponent
        @endcomponent


    </section>
    <section class="showcase-lg">
        <div class="container">
            <div class="section-header">
                <h2 class="gradient-gold">Our Values: Pillars of Excellence
                </h2>
            </div>

            @component('frontend.components.grid-icon')
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-4 col-md-5">
                            <div class="icon">
                                <img src="{{ asset('assets/front_assets/img/icon-1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-8 col-md-7">
                            <h3>Commitment to Excellence</h3>
                            <p>
                                We approach every project with an unwavering dedication to excellence. From conceptualization to
                                completion, meticulous attention to detail ensures that each development showcases the highest
                                standards of craftsmanship and architectural brilliance.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 col-md-5">
                            <div class="icon">
                                <img src="{{ asset('assets/front_assets/img/icon-2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-8 col-md-7">
                            <h3>Unparalleled Luxury and Innovation</h3>
                            <p>
                                Standing at the forefront of luxury real estate, Empire Development creates living spaces that
                                epitomize opulence, sophistication, and style. Embracing innovation and leveraging cutting-edge
                                technology, we ensure your space offers the utmost in comfort.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-4 col-md-5">
                            <div class="icon">
                                <img src="{{ asset('assets/front_assets/img/icon-3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-8 col-md-7">
                            <h3>Customer-Centric Approach</h3>
                            <p>
                                We understand that investing in property is a deeply personal decision. Empire Development
                                places immense value on building strong relationships with our clients, tailoring solutions that
                                go beyond expectations.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 col-md-5">
                            <div class="icon">
                                <img src="{{ asset('assets/front_assets/img/icon-5.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-8 col-md-7">
                            <h3>Transparency</h3>
                            <p>
                                Trust is the bedrock of our relationships. Our commitment to transparency ensures that clients
                                and stakeholders have access to clear, honest, and timely information. Open communication
                                fosters trust and accountability.

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
                    <h2>Empire Development<span class="text-gradient-gold">&nbsp;&nbsp;&nbsp;_______________</span></h2>
                    <h3>Building Legacies,<br> Creating Experiences</h3>
                    <p>
                        Empire Development goes beyond constructing buildings; we build legacies and curate experiences that
                        last a lifetime. Explore our exceptional portfolio and discover how we can turn your dreams of
                        unparalleled luxury living into a reality.
                    </p>
                    <p>Welcome to Empire Development—where luxury meets legacy.</p>


                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/front_assets/img/10.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>



    </section>
@endsection
