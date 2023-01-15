@extends('dashboard_master')
@section('title', 'Manage Customers - Levre')
@section('dashboard_content')
<div class="categories__toolbar">
    <h1 class="medium-heading">Customers</h1>
</div>

<div class="customer__outer">
    <div class="customer__table">
        <table class="orders__table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Zipcode</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allData as $user)
                <tr>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>
                        {{ $user->type }}
                    </td>
                    <td>
                        @if($user->zipcode == NULL)
                        <span style="color: grey; font-style: italic;">NULL</span>
                        @else
                        {{ $user->zipcode }}
                        @endif
                    </td>
                    <td>
                        @if($user->city == NULL)
                        <span style="color: grey; font-style: italic;">NULL</span>
                        @else
                        {{ $user->city }}
                        @endif
                    </td>
                    <td>
                        @if($user->country == NULL)
                        <span style="color: grey; font-style: italic;">NULL</span>
                        @else
                        {{ $user->country }}
                        @endif
                    </td>
                    @if($user->type != 'super-admin')
                    <td>
                        <a href="{{ route('admin.change.role', $user->email) }}" class="orders__viewBtn">Change Role</a>
                        @if($user->status == 0)
                        <a href="{{ route('admin.block.customer', $user->email) }}" class="BlackBtn">Block</a>
                        @else
                        <a href="{{ route('admin.block.customer', $user->email) }}" class="BlackBtn">Unblock</a>
                        @endif
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection