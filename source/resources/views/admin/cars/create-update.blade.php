@extends('@layouts.admin')

@section('scripts')
    <script type="text/javascript" src="{{ URL::asset('assets/lib/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/admin-cars.js') }}"></script>
@endsection

@section('content')
    <div class="container-fluid pb-5 pt-3">
        <a href="{{ route('admin.cars.index') }}" class="btn btn-sm btn-success mb-4"><i
                class="fa fa-chevron-left mr-2"></i> Վերադառնալ ցանկ</a>

        <h1>#{{ $car->brand }}</h1>
        <hr class="mb-5">

        <form action="{{ route('admin.cars.update', ['id' => $car->id]) }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label text-primary"><strong>Վերնագիր</strong></label>
                <input type="text" required class="form-control" name="title" id="title" value="{{ $car->title }}"
                    placeholder="">
            </div>

            <div class="mb-3">
                <label for="parent" class="form-label text-primary"><strong>Parent Brand</strong></label>
                <input type="text" required class="form-control" name="parent" id="parent" value="{{ $car->parent }}"
                    placeholder="">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label text-primary"><strong>Series</strong></label>
                <input type="text" required class="form-control" name="series" id="series" value="{{ $car->series }}"
                    placeholder="">
            </div>

            <div class="mb-3" data-init="afterCkEditor" style="opacity: 0">
                <label for="editor" class="form-label text-primary"><strong>Բովանդակություն</strong></label>
                <textarea class="form-control" id="editor" name="body" rows="3"
                    placeholder="">{{ $car->body }}</textarea>
            </div>

            <div class="mb-3">
                <button class="btn btn-success">Պահպանել</button>
            </div>
        </form>
    </div>
@endsection
