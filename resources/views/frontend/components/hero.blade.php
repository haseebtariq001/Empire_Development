@push('styles')
    <style>
    .hero {
        position: relative;
        background-color: black;
        height: 75vh;
        min-height: 100vh;
        width: 100%;
        overflow: hidden;
    }
    .hero:before {
        content: "";
        background: rgba(var(--color-background-rgb), 0.5);
        position: absolute;
        inset: 0;
        z-index: 2;
    }
    .hero .overlay {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: black;
        opacity: 0.3;
        z-index: 1;
    }
    .hero video {
        position: absolute;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: 0;
        -ms-transform: translateX(-50%) translateY(-50%);
        -moz-transform: translateX(-50%) translateY(-50%);
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
    }
    .hero .container {
        position: relative;
        z-index: 2;
    }
    </style>
@endpush

<section id="hero" class="hero">
    <div class="overlay"></div>
    {{ $slot }}
</section>
