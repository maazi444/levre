@extends('dashboard_master')
@section('title', 'Change User Role - Levre')
@section('dashboard_content')
<div class="categories__toolbar">
    <h1 class="medium-heading">Change User Role</h1>
</div>

<div class="customer__outer">
    @foreach($allData as $data)
    <span>Username: {{ $data->name }}</span>
    @endforeach
    <div class="customer__table">
        <form action="{{ route('admin.update.role', $data->id) }}" method="POST">
            @csrf
            <div class="role__form_row">
                <input type="radio" name="role" id="role_user" value="0" checked>
                <label for="role_user">User</label>
            </div>
            <div class="role__form_row">
                <input type="radio" name="role" id="role_admin" value="1">
                <label for="role_admin">Admin</label>
            </div>
            <input type="submit" value="Change Role" style="margin-top: 1em;" class="BlackBtn">
        </form>
    </div>
</div>

@endsection