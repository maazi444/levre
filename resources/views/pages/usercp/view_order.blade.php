@extends('home')
@section('title', 'Orders - Levre')
@section('user_dashboard')

<div class="order_detail__toolbar">
    <h1>Order #{{ $ordernum }}</h1>
</div>
<div class="order_detail__infobar">
    <div class="infobar__inner">
        <p>{{ date('d-m-Y', strtotime($ordertotal->created_at)) }} at {{ $ordertotal->created_at->format('H:i:s') }}</p>
        <p>Total &nbsp; ${{ $ordertotal->order_total }}.00</p>
    </div>
</div>
<div>
    @if(session()->has('message'))
    <div class="success-message">
        {{ session()->get('message') }}
    </div>
    @endif
</div>

<div class="order_detail__outer user_order_detail_section">

    <!-- Left Column Start -->
    <div class="order_detail__col order_detail__border">
        <div class="detail_mainHeading">
            <h2>Items</h2>
        </div>
        <div class="detail__itemTable">
            <div class="detail__itemRow detail__tableHeader">
                <div class="detail__itemCol detail__itemImg"><strong>Product</strong></div>
                <div class="detail__itemCol"><strong>Name</strong></div>
                <div class="detail__itemCol"><strong>Price</strong></div>
                <div class="detail__itemCol"><strong>Quantity</strong></div>
                <div class="detail__itemCol detail__itemTotal"><strong>Total Price</strong></div>
            </div>
            @php
            $key = 0;
            @endphp
            @foreach($orderRecord as $orderid => $order)
            <div class="detail__itemRow">
                <div class="detail__itemCol detail__itemImg">
                    <img src="{{ asset('upload/images/'.$orderRecord[$key]['OrderDetail']['image']) }}" style="height: 60px;" alt="">
                </div>
                <div class="detail__itemCol">{{ $orderRecord[$key]['OrderDetail']['name'] }}</div>
                <div class="detail__itemCol">${{ $orderRecord[$key]['OrderDetail']['price'] }}.00</div>
                <div class="detail__itemCol">{{ $orderRecord[$key]['prod_quantity'] }}</div>
                <div class="detail__itemCol detail__itemTotal">
                    @php
                    $itemQuantity = $orderRecord[$key]['prod_quantity'];
                    $itemPrice = $orderRecord[$key]['OrderDetail']['price'];
                    $itemTotalPrice = $itemQuantity * $itemPrice;
                    $key++;
                    @endphp
                    ${{ $itemTotalPrice }}.00
                </div>
            </div>
            @endforeach
        </div>
        <div class="detail_footer">
            <p>Total</p>
            <span>${{ $ordertotal->order_total }}.00</span>
        </div>
        <div class="detail_confirm">
            @if($ordertotal->status == 3)
            <span>Have you received the order?</span>
            <a href="{{ route('user.order.confirm', $ordernum) }}" class="detail_confirm_btn">Yes!</a>
            @elseif($ordertotal->status == 4)
            <span style="color: green;">Wohoo! Order Collected</span>
            @endif
        </div>
    </div>
    <!-- Left Column End -->

    <!-- Right Column Start -->
    <div class="order_detail__col">
        <div class="order__info order_customer">
            <h3>Personal Information</h3>
            <p>{{ $ordertotal['UserDetail']['name'] }}</p>
            <p>{{ $ordertotal['UserDetail']['email'] }}</p>
        </div>
        <div class="order__info order_address">
            <h3>Shipping Address</h3>
            <p>{{ $ordertotal['UserDetail']['zipcode'] }}</p>
            <p>
                {{ $ordertotal['UserDetail']['address'] }},
                {{ $ordertotal['UserDetail']['city'] }},
                {{ $ordertotal['UserDetail']['country'] }}
            </p>
        </div>
    </div>
    <!-- Right Column End -->

</div>

@endsection