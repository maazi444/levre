@extends('home')
@section('title', 'Shipping Address - Levre')
@section('user_dashboard')
<div class="orders__wrapper">
    @if($address->address == NULL)
    <p><span><strong>User Shipping address not found.</strong></span></p>
    <p>We require your address to ship orders</p>
    <a href="{{ route('add.user.address') }}" class="sa__btn">Add Address</a>
    @else
    <h1 class="dashboard__content_heading">Shipping Address</h1>
    <p>Address: <span><strong>{{ $address->address }}</strong></span></p>
    <p>Zip Code: <span><strong>{{ $address->zipcode }}</strong></span></p>
    <p>City: <span><strong>{{ $address->city }}</strong></span></p>
    <p>Country: <span><strong>{{ $address->country }}</strong></span></p>
    <a href="{{ route('edit.user.address') }}" class="sa__btn">Edit Address</a>
    @endif
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>