@extends('@layouts.admin')

@section('content')
    <div class="container-fluid py-5">
        <h1 class="mb-4">Գրանցման հայտեր</h1>

        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>IP</th>
                    <th>Անուն</th>
                    <th>Հեռախոսահամար</th>
                    <th>email</th>
                    <th>Մեկնաբանություն</th>
                    <th>Հայտը գրանցվել է</th>
                    <th>հրամաններ</th>
                </tr>
            </thead>
            <tbody>
                @empty($orders)
                    <tr>
                        <td colspan="5" class="p-3">Տվյալները բացակայում են ․․․․</td>
                    </tr>
                @endempty

                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->ip }}</td>
                        <td>{{ !empty($order->name) ? $order->name : '---' }}</td>
                        <td>{{ !empty($order->phone) ? $order->phone : '---' }}</td>
                        <td>{{ !empty($order->email) ? $order->email : '---' }}</td>
                        <td>{{ !empty($order->comment) ? $order->comment : '---' }}</td>
                        <td>{{ !empty($order->date_created) ? $order->date_created : '---' }}</td>
                        <td>
                            <a href="{{ route('admin.orders.delete', ['id' => $order->id]) }}"
                                onclick="return confirm('Տվյալը կհեռացվի, շարունակել?')" class="btn btn-danger">Հեռացնել</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination mt-5">
            {{ $orders->links() }}
        </div>
    </div>
@endsection
