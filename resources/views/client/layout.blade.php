<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\favicon.ico">
        <link rel="stylesheet" href="{{ asset('assets\css\bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets\css\icons.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets\css\app.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets\libs\owl.carousel\assets\owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets\libs\owl.carousel\assets\owl.theme.default.min.css')}}">
        @livewireStyles
    </head>
        <!-- content -->
        
        <!-- end content -->
        <body data-spy="scroll" data-target="#topnav-menu" data-offset="60">
            @include('client.header')
            @yield('content')
        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets\libs\jquery\jquery.min.js')}}"></script>
        <script src="{{ asset('assets\libs\bootstrap\js\bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets\libs\metismenu\metisMenu.min.js')}}"></script>
        <script src="{{ asset('assets\libs\simplebar\simplebar.min.js')}}"></script>
        <script src="{{ asset('assets\libs\node-waves\waves.min.js')}}"></script>
            @include('client.footer')
        <!-- App js -->
        <script src="{{ asset('assets\js\app.js')}}"></script>
        @livewireScripts
    </body>
</html>

