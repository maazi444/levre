@extends('dashboard_master')
@section('dashboard_content')
<div class="orders__wrapper">
    <h1 class="dashboard__content_heading">Change Password</h1>
    <div class="account__inner">
        <form action="{{ route('admin.update.password', Auth::user()->id) }}" method="POST" class="account__detail_form">
            @csrf
            <div class="password__div">
                <input type="password" name="old_password" id="old_password" placeholder="Old Password" class="detail__input" required>
                <input type="password" name="new_password" id="new_password" placeholder="New Password" class="detail__input" required>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation" placeholder="Confirm New Password" class="detail__input" required>
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
            <input type="submit" value="Change Password" class="detail__input detail__btn">
        </form>
    </div>
</div>
@endsection