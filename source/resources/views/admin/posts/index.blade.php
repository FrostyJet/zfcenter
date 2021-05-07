@extends('@layouts.admin')

@section('content')
    <div class="container-fluid py-5">
        <div class="py-4">
            <div class="row">
                <form action="{{ route('admin.posts.index') }}" class="col" method="GET">
                    <div class="row">
                        <div class="col col-lg-2">
                            <input type="text" class="form-control" value="{{@$filters['id']}}" name="id" placeholder="ID">
                        </div>
                        <div class="col col-lg-4">
                            <input type="text" class="form-control" value="{{@$filters['title']}}" name="title" placeholder="ըստ վերնագրի">
                        </div>
                        <div class="col col-lg-2">
                            <button class="btn btn-primary"><i class="fa fa-search mr-2"></i> Որոնել</button>
                        </div>
                    </div>
                </form>

                <div class="col text-end">
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-success">+ Ավելացնել նոր տվյալ</a>
                </div>
            </div>
        </div>

        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Վերնագիր</th>
                    <th>Հրապարակվել է</th>
                    <th>հրամաններ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->date_created ?? '---' }}</td>
                        <td>
                            <a href="{{ route('admin.posts.delete', ['id' => $post->id]) }}"
                                onclick="return confirm('Տվյալը կհեռացվի, շարունակել?')" class="btn btn-danger">Հեռացնել</a>
                            <a href="{{ route('admin.posts.edit', ['id' => $post->id]) }}"
                                class="btn btn-primary">Դիտել</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination d-flex justify-content-center mt-5">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
