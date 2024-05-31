@extends('frontend.layouts.app')

@section('meta')
    <title>Get in Touch with Empire Development</title>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/front_assets/css/project-details.css') }}">
@endpush

@section('content')
    <section class="section novi-background bg-cover bg-white section-inset-1 parallax-scene-js mt-5 pt-5" id="contacts">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 wow fadeInLeft" data-aos="fade-left" data-aos-once="false">
                    <h1 class="mt-5">Contact US</h1>
                    <ul class="mt-5 mb-3 pt-5">

                        <h4>Address</h4>
                        <h6 class="d-flex align-items-center">Sales & Experience Center - <small class="ms-2"> (Business
                                Bay) </small></h6>
                        <li><a target="blank" href="https://maps.app.goo.gl/gpNiV7P6feLqrrQz5?g_st=iwb">
                                Ground Floor, Maskan Ballroom,<br>
                                Park Regis Hotel, Business Bay,<br>
                                Dubai, UAE.<br>
                            </a>
                        </li>
                        <br>

                        <h6 class="d-flex align-items-center">Sales Center - <small class="ms-2"> (Jumeirah Village
                                Circle) </small></h6>
                        <li><a target="blank" href="https://maps.app.goo.gl/jSA15MV43wkeCRtz6?g_st=ic">
                                Showroom 1, Empire Residence,<br>
                                District 17, Jumeirah Village Circle,<br>
                                Dubai, UAE.<br>
                            </a>
                        </li>

                        <br>
                        <h6 class="d-flex align-items-center">Sales & Experience Center (Opening Soon) - <small
                                class="ms-2"> (Sheikh Zayed Road) </small></h6>
                        <li><a target="blank" href="https://maps.app.goo.gl/hCgbSEwD5L3vSebk8?g_st=iwb">
                                Suite No 208, 2nd Floor,<br>
                                Emaar Business Park, Building No 4,<br>
                                Dubai, UAE.<br>
                            </a>
                        </li>
                        <br>
                        <li>Call Us: <span>+971 55 2896500</span></li>
                        <li>Email Us: <span>info@empiredevelopment.com</span></li>
                    </ul>
                    <h4>Visit Us</h4>
                    <p class="mb-3">We invite you to experience the essence of Empire Development firsthand. Schedule a
                        visit to our Prime Business Centre location, where you can explore our vision, witness our
                        commitment to excellence, and discuss how we can tailor our offerings to meet your unique
                        aspirations.</p>

                    <h4>Follow Us</h4>
                    <p>Stay updated on our latest projects, announcements, and behind-the-scenes glimpses. Connect with us
                        on social media to be part of the Empire Development community.</p>
                    <ul class="mb-3">
                        <li>Instagram: <span><a
                                    href="https://www.instagram.com/EmpireDevelopment/">@EmpireDevelopment</a></span></li>
                        <li>Facebook: <span><a
                                    href="https://www.facebook.com/EmpireDevelopment/">EmpireDevelopment</a></span></li>
                        <li>LinkedIn: <span><a
                                    href="https://www.linkedin.com/company/empire-development/">/company/empire-development:</a></span>
                        </li>
                    </ul>

                    <p>Empire Development is not just a real estate company; it's a commitment to crafting timeless
                        legacies. Contact us today, and let's create something extraordinary together.</p>


                </div>
                <div class="col-md-8 col-lg-6">
                    <div class="inset-xl-left-35 section-sm">
                        <h3 class="wow fadeInRight" data-aos="fade-right" data-aos-once="false">Get in Touch with <br>Empire
                            Development</h3>
                        {{-- <h6 class="title-style-1 wow fadeInRight" data-aos="fade-right" data-aos-once="false"
                            data-aos-delay="400">Let’s work together!</h6> --}}
                        <p>Are you ready to embark on a journey of unparalleled luxury and innovation? Whether you're
                            interested in exploring our exceptional portfolio, discussing investment opportunities, or
                            seeking expert advice, the Empire Development team is here for you.</p>
                        <div class="form-style-1 context-dark wow blurIn" data-aos="fade-right" data-aos-once="false"
                            data-aos-delay="500">
                            <!-- RD Mailform-->
                            <form action="#" method="POST" class="text-left" data-aos="fade-up" data-aos-delay="200"
                                data-parsley-validate enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="FLdUeWWmh0n4Ltds2k17UHWKOsp1B3kghzVtQbHl">
                                <div class="row mt-0">

                                    <div class="col-lg-6 col-sm-12 form-wrap">
                                        <input class="form-input" id="contact-name-2" type="text" name="fname" required
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-lg-6 col-sm-12 form-wrap">
                                        <input class="form-input" id="contact-name-2" type="text" name="lname" required
                                            placeholder="Last Name">
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
                                    <button class="button button-jerry button-primary mt-5  " type="submit">Submit<span
                                            class="button-jerry-line"></span><span class="button-jerry-line"></span><span
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
            <div class="layer" data-depth="0.4"><img src="{{ asset('assets/front_assets/img/building-sketch3.png') }}"
                    alt="" width="1047" height="531" />
            </div>
        </div>
    </section>
@endsection
