@extends('main_master')
@section('main')
<section class="form__wrapper">
    <div class="form__outer">
        <h1 class="form__heading large-heading">Register</h1>
        <form action="{{ route('register') }}" method="POST" class="form__area">
            @csrf
            <input type="text" name="name" id="name" placeholder="Name *" required>

            @error('name')
            <span>
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input type="email" name="email" id="email" placeholder="Email Address *" required>

            @error('email')
            <span>
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input type="password" name="password" id="password" placeholder="Password *" required>

            <input type="password" name="password_confirmation" id="password-confirm" placeholder="Password *" required autocomplete="new-password">



            <input type="submit" value="Register" class="form__blackBtn">
            <h5>Already have an account?</h5>
            <a class="form__transBtn" href="{{ route('login') }}">Login</a>
        </form>
    </div>
</section>
@endsection