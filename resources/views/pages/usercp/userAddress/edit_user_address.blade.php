@extends('home')
@section('title', 'Edit Shipping Address - Levre')
@section('user_dashboard')
<div class="orders__wrapper">
    <h1 class="dashboard__content_heading">Edit Shipping Address</h1>

    <form action="{{ route('update.user.address') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="address" id="address" class="sa_field" placeholder="Address (max characters: 255)" max="255" value="{{ $userAddress->address }}" required>
            <input type="text" name="zipcode" id="zipcode" class="sa_field" placeholder="Zip Code" max="15" value="{{ $userAddress->zipcode }}" required>
        </div>
        <div>
            <input type="text" name="city" id="city" class="sa_field" placeholder="City" max="255" value="{{ $userAddress->city }}" required>
            <input type="text" name="country" id="country" class="sa_field" placeholder="Country" max="255" value="{{ $userAddress->country }}" required>
        </div>
        <input type="submit" class="sa__btn" value="Update Address">
    </form>

</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>