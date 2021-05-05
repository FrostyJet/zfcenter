<header>

    <?php
    $navLinks = [
        'index.about'         => ['title' => 'О КОМПАНИИ', 'url' => route('index.about')],
        'index.remontAkpp'    => ['title' => 'РЕМОНТ АКПП', 'url' => route('index.remontAkpp')],
        'index.prices'        => ['title' => 'ЦЕНЫ', 'url' => route('index.prices')],
        'index.zapchastiAkpp' => ['title' => 'ЗАПЧАСТИ АКПП', 'url' => route('index.zapchastiAkpp')],
        'index.#5'            => ['title' => 'НАШИ РАБОТЫ', 'url' => '/'],
        'index.contacts'      => ['title' => 'КОНТАКТЫ', 'url' => route('index.contacts')]
    ]
    ?>

    <div class="intro container d-none d-lg-block">
        <div class="logo d-flex justify-content-center py-4">
            <a href="/">
                <img src="/img/i/logo_1.png" alt="">
            </a>

            <a href="" class="contact-btn">
                <i class="fas fa-headset"></i> {{ \App\Models\Defines::getCompanyPhone() }}
                <span>Обратный звонок</span>
            </a>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="Fourth navbar example">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarExample"
                    aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a href="/" class="d-lg-none">
                <img width="93" src="/img/i/logo_1.png" alt="">
            </a>

            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav d-flex justify-content-around mb-2 mb-md-0 w-100">
                    @foreach($navLinks as $key => $n)
                        <li class="nav-item flex-grow-12 {{ \Request::route()->getName() == $key ? 'active' : '' }}">
                            <a class="nav-link" href="{{$n['url']}}">{{$n['title']}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>
