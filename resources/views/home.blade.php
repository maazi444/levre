@extends('main_master')
@section('main')

<section class="userdb__wrapper">
    <div class="userdb__navsection">
        <ul class="userdb__navmenu">
            <li class="userdb__navlink"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
            <li class="userdb__navlink"><a href="{{ route('user.orders') }}">Orders</a></li>
            <li class="userdb__navlink"><a href="{{ route('user.address') }}">Shipping Address</a></li>
            <li class="userdb__navlink"><a href="">Account details</a></li>
            <li class="userdb__navlink"><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
    </div>
    <div class="userdb__pagesection">
        @yield('user_dashboard')
    </div>
</section>

@endsection