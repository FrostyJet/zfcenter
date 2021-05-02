@extends('@layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">РЕМОНТ АКПП {{$brands[$brand]['subtitle']}}</h1>

    <ul class="list-group remont">
        @foreach($series as $serieKey => $serie)
        <li class="list-group-item" data-bs-toggle="collapse" data-bs-target="#{{$serieKey}}" aria-expanded="false"
            aria-controls="{{$serieKey}}">
            <b>{{$serie['title']}}</b>
        </li>

        <li class="list-style-none collapse" id="{{$serieKey}}">
            <div class="row py-3">
                @foreach($serie['models'] as $modelKey => $model)
                <div class="col-4">
                    <div class="card h-100">
                        <img src="/img/models/{{$serieKey}}-{{$modelKey}}.jpg" class="card-img-top">
                        <div class="card-body d-flex align-items-end">
                            <h5 class="card-title">{{$model}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </li>

        @endforeach
    </ul>

    <div class="remont-details py-5">
        @include('remont.' . $brand)
    </div>

</div>

<div class="py-5"></div>
@endsection