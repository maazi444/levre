@extends('main_master')
@section('title', 'Categories - Levre')
@section('main')
<section class="cat_hero">
    <div class="cat_hero__text">
        <h1 class="large-heading">Carefully selected beauty products</h1>
        <p class="large-paragraph">Our team carefully selects only the best products that have toxic-free formulas and are not tested on animals.</p>
    </div>
</section>
<section class="cat__wrapper">
    <div class="cat__col1">
        <!-- Featured Product Start -->
        <div class="cat__item">
            <div class="cat__itemInner">
                <a href="{{ route('main.category.view', 3) }}" class="cat__link"></a>
                <div class="cat__details">
                    <div class="cat__innerDetails">
                        <h1 class="medium-heading">Eyeliners</h1>
                        <div class="cat__viewBtn">
                            <span>View</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="cat__thumbnail">
                    <img src="{{ asset('frontend/img/product_eyeliner.jpg') }}" class="cat__overlay" alt="">
                </div>
            </div>
        </div>
        <!-- Featured Product End -->

        <!-- Featured Product Start -->
        <div class="cat__item">
            <div class="cat__itemInner">
                <a href="{{ route('main.category.view', 1) }}" class="cat__link"></a>
                <div class="cat__details">
                    <div class="cat__innerDetails">
                        <h1 class="medium-heading">Lipsticks</h1>
                        <div class="cat__viewBtn">
                            <span>View</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="cat__thumbnail">
                    <img src="{{ asset('frontend/img/product9_large.webp') }}" class="cat__overlay" alt="">
                </div>
            </div>
        </div>
        <!-- Featured Product End -->
    </div>
    <div class="cat__col2">
        <!-- Featured Product Start -->
        <div class="cat__item">
            <div class="cat__itemInner">
                <a href="{{ route('main.category.view', 4) }}" class="cat__link"></a>
                <div class="cat__details">
                    <div class="cat__innerDetails">
                        <h1 class="medium-heading">Perfumes</h1>
                        <div class="cat__viewBtn">
                            <span>View</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="cat__thumbnail">
                    <img src="{{ asset('frontend/img/perfume_category.jpg') }}" class="cat__overlay" alt="">
                </div>
            </div>
        </div>
        <!-- Featured Product End -->

        <!-- Featured Product Start -->
        <div class="cat__item">
            <div class="cat__itemInner">
                <a href="{{ route('main.category.view', 2) }}" class="cat__link"></a>
                <div class="cat__details">
                    <div class="cat__innerDetails">
                        <h1 class="medium-heading">Foundations</h1>
                        <div class="cat__viewBtn">
                            <span>View</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="cat__thumbnail">
                    <img src="{{ asset('frontend/img/product31_large.webp') }}" class="cat__overlay" alt="">
                </div>
            </div>
        </div>
        <!-- Featured Product End -->
    </div>
</section>
@endsection