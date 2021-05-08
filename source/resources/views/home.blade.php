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

        <img src="/img/i/main_page_back.jpg" alt="" class="poster">
    </div>

    <div class="bg-light py-5">
        <?php $brands = \App\Models\Defines::getBrands(); ?>
        <section class="text-center container">
            <div class="row remont-akpp">
                @foreach ($brands as $key => $b)
                    <a href="/remont-akpp-{{ $key }}" class="col-6 col-lg-4 card-item no-decoration text-dark">
                        <img class="bd-placeholder-img" width="140" height="140" src="{{ $b['image'] }}" alt="">

                        <h2 class="text-truncate">{{ $b['subtitle'] }}</h2>
                        <p>{{ $b['title'] }}</p>
                    </a><!-- /.col-lg-4 -->
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
            <?php $services = ['ремонт АКПП BMW', 'ремонт АКПП Audi', 'ремонт АКПП Land Rover', 'ремонт АКПП
            Jaguar', 'ремонт АКПП Volkswagen', 'ремонт АКПП Mercedes', 'ремонт АКПП Volvo']; ?>

            <div class="row row-cols-4 g-4 py-3">
                <div class="col-12">
                    <h2 class="pb-2 display-6 border-bottom">Компания "ZFcenter" специализируется:</h2>
                </div>

                @foreach ($services as $s)
                    <div class="col-6 col-lg-3 d-flex align-items-center">
                        <i class="fas fa-tools bi text-muted flex-shrink-0 me-3 fa-2x"></i>
                        <div>
                            <p>{{ $s }}</p>
                        </div>
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

            <ol class="list-group list-group-numbered">
                @foreach ($features as $f)
                    <li class="list-group-item">{{ $f }}</li>
                @endforeach
            </ol>
        </div>
    </div>

    <div class="py-5 bg-light border-bottom">
        <div class="container">
            <div class="row">
                <form class="col-12 col-lg-6" method="POST" action="{{ route('index.contacts.store') }}">
                    @csrf

                    <fieldset>
                        <legend>Оставьте заявку</legend>
                        <div class="mb-3">
                            <label for="name" class="form-label">Введите Ваше имя:</label>
                            <input type="text" required id="name" name="name" class="form-control form-control-lg">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Введите Ваш телефон:</label>
                            <input type="text" required id="phone" name="phone" class="form-control form-control-lg">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Введите Ваш email:</label>
                            <input type="text" id="email" name="email" class="form-control form-control-lg">
                        </div>

                        <div class="mb-3">
                            <label for="comment" class="form-label">Ваш комментарий</label>
                            <input type="text" id="comment" name="comment" class="form-control form-control-lg">
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary">Отправить заявку&nbsp; <i
                                class="fas fa-paper-plane"></i></button>
                    </fieldset>
                </form>

                <div class="col-6 justify-content-center align-items-center d-flex">
                    <img class="img-fluid" style="max-width: 430px;"
                        src="{{ URL::asset('img/i/undraw_personal_file.svg') }}">
                </div>
            </div>
        </div>
    </div>
@endsection
