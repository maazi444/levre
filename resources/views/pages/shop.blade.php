@extends('main_master')
@section('title', 'Shop - Levre')
@section('main')
<section class="cat_hero">
    <div class="cat_hero__text">
        <h1 class="large-heading shop__mainHeading">Carefully selected beauty products</h1>
        <p class="large-paragraph shop__mainParagraph">Our team carefully selects only the best products that have toxic-free formulas and are not tested on animals.</p>
    </div>
</section>
<section class="cat__wrapper product__shopWrapper">
    @if(count($product_records) < 1) <span><strong>No Items Found</strong></span>

        @else
        <ul class="shop__productDisplay">
            @foreach($product_records as $product)
            <!-- Product Card Start -->
            <li class="splide__slide splide__card">
                <div class="splide__slide__container card_container">
                    <a href="{{ route('main.product',$product->prodid) }}">
                        <img src="{{ asset('upload/images/'.$product->image) }}" alt="">
                    </a>
                </div>
                <a href="{{ route('main.product',$product->prodid) }}">
                    <h4 class="bestseller__sliderHeading">{{ $product->name }}</h4>
                    <span class="product__cardPriceTag">Price: ${{ $product->price }}</span>
                </a>
            </li>
            <!-- Product Card End -->
            @endforeach()
        </ul>
        @endif
</section>
@endsection