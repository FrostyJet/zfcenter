@extends('@layouts.app')

@section('content')
    <div class="py-5 container car-details">
        <h1 class="text-center fs-3 mb-5">
            {{ $car->title }}
        </h1>

        @php
            $subDir = $car->parent;
            if ($car->series != 'other') {
                $subDir .= '/' . $car->series;
            }
        @endphp

        <div class="mb-5 hero-block">
            <img src="/img/models/{{ $subDir }}/{{ $car->brand }}.png" class="img-fluid">
        </div>

        <div class="body">
            {!! $car->body !!}
        </div>
    </div>
@endsection
