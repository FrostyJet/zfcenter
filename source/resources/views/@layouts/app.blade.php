<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta charset="utf-8">
    <meta property="og:image" content="{{URL::to('/')}}/img/i/logo_1.png">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{URL::to('/')}}/">
    <link rel="shortcut icon" href="{{URL::to('/')}}/img/favicon.ico" type="image/vnd.microsoft.icon">
    <meta property="og:site_name" content="ZF Center">
    <meta property="og:description" content="Бесплатная диагностика, ремонт АКПП․․․">
    <meta property="og:title" content="ZF Center | Армения">

    <meta name="description" content="Бесплатная диагностика и ремонт АКПП в Москве за 2-3 дня! Гарантия на ремонт 6-12 месяцев. Бесплатный эвакуатор по Москве.">
    <meta name="keywords" content="диагностика и ремонт акпп, диагностика и ремонт акпп в москве, бесплатная диагностика акпп">

    <link rel="preconnect" href="{{URL::to('/')}}">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/vnd.microsoft.icon">

    <title>
        @if (View::hasSection('title'))
            @yield('title')
        @else
            ZfCenter.am
        @endif
    </title>

    @yield('styles')

    <link href="{{ URL::asset('assets/lib/bootstrap/bootstrap.min.css') }}?v=1" rel="stylesheet">
    <script src="{{ URL::asset('assets/lib/bootstrap/bootstrap.bundle.min.js') }}?v=1"></script>

    <link rel="stylesheet" href="{{ URL::asset('assets/fa-5/css/all.min.css') }}?v=1">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/app.css') }}?v=1">
</head>

<body>
    @include('@components.navbar')

    <main>
        @yield('content')
    </main>

    @include('@components.footer')
</body>
@yield('scripts')
<script type="text/javascript" src="{{ URL::asset('assets/js/app.js') }}?v=1"></script>

</html>
