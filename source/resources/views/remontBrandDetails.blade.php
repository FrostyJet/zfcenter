@extends('@layouts.app')

@section('title')
    {{ $car->title }}
@endsection

@section('content')
    <div class="py-5 container car-details">
        <h1 class="text-center fs-3 mb-5">
            {{ $car->title }}
        </h1>

        @php
            $subDir = $car->parent;
            $ext = 'png';
            if ($car->series != 'other') {
                $subDir .= '/' . $car->series;
                $ext = 'jpg';
            }
        @endphp

        <div class="mb-5 hero-block">
            <img src="/img/models/{{ $subDir }}/{{ $car->brand }}.{{$ext}}" class="img-fluid">
        </div>

        <div class="body">
            {!! $car->body !!}
        </div>
    </div>
@endsection
