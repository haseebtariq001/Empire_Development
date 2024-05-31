@extends('layouts.project-flows-layout')
@section('content')
    <span id="splash-overlay" class="splash"></span>
    <span id="welcome" class="z-depth-4"></span>
    <main class="valign-wrapper bg-sketch-img">

        <span class="container grey-text text-lighten-1 main-banner" style="padding-left: 70px">
            <p class="flow-text">Welcome to</p>
            <h1 class="title grey-text text-lighten-3">Empire Estates</h1>

            <blockquote class="flow-text">Luxury Properties in Dubai by Empire Developments</blockquote>

            <div class="center-align">
                <a class="btn-gradient-gold btn-large" href="{{ route('empire.system.menu') }}">Let's Go</a>
            </div>
        </span>
        <img src="{{ asset('images/building-sketch.png') }}" width="694" height="539" class="sketch-img">
    </main>
@endsection
