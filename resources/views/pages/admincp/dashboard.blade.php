@extends('dashboard_master')
@section('dashboard_content')
<h1 class="medium-heading">Dashboard</h1>
<div class="dashboard__indicator">
    <div class="dashboard__indicator-wrapper">
        <div class="dashboard__indicator-content">
            <div class="dashboard__indicator-header">
                <span>Total Sell</span>
            </div>
            <div class="dashboard__indicator-body">
                Indicator 1
            </div>
            <div class="dashboard__indicator-footer"></div>
        </div>
    </div>
    <div class="dashboard__indicator-wrapper">
        <div class="dashboard__indicator-content">
            <div class="dashboard__indicator-header">
                <span>User Requests</span>
            </div>
            <div class="dashboard__indicator-body">
                Indicator 2
            </div>
            <div class="dashboard__indicator-footer"></div>
        </div>
    </div>
    <div class="dashboard__indicator-wrapper">
        <div class="dashboard__indicator-content">
            <div class="dashboard__indicator-header">
                <span>Orders</span>
            </div>
            <div class="dashboard__indicator-body">
                Indicator 3
            </div>
            <div class="dashboard__indicator-footer"></div>
        </div>
    </div>
</div>
@endsection