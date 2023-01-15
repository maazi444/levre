@extends('dashboard_master')
@section('title', 'Order Status - Levre')
@section('dashboard_content')

<div>
    <h1>Change Order Status</h1>
    <form action="{{ route('admin.order.change.status', $orderRecord->order_id) }}" method="POST">
        @csrf
        <div class="role__form_row">
            <input type="radio" name="status" id="status_received" value="1" required>
            <label class="status_label" for="status_received">Received</label>
        </div>
        <div class="role__form_row">
            <input type="radio" name="status" id="status_processed" value="2" required>
            <label class="status_label" for="status_processed">Processed</label>
        </div>
        <div class="role__form_row">
            <input type="radio" name="status" id="status_shipped" value="3" required>
            <label class="status_label" for="status_shipped">Shipped</label>
        </div>
        @if($orderRecord->status == 4)
        <span style="color: #747474; font-style: italic; display: block;">Order has been collected by the customer.</span>
        @endif
        <input type="submit" value="Change Status" style="margin-top: 1em;" class="BlackBtn" {{ ($orderRecord->status == 4)?'disabled':'' }}>
    </form>
</div>

@endsection