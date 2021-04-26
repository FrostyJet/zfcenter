<header>

    <?php
    $navLinks = [
        'О КОМПАНИИ',
        'РЕМОНТ АКПП',
        'СТАТЬИ',
        'ЦЕНЫ',
        'ЗАПЧАСТИ АКПП',
        'НАШИ РАБОТЫ',
        'ПАРТНЁРЫ',
        'КОНТАКТЫ'
    ]
    ?>

    <div class="intro container d-none d-lg-block">
        <div class="logo d-flex justify-content-center py-4">
            <a  href="#">
                <img src="http://zfcenter.ru/sites/default/files/logo_1.png" alt="">
            </a>

            <a href="" class="contact-btn">
                <i class="fas fa-headset"></i> +7 (495) 66-44-100
                <span>Обратный звонок</span>
            </a>
        </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-light bg-light" aria-label="Fourth navbar example">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
                    aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav d-flex mb-2 mb-md-0 w-100">
                    @foreach($navLinks as $n)
                        <li class="nav-item flex-grow-1">
                            <a class="nav-link" href="#">{{$n}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>
