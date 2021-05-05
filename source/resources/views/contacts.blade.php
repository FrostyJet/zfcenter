@extends('@layouts.app')

@section('content')
<div class="container px-4 pt-3 pb-5">
    <h1 class="display-5 fw-bold lh-1 my-lg-4 text-center">КОНТАКТЫ</h1>
    <div class="row flex-lg-row-reverse g-5 py-5">
        <div class="col-12 col-sm-8 col-lg-6 mt-3">
            <div class="ratio ratio-4x3">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3049.183493802891!2d44.29943971564324!3d40.16046807910835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406a9529aac0db99%3A0xf4381637305409a!2sShahumyan%20Street%2C%20Vagharshapat%2C%20Armenien!5e0!3m2!1sde!2s!4v1619962809406!5m2!1sde!2s"
                class="responsive-iframe" style="border:0; max-height: 500px;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <div class="col-lg-6">
            <p class="lead">
                <b>Адрес:</b> <br>
                Москва, Алтуфьевское шоссе 31, стр. 1
            </p>

            <p class="lead">
                <b>Контактные телефоны:</b> <br>
                8 (495) 664-41-00
            </p>

            <p class="lead">
                <b>E-mail:</b> info@zfcenter.am
            </p>

            <p class="lead">
                <b>Часы работы:</b> <br>
                Понедельник - пятница 9:00 - 20:00 <br>
                Суббота 10:00 - 17:00 <br>

                Воскресенье 10:00 - 19:00 ( только замена масла в акпп) <br>
                <hr>
                Приём автомобилей - круглосуточно <br>
                Эвакуатор по Москве - бесплатно
            </p>

            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="#">Записаться </a> на бесплатную диагностику АКПП
            </div>
        </div>
    </div>
</div>
@endsection
