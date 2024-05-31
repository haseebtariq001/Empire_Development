@extends('frontend.layouts.app')

@section('meta')
    <title>Empire Developments - Projects</title>
@endsection

@section('content')

    @component('frontend.components.banner')
    <div class="carousel-item active">
        <img
            srcset="{{ asset('assets/front_assets/img/banner-mb.jpg') }} 430w, {{ asset('assets/front_assets/img/banner.jpg') }} 1980w"
            sizes="(max-width: 480px) 100vw, (max-width: 1980px) 80vw, 100vw"
            alt="Description of the image"
            src="{{ asset('assets/front_assets/img/banner-mb.jpg') }}"
            class="d-block w-100"
        >
        <div class="background-overlay"></div>
        <div class="carousel-caption">
            <h1 class="font-cursive display-2">Projects</h1>
            <img data-src="{{ asset('assets/front_assets/img/banner-logo-white.png') }}" alt="" class="w-25 lozad">

            <p class="font-optima-nova-md">Where <span class="font-cursive">Luxury</span> Meets Unparalleled Value</p>
        </div>
    </div>
    @endcomponent

    <section class="gradian-section pt-5 pb-5 shadow-sm">
        <div class="container">
            <div class="section-header">
                <h2 class="gradient-gold">Projects Successfully Delivered</h2>
                <p>
                    Experience excellence in real estate development with our proven track record of successfully delivered projects. Trust us to transform your vision into distinctive, thriving spaces.
                </p>
            </div>
            <div class="row">
                @php
                    $projects = [
                        [
                            'project_slug'          => 'empire.estates',
                            'project_img'           =>  asset('assets/front_assets/img/projects/empire_estates/thumbnail.jpg'),
                            'project_img_alt'       => 'Empire Estates',
                            'project_title'         => 'Empire Estates',
                            'project_desc'          => 'Empire Estates is a 9 floor building offers a range of luxurious residence designed t...',
                            'project_comming_soon'  => 0
                        ],
                        [
                            'project_slug'          => 'plazzo.heights',
                            'project_img'           =>  asset('assets/front_assets/img/projects/plazzo-height-buildings.jpg'),
                            'project_img_alt'       => 'Plazzo Heights',
                            'project_title'         => 'Plazzo Heights',
                            'project_desc'          => 'Plazzo Residence is immaculately designed and offers the utmost comfort and luxury.',
                            'project_comming_soon'  => 0
                        ],
                        [
                            'project_slug'          => 'plazzo.residence',
                            'project_img'           =>  asset('assets/front_assets/img/projects/plazzo-eesidence.jpg'),
                            'project_img_alt'       => 'Plazzo Residence',
                            'project_title'         => 'Plazzo Residence',
                            'project_desc'          => 'Impressively designed, Plazzo Residence, at Jumeirah Village Triangle (JVT) in Dubai.',
                            'project_comming_soon'  => 0
                        ],
                        [
                            'project_slug'          => 'empire.residence',
                            'project_img'           =>  asset('assets/front_assets/img/projects/empire-residence.jpg'),
                            'project_img_alt'       => 'Empire Residence',
                            'project_title'         => 'Empire Residence',
                            'project_desc'          => 'Empire Residence offers extraordinary living standard with unique layouts.',
                            'project_comming_soon'  => 0
                        ]
                    ];
                    $projects = json_decode(json_encode($projects), false);

                @endphp

                @foreach ($projects as $project)

                    <!--ADD CLASSES HERE d-flex align-items-stretch-->
                    <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                        <div class="card">
                        <img data-src="{{ $project->project_img }}" class="card-img-top lozad" alt="{{ $project->project_img_alt }}">
                        <div class="d-flex flex-column p-3 bg-dark">
                            <h5 class="card-title text-gradient-gold mt-3">
                                {{ $project->project_title }}
                                @if($project->project_comming_soon == 1)
                                    <span class="font-cursive">Comming soon</span>
                                @endif
                            </h5>
                            <p class="card-text mb-4">{{ $project->project_desc }}</p>
                            <a href="{{ route($project->project_slug) }}" class="btn-gradient-gold w-100 text-center">Read More</a>
                        </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
        </section>

@endsection
