@extends('@layouts.app')

@section('content')
    <div class="container px-md-4 pt-3 pb-5">
        <h1 class="display-5 fw-bold lh-1 my-lg-4 text-center">НАШИ РАБОТЫ</h1>

        <div class="row works">
            @foreach ($posts as $post)
                @php
                    $media = $post->media;
                    $mediaMap = ['video' => [], 'image' => []];
                    foreach ($media as $m) {
                        $mediaMap[$m->type][] = $m;
                    }
                @endphp
                <div class="col-6 col-md-4 mb-3 col-lg-3">
                    <a class="card no-decoration text-dark"
                        href="{{ route('index.works.details', ['slug' => $post->slug, 'id' => $post->id]) }}">
                        @if (isset($mediaMap['image'][0]))
                            <img src="{{ Storage::url($mediaMap['image'][0]->path) }}" onerror="this.src = '/img/i/no_image.jpg'" class="card-img-top" alt="...">
                        @else
                            <img src="/img/i/no_image.jpg" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <p class="card-text text-truncate">{{ $post->title }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="pagination">
            {{$posts->links()}}
        </div>
    </div>
@endsection
