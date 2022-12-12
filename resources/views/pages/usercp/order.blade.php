@extends('home')
@section('title', 'Orders - Levre')
@section('user_dashboard')
<div class="orders__wrapper">
    <h1 class="dashboard__content_heading">Orders</h1>
    <table class="orders__table">
        <thead>
            <tr>
                <th>Order</th>
                <th>Date Placed</th>
                <th>Status</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orderRecord as $orderid => $order)
            <tr>
                <td>#{{ $orderid }}</td>
                <td>
                    {{ date('d-m-Y', strtotime($order[0]->created_at)) }}
                </td>
                <td>Processing</td>
                <td>
                    @php
                    $key = 0;
                    $totalPrice = 0;
                    @endphp
                    @foreach($order as $id)
                    <!-- {{ $order[$key]['OrderDetail']['price'] }}, -->
                    @php
                    $prodQuantity = $order[$key]->prod_quantity;
                    $prodPrice = $order[$key]['OrderDetail']['price'];
                    $prodTotal = $prodQuantity * $prodPrice;
                    $totalPrice += $prodTotal;
                    $key++;
                    @endphp
                    @endforeach
                    ${{ $totalPrice }}
                </td>
                <td>
                    <button class="orders__viewBtn">View</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>