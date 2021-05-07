@extends('@layouts.admin')

@section('content')
    <div class="container-fluid pb-5 pt-3">
        <a href="{{ route('admin.posts.index') }}" class="btn btn-sm btn-success mb-4"><i class="fa fa-chevron-left mr-2"></i> Վերադառնալ ցանկ</a>

        @isset($post->id)
            <h1>Հրապարակում #{{ $post->id }}</h1>
        @endisset

        @empty($post->id)
            <h1>Ստեղծե՛ք նոր հրապարակում</h1>
        @endempty
        <hr class="mb-5">

        @php
            $route = isset($post->id) ? route('admin.posts.update', ['id' => $post->id]) : route('admin.posts.store');
            $media = $post->media;
            
            $mediaMap = ['video' => [], 'image' => []];
            foreach ($media as $m) {
                $mediaMap[$m->type][] = $m;
            }
            
        @endphp
        <form action="{{ $route }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label text-primary"><strong>Վերնագիր</strong></label>
                <input type="text" required class="form-control" name="title" id="title" value="{{ $post->title }}"
                    placeholder="...">
            </div>
            <div class="mb-3" data-init="afterCkEditor" style="opacity: 0">
                <label for="editor" class="form-label text-primary"><strong>Բովանդակություն</strong></label>
                <textarea required class="form-control" id="editor" name="body" rows="3"
                    placeholder="...">{{ $post->body }}</textarea>
            </div>

            <div class="mb-3">
                <label for="images" class="form-label text-primary"><strong>Կցել նկար</strong></label>
                <input class="form-control" type="file" name="images[]" id="images" accept="image/*" multiple>
            </div>

            <div class="mb-3">
                <label for="videos" class="form-label text-primary"><strong>Կցել video</strong></label>
                <input class="form-control" type="file" name="videos[]" id="videos" accept="video/*" multiple>
            </div>

            <div class="media-list pt-5">
                @foreach ($mediaMap['image'] as $item)
                    <div class="media-item">
                        <img src="{{ Storage::url($item->path) }}" class="img-fluid" />
                        <a href="{{ route('admin.media.delete', ['id' => $item->id]) }}"><i class="fa fa-times"></i></a>
                    </div>
                @endforeach
            </div>

            <div class="media-list pt-3">
                @foreach ($mediaMap['video'] as $item)
                    <div class="media-item">
                        <video controls src="{{ Storage::url($item->path) }}" class="img-fluid" ></video>
                        <a href="{{ route('admin.media.delete', ['id' => $item->id]) }}"><i class="fa fa-times"></i></a>
                    </div>
                @endforeach
            </div>

            <div class="mb-3">
                <button class="btn btn-success">Պահպանել</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ URL::asset('assets/lib/ckeditor/ckeditor.js') }}"></script>
@endsection
