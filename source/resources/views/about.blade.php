@extends('@layouts.app')

@section('content')
<div class="px-4 my-5 pb-3">
  <h1 class="fw-bold text-center">О КОМПАНИИ</h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4 text-center">
        С 1993 года компания "ZFcenter" специализируется на ремонте АКПП, вариаторов, роботизированных коробок DSG, гидроблоков, гидротрансформаторов на собственной производственной базе в Москве. (ремонт АКПП BMW, ремонт акпп Audi, ремонт акпп Land Rover, ремонт акпп Jaguar, ремонт акпп Volkswagen, ремонт акпп Mercedes)
    </p>
  </div>
  <div class="text-center" style="max-height: 30vh;">
    <div class="container-fluid px-5">
      <img src="/img/i/about.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="1300" height="500" loading="lazy">
    </div>
  </div>

  <div class="container">
    <div class="bg-light1 py-3">
            <div class="container px-0 pt-5 pb-3">
                <h2 class="pb-2 display-6">
                    Компания "ZFcenter" это:
                </h2>

                <ol class="list-group list-group-numbered">
                    @foreach($features as $f)
                        <li class="list-group-item">{{$f}}</li>
                    @endforeach
                </ol>
            </div>
        </div>

        <div class="col-lg-7">
        <p class="lead mb-4">
            Компания "ZFcenter" специализируется на ремонте АКПП любой сложности. Мы являемся лидерами в области ремонта в автоматических трансмиссий благодаря нашему ноу-хау, современному техническому оборудованию и собственному складу запасных частей. С нами Вы получаете высокое качество, которое является результатом многолетнего опыта.
        </p>

        <p class="lead mb-4">
            Мы работаем с крупными автосервисами по всей России. Проводим образовательные тренинги и консультируем наших клиентов.
        </p>
    </div>

    <p class="mb-4">
        <a href="{{route('index.works')}}" class="text-center">Примеры выполненных работ по ремонту АКПП </a>
    </p>
    <p class="mb-4"><a href="tel: {{ \App\Models\Defines::getCompanyPhone() }}" class="btn btn-primary text-center">Телефон для связи: {{ \App\Models\Defines::getCompanyPhone() }} &nbsp;<i class="fa fa-phone"></i></a></p>
    </div>
</div>
@endsection
