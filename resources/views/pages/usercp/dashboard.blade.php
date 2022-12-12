@extends('home')
@section('title', 'My Account - Levre')
@section('user_dashboard')
<h1 class="dashboard__content_heading">Dashboard</h1>
<p class="userdb__homeText">Hello <span>{{ Auth::user()->name }}</span> (not <span>{{ Auth::user()->name }}</span>? <a href="{{ route('logout') }}">Logout</a> )</p>
<p class="userdb__homeDescription">
    From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and edit your password and account details.
</p>
@endsection