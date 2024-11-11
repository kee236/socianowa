<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function updateStatus(Request $request, Order $order)
    {
        // Validate the request...

        $order->update([
            'order_status' => $request->order_status,
            'payment_status' => $request->payment_status,
            // ...
        ]);

        return redirect()->route('orders.show', $order);
    }
}
