<!doctype html>
<html lang="en">
    @include('frontend.includes.head')
    <body>

        @include('frontend.includes.header')

        @yield('content')
        
        @include('frontend.includes.footer')
        @include('frontend.includes.footer_inc')
        
    </body>
</html>
