@extends('home')
@section('title', 'Orders - Levre')
@section('user_dashboard')
<div class="orders__wrapper">
    <h1 class="dashboard__content_heading">Orders</h1>
    <span class="order_confirmation_message">If you have received the order, go to order details and confirm it.</span>
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
                <td>
                    @if($order[0]->status == 1)
                    Received
                    @elseif($order[0]->status == 2)
                    Processed
                    @elseif($order[0]->status == 3)
                    Shipped
                    @elseif($order[0]->status == 4)
                    Collected
                    @endif
                </td>
                <td>
                    @php
                    $key = 0;
                    $itemCounter = 0;
                    $totalPrice = 0;
                    @endphp
                    @foreach($order as $id)
                    <!-- {{ $order[$key]['OrderDetail']['price'] }}, -->
                    @php
                    $itemCounter++;
                    $prodQuantity = $order[$key]->prod_quantity;
                    $prodPrice = $order[$key]['OrderDetail']['price'];
                    $prodTotal = $prodQuantity * $prodPrice;
                    $totalPrice += $prodTotal;
                    $key++;
                    @endphp
                    @endforeach
                    ${{ $totalPrice }} for {{ $itemCounter }} items
                </td>
                <td>
                    <a class="orders__viewBtn" href="{{ route('user.order.detail', $order[0]->order_id) }}">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>