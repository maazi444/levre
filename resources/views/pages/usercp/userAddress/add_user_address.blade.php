@extends('home')
@section('title', 'Shipping Address - Levre')
@section('user_dashboard')
<div class="orders__wrapper">
    <h1 class="dashboard__content_heading">Add Shipping Address</h1>

    <form action="{{ route('store.user.address') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="address" id="address" class="sa_field" placeholder="Address (max characters: 255)" max="255" required>
            <input type="text" name="zipcode" id="zipcode" class="sa_field" placeholder="Zip Code" max="15" required>
        </div>
        <div>
            <input type="text" name="city" id="city" class="sa_field" placeholder="City" max="255" required>
            <input type="text" name="country" id="country" class="sa_field" placeholder="Country" max="255" required>
        </div>
        <input type="submit" class="sa__btn" value="Add Address">
    </form>

</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>