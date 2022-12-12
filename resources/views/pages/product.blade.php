@extends('main_master')
@section('title', $product->name.' - Levre')
@section('main')
<section class="prod__wrapper">
    <div class="prod__inner">
        <div class="prod__breadCrumb">
            <span class="prod__breadCrumbItem"><a href="{{ route('main.shop') }}">Shop</a> / <a href="#">{{ $product['product_category']['name'] }}</a>/</span>
        </div>
        <article class="prod__row">
            <!-- Product Image Column Start -->
            <div class="prod__col prod__imageCol">
                <img class="prod__image" src="{{ asset('upload/images/'.$product->image) }}" alt="">
            </div>
            <!-- Product Image Column End -->

            <!-- Product Detail Column Start -->
            <div class="prod__col">
                <h1 class="medium-heading">{{ $product->name }}</h1>
                <p class="medium-paragraph">Price: ${{ $product->price }}</p>
                <p class="description-paragraph prod__desc">{{ $product->description }}</p>
                <div class="prod__cartRow">
                    <form action="{{ route('add.to.cart', $product->prodid) }}" method="POST">
                        @csrf
                        <!-- Product Counter Start -->
                        <div class="product-count">
                            <span class="button-count" id="minusBtn">-</span>
                            <input type="text" readonly class="number-product" id="prodNum" name="prod_quantity" value="1">
                            <span class="button-count" id="plusBtn">+</span>
                        </div>
                        <!-- Product Counter End -->
                        <input type="hidden" name="prodid" id="prodid" value="$product->prodid">
                        <!-- Product Add to Cart Start -->
                        <input class="prod__addCartBtn" type="submit" value="Add to Cart">
                        <!-- Product Add to Cart End -->
                    </form>

                </div>
                <!-- Added to Cart Message -->
                @if(session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
                @endif

                <span class="product__categoryText">Category: {{ $product['product_category']['name'] }}</span>
                <span class="product__prodidText">SKU: {{ $product->prodid }}</span>
                <span class="product__prodidText product__noteText">* Note: All products are delievered in 7 business days</span>
            </div>
            <!-- Product Detail Column End -->
        </article>
        <article class="relpro__wrapper">
            <h1 class="relpro__mainHeading medium-heading">Related Products</h1>
            <section class="splide" role="group">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach($relatedproducts as $relpro)
                        <li class="splide__slide">
                            <div class="splide__slide__container">
                                <a href="{{ route('main.product',$relpro->prodid) }}">
                                    <img src="{{ asset('upload/images/'.$relpro->image) }}" alt="{{ $relpro->name }}">
                                </a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </section>
        </article>
    </div>
</section>
<script>
    $(function() {
        var num;

        $('#minusBtn').click(function() {
            num = parseInt($('#prodNum').val());
            if (num > 1) {
                $('#prodNum').val(num - 1);

            }
            if (num == 1) {
                $('#minusBtn').prop('disabled', true);
            }
            if (num == 10) {
                $('#minusBtn').prop('disabled', false);
            }
            if (num < 10) {
                $('#plusBtn').prop('disabled', false);
            }
        });

        $('#plusBtn').click(function() {
            num = parseInt($('#prodNum').val());

            if (num < 10) {
                $('#prodNum').val(num + 1);
            }
            if (num > 0) {
                $('#plusBtn').prop('disabled', false);
                $('#minusBtn').prop('disabled', false);
            }
            if (num == 9) {
                $('#plusBtn').prop('disabled', true);
            }
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var splide = new Splide(".splide", {
            perPage: 3,
            breakpoints: {
                1024: {
                    perPage: 2,
                },
                768: {
                    perPage: 1,
                },
            },
            rewind: true,
            pagination: false,
        });
        splide.mount();
    });
</script>
@endsection