@extends('@layouts.admin')

@section('styles')
    <!-- add to document <head> -->
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet"/>
@endsection

@section('scripts')
    <!-- add before </body> -->
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>

    <script type="text/javascript" src="{{ URL::asset('assets/lib/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/admin-post.js') }}"></script>
@endsection

@section('content')
    <div class="container-fluid pb-5 pt-3">
        <a href="{{ route('admin.posts.index') }}" class="btn btn-sm btn-success mb-4"><i
                class="fa fa-chevron-left mr-2"></i> Վերադառնալ ցանկ</a>

        @isset($post->id)
            <h1>Հրապարակում #{{ $post->id }}</h1>
            <input type="hidden" value="{{$post->id}}" id="postId">
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
                       placeholder="">
            </div>
            <div class="mb-3" data-init="afterCkEditor" style="opacity: 0">
                <label for="editor" class="form-label text-primary"><strong>Բովանդակություն</strong></label>
                <textarea class="form-control" id="editor" name="body" rows="3"
                          placeholder="">{{ $post->body }}</textarea>
            </div>

            <div class="mb-3">
                <label for="attachments" class="form-label text-primary"><strong>Կցել նկար կամ հոլովակ</strong></label>
                <input class="form-control" type="file" name="attachments[]" id="attachments" accept="image/*|video/*"/>
            </div>

            <div class="progress" style="display:none;" id="progress">
                <div class="progress-bar" id="progressBar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <div class="media-list pt-5 images">
                @foreach ($mediaMap['image'] as $item)
                    <div class="media-item">
                        <img src="{{ Storage::url($item->path) }}" class="img-fluid"/>
                        <a href="{{ route('admin.media.delete', ['id' => $item->id]) }}"><i class="fa fa-times"></i></a>
                    </div>
                @endforeach
            </div>

            <div class="media-list pt-3 videos">
                @foreach ($mediaMap['video'] as $item)
                    <div class="media-item">
                        <video controls src="{{ Storage::url($item->path) }}" class="img-fluid"></video>
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
