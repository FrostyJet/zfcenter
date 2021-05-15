<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="/img/favicon.ico" type="image/vnd.microsoft.icon">
    <title>ZfCenter.am | Admin</title>


    <link href="{{ URL::asset('assets/lib/bootstrap/bootstrap.min.css') }}?v=1" rel="stylesheet">
    <script src="{{ URL::asset('assets/lib/bootstrap/bootstrap.bundle.min.js') }}?v=1"></script>

    @yield('styles')

    <link rel="stylesheet" href="{{ URL::asset('assets/fa-5/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/admin.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div
                    class="d-flex sidebar w-100 flex-column align-items-center align-items-sm-start px-1 pt-2 text-white min-vh-100">
                    <a href="/"
                        class="d-flex ps-3 align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5  d-none d-sm-inline">
                            <img src="/img/i/logo_1.png" class="img-fluid logo mt-3">
                        </span>
                    </a>
                    <ul class="nav mt-4 w-100 nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li
                            class="nav-item ps-3 mb-2 py-2 {{ stripos(Request::url(), '/posts') !== false ? 'active' : '' }}">
                            <a href="{{ route('admin.posts.index') }}" class="nav-link align-middle px-0 text-white">
                                <i class="side-icon fas fa-boxes"></i><span class="ms-2 d-none d-sm-inline">Մեր
                                    աշխատանքները
                                </span>
                            </a>
                        </li>
                        <li class="nav-item ps-3 mb-2 py-2 {{ stripos(Request::url(), '/orders') !== false ? 'active' : '' }}">
                            <a href="{{ route('admin.orders.index') }}" class="nav-link align-middle px-0 text-white">
                                <i class="side-icon fas fa-clipboard-list"></i><span
                                    class="ms-2 d-none d-sm-inline">Հայտ / Գրանցումներ</span>
                            </a>
                        </li>

                        <li class="nav-item ps-3 mb-2 py-2 {{ stripos(Request::url(), '/cars') !== false ? 'active' : '' }}">
                            <a href="{{ route('admin.cars.index') }}" class="nav-link align-middle px-0 text-white">
                                <i class="side-icon fas fa-car"></i><span
                                    class="ms-2 d-none d-sm-inline">Բրենդներ</span>
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/img/i/admin.svg" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline ms-2">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="{{route('logout')}}">Դուրս գալ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col py-3 page">
                @yield('content')
            </div>
        </div>
    </div>
</body>
@yield('scripts')

<script type="text/javascript" src="{{ URL::asset('assets/js/admin.js') }}"></script>

</html>
