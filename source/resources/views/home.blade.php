@extends('@layouts.app')

@section('content')
    <div class="hero container">
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1>Записаться на БЕСПЛАТНУЮ диагностику АКПП</h1>
                    <p>
                        <a href="#" class="btn fw-bold btn-lg btn-warning my-2 text-uppercase">записаться</a>
                    </p>
                </div>
            </div>
        </section>

        <img src="http://zfcenter.ru/sites/all/themes/cleanlight/images/main_page_back.jpg" alt="" class="poster">
    </div>

    <div class="bg-light py-5">
        <?php
        $brands = [
            ['image' => 'http://zfcenter.ru/sites/default/files/photo_0.jpg', 'title' => 'Ремонт АКПП', 'subtitle' => 'Mercedes'],
            ['image' => 'http://zfcenter.ru/sites/default/files/logo_audi_0.png', 'title' => 'Ремонт АКПП', 'subtitle' => 'Audi'],
            ['image' => 'http://zfcenter.ru/sites/default/files/logo_jaguar.png', 'title' => 'Ремонт АКПП', 'subtitle' => 'Jaguar'],
            ['image' => 'http://zfcenter.ru/sites/default/files/logo_rover.png', 'title' => 'Ремонт АКПП', 'subtitle' => 'Land Rover'],
            ['image' => 'http://zfcenter.ru/sites/default/files/logo_bmw.png', 'title' => 'Ремонт АКПП', 'subtitle' => 'BMW'],
            ['image' => 'http://zfcenter.ru/sites/default/files/logo_other.png', 'title' => 'Ремонт АКПП', 'subtitle' => 'на других авто'],
        ];
        ?>
        <section class="text-center container">
            <div class="row">
                @foreach($brands as $b)
                    <div class="col-6 col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                             src="{{$b['image']}}" alt="">

                        <h2>{{$b['subtitle']}}</h2>
                        <p>{{$b['title']}}</p>
                    </div><!-- /.col-lg-4 -->
                @endforeach
            </div>
        </section>
    </div>

    <div class="container py-5">
        <h2 class="pb-2 display-6 border-bottom">Компания "ZFcenter" - Ремонт АКПП</h2>
        <p>
            Ремонт АКПП - это сложный технологический процесс, который профессионально могут осуществить только
            специалисты высокого уровня на специальном оборудовании. Для быстрого и качественного ремонта АКПП в Москве
            необходимо обязательное наличие запчастей на складе. Компания «ZF center» специализируется на ремонте АКПП
            для BMW, Audi, Land Rover, Jaguar, Volkswagen и Mercedes. Ремонт АКПП ZF в Москве осуществляется за 1-3 дня,
            с предоставлением гарантии на 6-12 месяцев, без ограничений по пробегу и эксплуатации. В нашей партнёрской
            сети свыше 80 партнёров среди автосервисов Москвы и Подмосковья, для которых мы осуществляем ремонт АКПП.
            Собственное оборудование для полного цикла восстановления АКПП. Бесплатная диагностика и эвакуатор по
            Москве.
        </p>
    </div>

    <div class="bg-light">
        <div class="container py-5">
            <?php
            $services = [
                'ремонт АКПП BMW',
                'ремонт АКПП Audi',
                'ремонт АКПП Land Rover',
                'ремонт АКПП Jaguar',
                'ремонт АКПП Volkswagen',
                'ремонт АКПП Mercedes',
                'ремонт АКПП Volvo',
            ]
            ?>

            <div class="row row-cols-4 g-4 py-3">
                <div class="col-12">
                    <h2 class="pb-2 display-6 border-bottom">Компания "ZFcenter" специализируется:</h2>
                </div>

                @foreach($services as $s)
                    <div class="col-6 col-lg-3 d-flex align-items-center">
                        <i class="fas fa-tools bi text-muted flex-shrink-0 me-3 fa-2x"></i>
                        <div><p>{{$s}}</p></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="bg-light1 py-3">
        <div class="container py-5">
            <h2 class="pb-2 display-6">
                Компания "ZFcenter" это:
            </h2>

            <?php
            $features = [
                'БЕСПЛАТНАЯ диагностика АКПП,',
                'БЕСПЛАТНЫЙ эвакуатор по Москве,',
                'свыше 150 сервисов-партнёров в Москве и регионах,',
                'гарантия на ремонт без ограничений по пробегу от 6 месяцев до 3х лет,',
                'фиксированные цены на ремонт АКПП,',
                'срок ремонта АКПП 1-3 дня,',
                'любые запчасти для АКПП на складе в наличие,',
                'развитие партнерских программ и акций,',
                'спонсорская поддержка партнеров,',
                'обучение или курсы повышения квалификации механиков,',
                'проведение независимых экспертиз',
            ]
            ?>

            <ol class="list-group list-group-numbered">
                @foreach($features as $f)
                    <li class="list-group-item">{{$f}}</li>
                @endforeach
            </ol>
        </div>
    </div>

    <div class="py-5 bg-light border-bottom">
        <div class="container">
            <div class="row">
                <form class="col-12 col-lg-6">
                    <fieldset>
                        <legend>Оставьте заявку</legend>
                        <div class="mb-3">
                            <label for="name" class="form-label">Введите Ваше имя:</label>
                            <input type="text" id="name" class="form-control form-control-lg">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Введите Ваш телефон:</label>
                            <input type="text" id="phone" class="form-control form-control-lg">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Введите Ваш email:</label>
                            <input type="text" id="email" class="form-control form-control-lg">
                        </div>

                        <div class="mb-3">
                            <label for="comment" class="form-label">Ваш комментарий</label>
                            <input type="text" id="comment" class="form-control form-control-lg">
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary">Отправить заявку&nbsp; <i class="fas fa-paper-plane"></i></button>
                    </fieldset>
                </form>

                <div class="col-6 justify-content-center align-items-center d-flex">
                    <img class="img-fluid" style="max-width: 430px;" src="{{URL::asset('img/i/undraw_personal_file.svg')}}">
                </div>
            </div>
        </div>
    </div>
@endsection
