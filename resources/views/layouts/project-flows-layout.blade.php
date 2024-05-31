<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empire Estates</title>
    <meta name="description"
        content="Empire Estates, a premium real estate project by Empire Developments in Arjan, Dubai, offering 332 units across 8 floors. Choose from 154 studio apartments, 126 1-bedroom apartments, and 45 2-bedroom apartments. Enjoy amenities like a swimming pool, kids play area, 24-hour security, covered parking, gymnasium, sauna, BBQ area, fire alarm, and modern modular kitchens.">
    <meta name="keywords"
        content="Empire Estates, Empire Developments, Arjan Dubai, luxury apartments, 332 units, 8 floors, studio apartments, 1-bedroom apartments, 2-bedroom apartments, swimming pool, kids play area, 24-hour security, covered parking, gymnasium, sauna, BBQ area, fire alarm, modular kitchen">
    <meta name="author" content="Empire Developments">

    <!-- Open Graph tags for social media sharing -->
    <meta property="og:title" content="Empire Estates - Arjan, Dubai | Luxury Apartments & Amenities">
    <meta property="og:description"
        content="Explore Empire Estates, a premium real estate project by Empire Developments in Arjan, Dubai, offering 332 units across 8 floors. Choose from 154 studio apartments, 126 1-bedroom apartments, and 45 2-bedroom apartments. Enjoy amenities like a swimming pool, kids play area, 24-hour security, covered parking, gymnasium, sauna, BBQ area, fire alarm, and modern modular kitchens.">
    <meta property="og:image" content="{{ asset('assets/front_assets/Image/empire-estates/exterior/Ext01.jpg') }}">
    <meta property="og:url" content="{{ url('/empire-estates') }}">

    <!-- Twitter Card tags for Twitter sharing -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Empire Estates - Arjan, Dubai | Luxury Apartments & Amenities">
    <meta name="twitter:description"
        content="Discover Empire Estates, a premium real estate project by Empire Developments in Arjan, Dubai, with 332 units across 8 floors. Choose from 154 studio apartments, 126 1-bedroom apartments, and 45 2-bedroom apartments. Enjoy amenities like a swimming pool, kids play area, 24-hour security, covered parking, gymnasium, sauna, BBQ area, and more.">
    <meta name="twitter:image" content="{{ asset('assets/front_assets/Image/empire-estates/exterior/Ext01.jpg') }}">

    <!-- Canonical URL for duplicate content handling -->
    <link rel="canonical" href="{{ url('/empire-estates') }}">

    @include('frontend.includes.fav')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Architects+Daughter|Roboto&subset=latin,devanagari">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.min.css"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.min.css">
    </noscript>
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </noscript>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pannellum/2.5.6/pannellum.css"
        integrity="sha512-UoT/Ca6+2kRekuB1IDZgwtDt0ZUfsweWmyNhMqhG4hpnf7sFnhrLrO0zHJr2vFp7eZEvJ3FN58dhVx+YMJMt2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Your Mix stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/empire-estates-panel.css') }}">
    @stack('css')
</head>

<body class="welcome">

    @yield('content')
</body>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pannellum/2.5.6/pannellum.js"></script>

<script>
    var galleryElements = document.querySelectorAll('[data-fancybox]');

    galleryElements.forEach(function(element) {
        var galleryName = element.getAttribute('data-fancybox');
        Fancybox.bind('[data-fancybox="' + galleryName + '"]', {});
    });
    var splashElement = document.getElementById('splash-overlay');

    function hideSplashScreen() {
        splashElement.style.display = 'none';
    }

    splashElement.addEventListener('animationend', hideSplashScreen);
</script>

@stack('js')

</html>
