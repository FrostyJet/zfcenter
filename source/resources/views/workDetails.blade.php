@extends('@layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
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

        <div class="images-list">
            @foreach ($mediaMap['image'] as $item)
            <a href="{{ Storage::url($item->path) }}" data-fancybox="gallery">
                <img src="{{ Storage::url($item->path) }}" class="img-fluid" />
            </a>
        @endforeach
        </div>
    </div>
@endsection
