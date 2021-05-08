<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="/img/favicon.ico" type="image/vnd.microsoft.icon">

    <title>
        @if(View::hasSection('title'))
            @yield('title')
        @else
            ZfCenter.am
        @endif
    </title>

    @yield('styles')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ URL::asset('assets/fa-5/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/app.css') }}">
</head>
<body>
@include('@components.navbar')

<main>
    @yield('content')
</main>

@include('@components.footer')
</body>
@yield('scripts')
<script type="text/javascript" src="{{ URL::asset('assets/js/app.js') }}"></script>
</html>
