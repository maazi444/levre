@extends('main_master')
@section('title', 'Order Successfull - Levre')
@section('main')
<div class="order_successful_wrapper">
    <div class="os__inner">
        <div class="os__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 48 48" fill="none">
                <g clip-path="url(#clip0)">
                    <path d="M20.5 12.5H47C47.2761 12.5 47.5 12.7239 47.5 13V39.5H20.5L20.5 12.5Z" fill="#FBF8F5" stroke="black" />
                    <path d="M39.5 24.443C39.5 26.1375 38.887 27.2047 37.8682 28.2066C37.3459 28.7203 36.7205 29.2125 36.0038 29.7638C35.926 29.8236 35.8472 29.8841 35.7674 29.9453C35.2137 30.3703 34.615 30.8298 33.9942 31.3491C33.4196 30.8842 32.8689 30.4667 32.3581 30.0795C32.2158 29.9716 32.0766 29.8661 31.9409 29.7626C31.2202 29.2128 30.5996 28.7211 30.0867 28.2092C29.0872 27.2117 28.5 26.1445 28.5 24.4429C28.5 22.8352 29.4113 21.8566 30.4424 21.5816C31.471 21.3073 32.7173 21.7061 33.4647 23.0942C33.6932 23.5185 34.3068 23.5184 34.5353 23.0942C35.2827 21.706 36.529 21.3073 37.5576 21.5816C38.5887 21.8566 39.5 22.8352 39.5 24.443Z" fill="white" stroke="black" />
                    <path d="M20.3293 39.3293L15.5 34.5V8.5H42.5L47.5 12.5H20.5V39.2586C20.5 39.3477 20.3923 39.3923 20.3293 39.3293Z" fill="#FBF8F5" />
                    <path d="M15.5 8.5V34.5L20.3293 39.3293C20.3923 39.3923 20.5 39.3477 20.5 39.2586V12.5M15.5 8.5L20.5 12.5M15.5 8.5H42.5L47.5 12.5H20.5" stroke="black" />
                    <path d="M29.5 8.5L33.5 12.5" stroke="black" />
                    <rect x="4" y="25" width="5" height="1" fill="black" />
                    <rect x="2" y="21" width="7" height="1" fill="black" />
                    <rect y="17" width="9" height="1" fill="black" />
                </g>
                <defs>
                    <clipPath id="clip0">
                        <rect width="48" height="48" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </div>
        <div class="os__text">
            <h2>Thank you for your order!</h2>
            <p>Your order has been received</p>
        </div>
        <div class="os__cta">
            <a href="{{ url('/dashboard/orders') }}" class="os__ctaBtn_trans">View Orders</a>
            <a href="{{ url('/shop') }}" class="os__ctaBtn_black">Continue Shopping</a>
        </div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>