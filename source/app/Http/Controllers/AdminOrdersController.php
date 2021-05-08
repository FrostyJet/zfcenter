<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use \App\Models\Order;
use Illuminate\Http\Request;

class AdminOrdersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $orders = new Order();
        $orders = $orders->orderBy('id', 'desc')->paginate(10);

        return view('admin.orders.index', [
            'orders'   => $orders,
        ]);
    }

    public function delete($id)
    {
        $order = Order::find($id);

        if (!empty($order)) $order->delete();

        return redirect()->back();
    }
}
