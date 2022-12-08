@extends('main_master')
@section('main')
<section class="form__wrapper">
    <div class="form__outer">
        <h1 class="form__heading large-heading">Login</h1>
        <form action="{{ route('login') }}" method="POST" class="form__area">
            @csrf
            <input type="email" name="email" id="email" placeholder="Email Address *" required>

            <input type="password" name="password" id="password" placeholder="Password *" required>

            <div class="showPassword">
                <input type="checkbox" id="showPasswordBtn" onclick="showPassword()">
                <label for="showPasswordBtn">Show Password</label>
            </div>

            <div class="form__passwordinfo">
                <div class="form__rememberme">
                    <input type="checkbox" name="remember_me" id="remember_me">
                    <label for="remember_me">Remember Me</label>
                </div>
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Lost Password?</a>
                @endif
            </div>
            @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
            <input type="submit" value="Log In" class="form__blackBtn">
            <h5>Don't have an account?</h5>
            <a class="form__transBtn" href="{{ route('register') }}">Register</a>
        </form>
    </div>
</section>
<script>
    function showPassword() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
@endsection