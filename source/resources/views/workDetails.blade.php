@extends('@layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('assets/lib/fancybox/jquery.fancybox.min.css') }}?v=1" />
@endsection

@section('scripts')
    <script src="{{ URL::asset('assets/lib/jquery/jquery.min.js') }}?v=1"></script>
    <script src="{{ URL::asset('assets/lib/fancybox/jquery.fancybox.min.js') }}?v=1"></script>
@endsection

@php
$media = $post->media;

$mediaMap = ['video' => [], 'image' => []];
foreach ($media as $m) {
    $mediaMap[$m->type][] = $m;
}

@endphp

@section('content')
    <div class="container px-4 pt-3 pb-5 work-details">
        <h1 class="display-5 fw-bold lh-1 my-lg-4 text-center">{{ $post->title }}</h1>

        <div class="body">
            {!! $post->body !!}
        </div>

        <div class="media-list images-list">
            @foreach ($mediaMap['image'] as $item)
                <a href="{{ Storage::url($item->path) }}" data-fancybox="gallery">
                    <img src="{{ Storage::url($item->path) }}" class="img-fluid" />
                    <button><i class="fa fa-search"></i></button>
                </a>
            @endforeach
        </div>

        <div class="media-list videos-list row">
            @foreach ($mediaMap['video'] as $item)
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="{{ Storage::url($item->path) }}" data-fancybox="gallery">
                        <video src="{{ Storage::url($item->path) }}"></video>
                        <button><i class="fa fa-play"></i></button>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
