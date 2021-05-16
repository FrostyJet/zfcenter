@extends('@layouts.admin')

@section('content')
    <div class="container-fluid py-5">
        <h1 class="mb-4">Բրենդներ</h1>

        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>KEY</th>
                    <th>Վերնագիր</th>
                    <th>Բովանդակություն</th>
                    <th>հրամաններ</th>
                </tr>
            </thead>
            <tbody>
                @empty($cars)
                    <tr>
                        <td colspan="4" class="p-3">Տվյալները բացակայում են ․․․․</td>
                    </tr>
                @endempty

                @foreach ($cars as $car)
                    <tr>
                        <td>{{ $car->brand }}</td>
                        <td>{{ $car->title }}</td>
                        <td>{{ Str::limit(strip_tags($car->body), 35, '...') }}</td>
                        <td>
                            <a href="{{ route('admin.cars.edit', ['id' => $car->id]) }}" class="btn btn-primary">Դիտել</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination">
            {{ $cars->links() }}
        </div>
    </div>
@endsection
