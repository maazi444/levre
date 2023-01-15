@extends('home')
@section('title', 'Account Details - Levre')
@section('user_dashboard')
<div class="orders__wrapper">
    <h1 class="dashboard__content_heading">Account Details</h1>
    <div class="account__inner">
        <form action="{{ route('update.user.account', Auth::user()->id) }}" method="POST" class="account__detail_form">
            @csrf
            <input type="text" name="user_name" id="user_name" placeholder="Full Name" class="detail__input" value="{{ $allRecord->name }}" required>
            <input type="text" class="detail__input" readonly value="{{ $allRecord->email }}">
            <div class="password__div">
                <input type="password" name="old_password" id="old_password" placeholder="Old Password" class="detail__input">
                <input type="password" name="new_password" id="new_password" placeholder="New Password" class="detail__input">
                <input type="password" name="new_password_confirmation" id="new_password_confirmation" placeholder="Confirm New Password" class="detail__input">
            </div>
            <div class="detail__msg_div">
                @if (session('status'))
                <div class="success-message">
                    {{ session('status') }}
                </div>
                @elseif (session('error'))
                <div class="text-danger">
                    {{ session('error') }}
                </div>
                @endif
            </div>
            <input type="submit" value="Save Changes" class="detail__input detail__btn">
        </form>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>