<!DOCTYPE html>
<html>
    <head>
        <base href="">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400|Roboto:300,400,500,700,900|Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('theme/css/plugins/plugins.bundle.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/css/pages/session/session.v2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/css/main.bundle.min.css') }}">
        <!-- ========== Favicon Icon ========== -->
        <link rel="shortcut icon" href="{{ asset('theme/images/icoweb.png') }}" type="image/x-icon">
        
    </head>
    <body>
        @yield('content')
        <script src="{{ asset('theme/js/vendors.bundle.min.js') }}"></script>
        <script src="{{ asset('theme/js/main.bundle.min.js') }}"></script>
    </body>

</html>