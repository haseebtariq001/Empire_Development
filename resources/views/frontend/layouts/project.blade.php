<!doctype html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('frontend.includes.fav')

    @yield('meta')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/dark.css">
    {{-- <link rel="stylesheet" href="https://empiredevelopments.ae/css/front.css?id=bf26fe389780cc8142c0825c95e95bfa"> --}}
    {{-- <link rel="stylesheet" href="assets/css/project-details.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/front_assets/css/aminites-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front_assets/css/fonts.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/front_assets/css/empire-estates.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front_assets/css/style.css?v=0.0.1') }}">
<body>

    @include('frontend.includes.header')

    @yield('content')

    @include('frontend.includes.footer')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/front_assets/js/core.min.js') }}"></script>
    <script src="{{ asset('assets/front_assets/js/empire-estates.js') }}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
    <script>
        $(document).ready(function() {
            $(".chat-btn").click(function() {
                $("#social_div").slideToggle(300);
                $(".fa-times, .fa-headset").toggle();

            });
        });

        const observer = lozad('.lozad', {
            rootMargin: '10px 0px', // syntax similar to that of CSS Margin
            threshold: 0.1, // ratio of element convergence
            enableAutoReload: true // it will reload the new image when validating attributes changes
        });
        observer.observe();
        // observer.observe();

        // $('.owl-carousel').owlCarousel();
        // $(".schedule_date").flatpickr({
        //     enableTime: true,
        //     dateFormat: "Y-m-d H:i",
        // });

        // $(document).ready(function() {
        //     $("#js_move_in_date").flatpickr({
        //         dateFormat: "Y-m-d",
        //     });
        // });
    </script>
    @stack('scripts')
</body>

</html>
