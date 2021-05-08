<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use \App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function store(Request $request)
    {
        $name = $request->post('name');
        $phone = $request->post('phone');
        $email = $request->post('email');
        $comment = $request->post('comment');

        if (empty($phone) or empty($name)) {
            return response()->json([
                'error' => 'Invalid data specified!'
            ]);
        }

        $order = new Order();
        $order->name = $name;
        $order->phone = $phone;
        $order->email = $email;
        $order->comment = $comment;
        $order->ip = $request->ip();
        $order->save();

        return redirect()->route('index.contacts')->with('success', 'Ваш запрос был успешно отправлен. Мы свяжемся с вами как можно скорее.');
    }
}
