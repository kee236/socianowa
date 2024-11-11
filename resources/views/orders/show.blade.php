@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Order Details</h1>
    <p>Order ID: {{ $order->id }}</p>
    <p>Customer: {{ $order->user->name }}</p>
    <p>Product: {{ $order->product->name }}</p>
    <p>Quantity: {{ $order->quantity }}</p>
    <p>Total Price: {{ $order->total_price }}</p>
    <p>Payment Method: {{ $order->payment_method }}</p>

    <h2>Update Status</h2>
    <form action="{{ route('orders.update-status', $order) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="payment_status">Payment Status</label>
            <select name="payment_status" id="payment_status" class="form-control">
                <option value="pending" {{ $order->payment_status === 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="paid" {{ $order->payment_status === 'paid' ? 'selected' : '' }}>Paid</option>
            </select>
        </div>
        <div class="form-group">
            <label for="order_status">Order Status</label>
            <select name="order_status" id="order_status" class="form-control">
                <option value="pending" {{ $order->order_status === 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="shipped" {{ $order->order_status === 'shipped' ? 'selected' : '' }}>Shipped</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
