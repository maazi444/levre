@extends('dashboard_master')
@section('title', 'Manage Orders - Levre')
@section('dashboard_content')
<div class="categories__toolbar">
    <h1 class="medium-heading">Orders</h1>
</div>
<div>
    @if(session()->has('message'))
    <div class="success-message">
        {{ session()->get('message') }}
    </div>
    @endif
</div>

<div class="customer__outer">
    <div class="customer__table">
        <table class="orders__table">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Date</th>
                    <th>Customer</th>
                    <th>Status</th>
                    <th>Items</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orderRecord as $orderid => $order)
                @php
                $key = 0;
                $itemCount = 0;
                $totalPrice = 0;
                @endphp
                <tr>
                    <td>#{{ $orderid }}</td>
                    <td>
                        {{ date('d-m-Y', strtotime($order[0]->created_at)) }}
                    </td>
                    <td>
                        {{ $order[$key]['UserDetail']['name'] }}
                    </td>
                    <td>
                        @if($order[0]->status == 1)
                        New
                        @elseif($order[0]->status == 2)
                        Processed
                        @elseif($order[0]->status == 3)
                        Shipped
                        @elseif($order[0]->status == 4)
                        Collected
                        @endif
                    </td>
                    <td>
                        @foreach($order as $id)
                        @php
                        $itemCount++;
                        @endphp
                        @endforeach
                        {{ $itemCount }} items
                    </td>
                    <td>

                        @foreach($order as $id)
                        @php
                        $prodQuantity = $order[$key]->prod_quantity;
                        $prodPrice = $order[$key]['OrderDetail']['price'];
                        $prodTotal = $prodQuantity * $prodPrice;
                        $totalPrice += $prodTotal;
                        $key++;
                        @endphp
                        @endforeach
                        ${{ $totalPrice }}
                    </td>
                    <td class="action-menu-td">
                        <button class="admin-order-action-icon" id="actionBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="order-action-btn-svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                            </svg>
                        </button>
                        <div class="admin-order-action-menu" id="actionMenu">
                            <ul>
                                <!-- <li><a href="">Approve</a></li> -->
                                <li>
                                    <a href="{{ route('admin.order.detail', $order[0]->order_id) }}">View Order</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.order.status', $order[0]->order_id) }}">Change Status</a>
                                </li>
                                <hr>
                                <li class="action-menu-delBtn">
                                    <a href="{{ route('admin.delete.order', $order[0]->order_id) }}" class="text-danger">Delete</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    var actionBtns = document.querySelectorAll('#actionBtn');

    // console.log(actionBtn);

    actionBtns.forEach(actionBtn => {
        actionBtn.addEventListener('click', function handleClick(event) {
            var actionMenu = actionBtn.closest('.action-menu-td').querySelector('#actionMenu');
            actionMenu.classList.toggle('showActionMenu');

        });
    });

    window.onclick = function(event) {
        if (!event.target.matches('.order-action-btn-svg')) {
            var sharedowns = document.getElementsByClassName("admin-order-action-menu");
            var i;
            for (i = 0; i < sharedowns.length; i++) {
                var openSharedown = sharedowns[i];
                if (openSharedown.classList.contains('showActionMenu')) {
                    openSharedown.classList.remove('showActionMenu');
                }
            }
        }
    }

    document.getElementById("actionMenu").addEventListener('click', function(event) {
        event.stopPropagation();
    });
</script>
@endsection