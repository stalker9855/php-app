
@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1>Order Details</h1>

        <p><strong>Order ID:</strong> {{ $order['id'] }}</p>
        <p><strong>Dish:</strong> {{ $order['dish'] }}</p>
        <p><strong>Quantity:</strong> {{ $order['quantity'] }}</p>
        <p><strong>Total Price:</strong> ${{ $order['quantity'] * $order['price'] }}</p>
        <p><strong>Status:</strong> {{ $order['status'] }}</p>
    </div>
@endsection
