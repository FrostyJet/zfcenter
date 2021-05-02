@extends('@layouts.app')

@section('content')
    @php
        $brands = \App\Models\Defines::getBrands();
        $prices = \App\Models\Defines::getPrices();

        unset($brands['other'])
    @endphp

    <div class="container py-5">
        <ul class="nav justify-content-between nav-pills nav-prices mb-3" id="pills-tab" role="tablist">
            @foreach($brands as $brandKey => $brand)
                <li class="nav-item" role="presentation">
                    <button class="nav-link {{$loop->first ? 'active' : ''}}" id="pills-{{$brandKey}}-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#pills-{{$brandKey}}" type="button" role="tab"
                            aria-controls="pills-{{$brandKey}}"
                            aria-selected="true">
                        <img src="{{ $brand['image'] }}" width="100" class="img-fluid">
                    </button>
                </li>
            @endforeach
        </ul>


        <div class="tab-content prices-tables" id="pills-tabContent">
            @foreach($prices as $brandKey => $price)
                <div class="tab-pane show {{$loop->first ? 'active' : ''}}" id="pills-{{$brandKey}}" role="tabpanel"
                     aria-labelledby="pills-{{$brandKey}}-tab">
                    <div class="bd-example">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">{{$brands[$brandKey]['subtitle']}}</th>
                                    <th scope="col">ГОДЫ ВЫПУСКА</th>
                                    <th scope="col">ДВИГАТЕЛЬ</th>
                                    <th scope="col">АКПП</th>
                                    <th scope="col">СТОИМОСТЬ РЕМОНТА</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($price as $row)
                                    <tr>
                                        @foreach($row as $rowItem)
                                            <td>{{$rowItem}}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <p class="lead mb-2"> Стоимость ремонта АКПП, указанная на сайте, включает в себя: </p>
                    <ul class="mb-4">
                        <li> дефектовка АКПП;</li>
                        <li> ремонт гидротрансформатора включая расходные материалы;</li>
                        <li> замена расходных материалов АКПП(фрикционные диски, стальные диски, прокладки, втулки,
                            сальники, фильтр);
                        </li>
                        <li> дефектовка (оценка степени износа) и ремонт (если возможно)в случае необходимости -
                            планетарных
                            передач, валов;
                        </li>
                        <li> диагностика, промывка, текущий ремонт гидравлической плиты управления АКПП (включая
                            расходные
                            материалы), без учета стоимости заменяемых соленоидов.
                        </li>
                    </ul>


                    <p class="lead mb-2"> Стоимость ремонта АКПП, указанная на сайте, не включает в себя: </p>
                    <ul class="mb-4">
                        <li>замену корпуса/части корпуса АКПП (Hard Parts), шлейфа плиты управления, электронные блоки
                            АКПП
                        </li>
                        <li>замена механических элементов АКПП (валы, хабы, корпуса фрикционных пакетов, планетарные
                            редукторы в сборе и т.п.)
                        </li>
                        <li>замену гидравлической плиты управления АКПП на новую. Необходимость подобной замены может
                            быть
                            выявлена только после полного механического ремонта АКПП
                        </li>
                    </ul>


                    <hr class="my-5">
                    <p>Компания «ZF center» предоставляет гарантию 2 года без ограничения пробега на ремонт АКПП ZF6HP,
                        ZF8HP, ZF9HP48. Для всех остальных АКПП гарантия на ремонт 1 год. </p>
                    <p>В стоимость ремонта АКПП не входит стоимость снятия/установки АКПП и замена трансмиссионной
                        жидкости.
                    </p>
                    <p>Стоимость снять/поставить и масла на задний или передний привод - 10000 руб. </p>
                    <p>Стоимость снять/поставить и масла на полный привод - 15000 руб. </p>

                    <p> Диагностика АКПП - бесплатно </p>
                    <p> Эвакуатор по Москве - бесплатно </p>
                </div>
            </div>
        </div>
    </div>
@endsection
