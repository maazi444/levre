@extends('main_master')
@section('title', 'Verify your E-mail - Levre')
@section('main')
<section class="verify__wrapper">
    <h1>Verify Your E-mail to Finish Signing up for Levre</h1>
    <p>Thank you for choosing Levre</p>
    <div class="verify__box">
        <p>A fresh verification link has been sent to your email address. Please confirm that <span><strong>{{ Auth::user()->email }}</strong></span> is your e-mail by clicking on the button below.</p>
        @if (session('resent'))
        <div class="success-message" role="alert">
            A fresh verification link has been sent to your email address.
        </div>
        @endif
    </div>
    <p class="resent_text">If you did not receive the email.</p>
    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit" class="verify__btn">click here to request another</button>.
    </form>
</section>
@endsection