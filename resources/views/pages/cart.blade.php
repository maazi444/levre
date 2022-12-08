@extends('main_master')
@section('title', 'Cart - Levre')
@section('main')


<div class="cart__wrapper">
    <h1 class="cw__mainHeading">Shopping Bag</h1>
    <div class="cw__main">
        <div class="cart__itemSection">
            <div class="categories__table">
                <div class="table-header cart__tableHead">
                    <div class="header__item cart__tableHeader"><a id="name" class="filter__link"></a></div>
                    <div class="header__item cart__tableHeader"><a id="name" class="filter__link"></a></div>
                    <div class="header__item cart__tableHeader"><a id="wins" class="filter__link filter__link--number"><strong>Price</strong></a></div>
                    <div class="header__item cart__tableHeader"><a id="draws" class="filter__link filter__link--number"><strong>Quantity</strong></a></div>
                    <div class="header__item cart__tableHeader"><a id="total" class="filter__link filter__link--number"><strong>Total</strong></a></div>
                    <div class="header__item cart__tableHeader"><a id="losses" class="filter__link filter__link--number"><strong>Actions</strong></a></div>
                </div>
                <div class="table-content">
                    @php
                    $total = 0;
                    @endphp
                    @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity'] @endphp
                    <div class="table-row cart__prodTable" data-id="{{ $id }}">
                        <div class="table-data"><img src="{{ asset('upload/images/'. $details['image']) }}" style="width: 100px;" alt="{{ $details['name'] }}"></div>
                        <div class="table-data"><a href="{{ route('main.product',$details['prodid']) }}">{{ $details['name'] }}</a></div>
                        <div class="table-data">${{ $details['price'] }}</div>
                        <div class="table-data">{{ $details['quantity'] }}</div>
                        <div class="table-data">${{ $details['price'] * $details['quantity'] }}</div>
                        <div class="table-data">
                            <!-- Cart Product Edit Btn Start -->
                            <span class="cart__actionBtn">
                                <a href="{{ route('main.product',$details['prodid']) }}" class="update-cart-product">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </a>
                            </span>
                            <!-- Cart Product Edit Btn End -->

                            <!-- Cart Product Remove Btn Start -->
                            <span class="cart__actionBtn">
                                <a href="{{ route('remove.from.cart', $id) }}" class="remove-from-cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </a>
                            </span>
                            <!-- Cart Product Remove Btn End -->
                        </div>
                    </div>
                    @endforeach
                    <div class="table-row cart__prodTable">
                        <div class="table-data">
                            <a href="{{ route('main.shop') }}" class="cart__ctaBtn">Continue Shopping</a>
                        </div>
                    </div>
                    @else
                    <div class="table-row cart__prodTable">
                        <div class="table-data">
                            <p><strong>No Products in the Cart</strong></p>
                        </div>
                    </div>
                    <div class="table-row cart__prodTable">
                        <div class="table-data">
                            <a href="{{ route('main.shop') }}" class="cart__ctaBtn">Continue Shopping</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="cart__billSection">
            <div class="cart__billInner">
                <h4>Bag totals</h4>
                <p class="cart__address">Shipping to <span><strong>Rawalpindi, Pakistan</strong></span></p>
                <div class="cart__totalDiv">
                    <p><strong>Total</strong></p>
                    <p><strong>${{ $total }}</strong></p>
                </div>
                <button class="cart__checkoutBtn">Checkout</button>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>