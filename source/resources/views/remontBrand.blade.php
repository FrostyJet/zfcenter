@extends('@layouts.app')

@section('content')

    <div class="container py-5">
        @if($brand != 'other')
            <h1 class="mb-4">РЕМОНТ АКПП {{$brands[$brand]['subtitle']}}</h1>

            <ul class="list-group remont">
                @foreach($series as $serieKey => $serie)
                    <li class="list-group-item" data-bs-toggle="collapse" data-bs-target="#c{{$serieKey}}"
                        aria-expanded="false"
                        aria-controls="c{{$serieKey}}">
                        <b>{{$serie['title']}}</b>
                    </li>

                    <li class="list-style-none collapse" id="c{{$serieKey}}">
                        <div class="row py-3">
                            @foreach($serie['models'] as $modelKey => $model)
                                <div class="col col-md-4 mb-3">
                                    <a class="card no-decoration text-dark h-100" href="{{ route('index.remontBrandDetails', ['brand' => $modelKey]) }}">
                                        <img src="/img/models/{{$brand}}/{{$serieKey}}/{{$modelKey}}.jpg"
                                             class="card-img-top">
                                        <div class="card-body d-flex align-items-end">
                                            <h5 class="card-title">{{$model}}</h5>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </li>

                @endforeach
            </ul>

            <div class="remont-details py-5">
                @include('remont.' . $brand)
            </div>
        @else
            @include('remont.' . $brand)
        @endif

    </div>
    <div class="py-5"></div>

@endsection
