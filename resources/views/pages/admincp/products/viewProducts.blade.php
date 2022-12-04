@extends('dashboard_master')
@section('dashboard_content')
<div class="categories__toolbar">
    <h1 class="medium-heading">Products</h1>
    <a class="toolbar__createBtn" href="{{ route('admin.create.product') }}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
        </svg>
        New Product
    </a>
</div>
<div class="categories__wrapper">
    <div class="categories__table">
        <div class="table-header">
            <div class="header__item"><a id="name" class="filter__link">S#</a></div>
            <div class="header__item"><a id="name" class="filter__link">ID</a></div>
            <div class="header__item"><a id="name" class="filter__link">Image</a></div>
            <div class="header__item"><a id="name" class="filter__link">Name</a></div>
            <div class="header__item"><a id="wins" class="filter__link filter__link--number">Description</a></div>
            <div class="header__item"><a id="draws" class="filter__link filter__link--number">Category</a></div>
            <div class="header__item"><a id="draws" class="filter__link filter__link--number">Price</a></div>
            <div class="header__item"><a id="draws" class="filter__link filter__link--number">Quantity</a></div>
            <div class="header__item"><a id="draws" class="filter__link filter__link--number">Dated</a></div>
            <div class="header__item"><a id="losses" class="filter__link filter__link--number">Actions</a></div>
            <!-- <div class="header__item"><a id="total" class="filter__link filter__link--number">Total</a></div> -->
        </div>
        <div class="table-content">
            @foreach($allData as $key => $product)
            <div class="table-row">
                <div class="table-data"><strong>{{ $key+1 }}</strong></div>
                <div class="table-data prodid_col">
                    <span>
                        <strong>{{ $product->prodid }}</strong>
                    </span>
                </div>
                <div class="table-data">
                    <img src="{{ asset('upload/images/'.$product->image) }}" alt="{{ $product->name }}" style="height: 100px">
                </div>
                <div class="table-data">{{ $product->name }}</div>
                <div class="table-data product__descCell">
                    <p>
                        {{ $product->description }}
                    </p>
                </div>
                <div class="table-data"><strong>{{ $product['product_category']['name'] }}</strong></div>
                <div class="table-data">${{ $product->price }}</div>
                <div class="table-data">{{ $product->quantity }} Pieces</div>
                <div class="table-data">
                    @if($product->created_at == NULL)
                    <span class="text-danger"> No Date Set</span>
                    @else
                    {{ Carbon\Carbon::parse($product->created_at)->diffForHumans() }}
                    @endif
                </div>
                <div class="table-data">
                    <a href="{{ route('admin.edit.product', $product->id) }}" class="category__btn category__transBtn">Edit</a>
                    <a href="{{ route('admin.delete.product', $product->id) }}" class="category__btn category__blackBtn" id="delete">Delete</a>
                </div>
            </div>
            @endforeach
            {{ $allData->links() }}
        </div>
    </div>
</div>
@endsection