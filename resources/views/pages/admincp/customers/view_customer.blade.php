@extends('dashboard_master')
@section('title', 'Manage Customers - Levre')
@section('dashboard_content')
<div class="categories__toolbar">
    <h1 class="medium-heading">Customers</h1>
    <a class="toolbar__createBtn" href="">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
        </svg>
        New Category
    </a>
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
                    <td>{{ $user->zipcode }}</td>
                    <td>{{ $user->city }}</td>
                    <td>{{ $user->country }}</td>
                    <td>
                        <button class="orders__viewBtn">View</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection