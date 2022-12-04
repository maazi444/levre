@extends('main_master')
@section('title', 'Levre - Shop all kinds of cosmetics')
@section('main')
<section class="hero">
    <div class="hero__text">
        <h1 class="large-heading">Beauty products that really work.</h1>
        <p class="large-paragraph">Our formulations have proven efficacy, contain organic ingredients only and are 100% cruelty free.</p>
        <div class="hero__buttons">
            <a class="hero__blackBtn">Skincare</a>
            <a href="{{ route('main.shop') }}" class="hero__transBtn">Shop All</a>
        </div>
    </div>
</section>
<div class="marquee">
    <div class="track">
        <div class="content">&nbsp;&nbsp;&nbsp; Proven Efficacy &nbsp;&nbsp;&nbsp; Free shipping on orders over $30 &nbsp;&nbsp;&nbsp; Cruelty Free &nbsp;&nbsp;&nbsp; For any occasion &nbsp;&nbsp;&nbsp; Organic Ingredients &nbsp;&nbsp;&nbsp; Proven Efficacy &nbsp;&nbsp;&nbsp; Free shipping on orders over $30 &nbsp;&nbsp;&nbsp; Cruelty Free &nbsp;&nbsp;&nbsp; For any occasion &nbsp;&nbsp;&nbsp; Organic Ingredients &nbsp;&nbsp;&nbsp; Proven Efficacy &nbsp;&nbsp;&nbsp; Free shipping on orders over $30 &nbsp;&nbsp;&nbsp; Cruelty Free &nbsp;&nbsp;&nbsp; For any occasion &nbsp;&nbsp;&nbsp; Organic Ingredients</div>
    </div>
</div>
<section class="homeCategory">
    <div class="homeCategory__images">
        <div class="homeCategory__col1">
            <!-- Featured Product Start -->
            <div class="homeCategory__item">
                <div class="homeCategory__itemInner">
                    <a href="#" class="homeCategory__link"></a>
                    <div class="homeCategory__details">
                        <div class="homeCategory__innerDetails">
                            <h1 class="medium-heading">Lotions</h1>
                            <div class="homeCategory__viewBtn">
                                <span>View</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="homeCategory__thumbnail">
                        <img src="{{ asset('frontend/img/product28_large.webp') }}" class="homeCategory__overlay" alt="">
                    </div>
                </div>
            </div>
            <!-- Featured Product End -->
            <!-- Featured Product Start -->
            <div class="homeCategory__item">
                <div class="homeCategory__itemInner">
                    <a href="#" class="homeCategory__link"></a>
                    <div class="homeCategory__details">
                        <div class="homeCategory__innerDetails">
                            <h1 class="medium-heading">Lipsticks</h1>
                            <div class="homeCategory__viewBtn">
                                <span>View</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="homeCategory__thumbnail">
                        <img src="{{ asset('frontend/img/product9_large.webp') }}" class="homeCategory__overlay" alt="">
                    </div>
                </div>
            </div>
            <!-- Featured Product End -->
        </div>
        <div class="homeCategory__col2">
            <!-- Featured Product Start -->
            <div class="homeCategory__item">
                <div class="homeCategory__itemInner">
                    <a href="#" class="homeCategory__link"></a>
                    <div class="homeCategory__details">
                        <div class="homeCategory__innerDetails">
                            <h1 class="medium-heading">Perfume</h1>
                            <div class="homeCategory__viewBtn">
                                <span>View</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="homeCategory__thumbnail">
                        <img src="{{ asset('frontend/img/product29_large.webp') }}" class="homeCategory__overlay" alt="">
                    </div>
                </div>
            </div>
            <!-- Featured Product End -->
            <!-- Featured Product Start -->
            <div class="homeCategory__item">
                <div class="homeCategory__itemInner">
                    <a href="#" class="homeCategory__link"></a>
                    <div class="homeCategory__details">
                        <div class="homeCategory__innerDetails">
                            <h1 class="medium-heading">Foundation</h1>
                            <div class="homeCategory__viewBtn">
                                <span>View</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="homeCategory__thumbnail">
                        <img src="{{ asset('frontend/img/product31_large.webp') }}" class="homeCategory__overlay" alt="">
                    </div>
                </div>
            </div>
            <!-- Featured Product End -->
        </div>
    </div>
    <div class="homeCategory__text">
        <h1 class="large-heading">Discover our products</h1>
        <p class="large-paragraph">We have skincare, Lipstick, Foundations and amazing fragrance range. For any occasion.</p>
    </div>
</section>
<section class="bestseller">
    <div class="bestseller__content">
        <h1 class="large-heading">Our bestsellers</h1>
        <a class="hero__transBtn">Shop All</a>
    </div>
    <div class="bestseller__slider">
        <section class="splide" role="group">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="splide__slide__container">
                            <a href="#">
                                <img src="{{ asset('frontend/img/prod1.webp') }}" alt="">
                            </a>
                        </div>
                        <h4 class="bestseller__sliderHeading">Facial Balancing Gel</h4>
                    </li>
                    <li class="splide__slide">
                        <div class="splide__slide__container">
                            <a href="#">
                                <img src="{{ asset('frontend/img/prod2.webp') }}" alt="">
                            </a>
                        </div>
                        <h4 class="bestseller__sliderHeading">Facial Balancing Gel</h4>
                    </li>
                    <li class="splide__slide">
                        <div class="splide__slide__container">
                            <a href="#">
                                <img src="{{ asset('frontend/img/prod3.webp') }}" alt="">
                            </a>
                        </div>
                        <h4 class="bestseller__sliderHeading">Facial Balancing Gel</h4>
                    </li>
                    <li class="splide__slide">
                        <div class="splide__slide__container">
                            <a href="#">
                                <img src="{{ asset('frontend/img/prod4.webp') }}" alt="">
                            </a>
                        </div>
                        <h4 class="bestseller__sliderHeading">Facial Balancing Gel</h4>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</section>

<section class="homecta">
    <div class="homecta__content">
        <div>
            <h1 class="large-heading">Our philosophy</h1>
            <p class="large-paragraph">All products we produce have proven efficacy. We test all product ranges and guarantee their quality.</p>
            <a class="hero__transBtn">Learn More</a>
        </div>
    </div>
</section>

<section class="sitefeatures">
    <div class="sitefeatures__content">
        <!-- Site Feature Col Start -->
        <div class="sitefeatures__col">
            <span class="sitefeatures__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <path d="M10.2461 39.7502L19.3238 19.5H24H28.6762L37.7539 39.7502C39.3851 43.389 36.7228 47.5 32.7351 47.5H15.2649C11.2772 47.5 8.61493 43.389 10.2461 39.7502Z" fill="white" stroke="black"></path>
                    <path d="M18.5 26.5L18 25.5L18.5 23.5L19.5 21.5H28.5L29 22L29.5 23.5L30 25V26V27.5L28.5 28L26.5 27.5L25.5 27L24.5 25.5H22.5H20L18.5 26.5Z" fill="white"></path>
                    <rect x="20" y="14" width="8" height="11" fill="white"></rect>
                    <path d="M19.5 19V13.5H28.5V19" stroke="black"></path>
                    <rect x="17.5" y="10.5" width="13" height="3" fill="white" stroke="black"></rect>
                    <path d="M15.5 27.5C17.3333 26.6667 21.4 25.1 23 25.5C25 26 27 30.5 31.5 26.5" stroke="black"></path>
                    <path d="M24 34.8166C22.64 33.2166 20 34.0966 20 36.3366C20 38.5766 22.4 39.6966 24 41.2966C25.6 39.6966 28 38.5766 28 36.3366C28 34.0966 25.36 33.2166 24 34.8166Z" fill="white" stroke="black" stroke-miterlimit="10"></path>
                    <circle cx="38.5" cy="10.5" r="2" fill="white" stroke="black"></circle>
                    <circle cx="28.5" cy="2.5" r="2" fill="white" stroke="black"></circle>
                </svg>
            </span>
            <h4>Ethical Business</h4>
            <p>Only green beauty products</p>
        </div>
        <!-- Site Feature Col End -->
        <!-- Site Feature Col Start -->
        <div class="sitefeatures__col">
            <span class="sitefeatures__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <g clip-path="url(#clip0)">
                        <path d="M20.5 12.5H47C47.2761 12.5 47.5 12.7239 47.5 13V39.5H20.5L20.5 12.5Z" fill="white" stroke="black"></path>
                        <path d="M39.5 24.443C39.5 26.1375 38.887 27.2047 37.8682 28.2066C37.3459 28.7203 36.7205 29.2125 36.0038 29.7638C35.926 29.8236 35.8472 29.8841 35.7674 29.9453C35.2137 30.3703 34.615 30.8298 33.9942 31.3491C33.4196 30.8842 32.8689 30.4667 32.3581 30.0795C32.2158 29.9716 32.0766 29.8661 31.9409 29.7626C31.2202 29.2128 30.5996 28.7211 30.0867 28.2092C29.0872 27.2117 28.5 26.1445 28.5 24.4429C28.5 22.8352 29.4113 21.8566 30.4424 21.5816C31.471 21.3073 32.7173 21.7061 33.4647 23.0942C33.6932 23.5185 34.3068 23.5184 34.5353 23.0942C35.2827 21.706 36.529 21.3073 37.5576 21.5816C38.5887 21.8566 39.5 22.8352 39.5 24.443Z" fill="white" stroke="black"></path>
                        <path d="M20.3293 39.3293L15.5 34.5V8.5H42.5L47.5 12.5H20.5V39.2586C20.5 39.3477 20.3923 39.3923 20.3293 39.3293Z" fill="white"></path>
                        <path d="M15.5 8.5V34.5L20.3293 39.3293C20.3923 39.3923 20.5 39.3477 20.5 39.2586V12.5M15.5 8.5L20.5 12.5M15.5 8.5H42.5L47.5 12.5H20.5" stroke="black"></path>
                        <path d="M29.5 8.5L33.5 12.5" stroke="black"></path>
                        <rect x="4" y="25" width="5" height="1" fill="black"></rect>
                        <rect x="2" y="21" width="7" height="1" fill="black"></rect>
                        <rect y="17" width="9" height="1" fill="black"></rect>
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="48" height="48" fill="white"></rect>
                        </clipPath>
                    </defs>
                </svg>
            </span>
            <h4>Shipped free & with love</h4>
            <p>On orders above $50.</p>
        </div>
        <!-- Site Feature Col End -->
        <!-- Site Feature Col Start -->
        <div class="sitefeatures__col">
            <span class="sitefeatures__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="49" viewBox="0 0 48 49" fill="none">
                    <path d="M14.5 24.7262C10.59 20.0898 3 22.6398 3 29.1307C3 35.6217 9.9 38.8671 14.5 43.5035C19.1 38.8671 26 35.6217 26 29.1307C26 22.6398 18.41 20.0898 14.5 24.7262Z" fill="white" stroke="black" stroke-miterlimit="10"></path>
                    <path d="M36.5 10.0671C33.61 6.53462 28 8.47748 28 13.4229C28 18.3684 33.1 20.8411 36.5 24.3736C39.9 20.8411 45 18.3684 45 13.4229C45 8.47748 39.39 6.53462 36.5 10.0671Z" fill="white" stroke="black" stroke-miterlimit="10"></path>
                    <path d="M7 29.4077C7 27.7395 8.34315 26.3872 10 26.3872" stroke="black"></path>
                </svg>
            </span>
            <h4>Delivered in 7 business days</h4>
            <p>And packaged with love.</p>
        </div>
        <!-- Site Feature Col End -->
        <!-- Site Feature Col Start -->
        <div class="sitefeatures__col">
            <span class="sitefeatures__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <path d="M14.5 28.8636H14.2726L14.1235 29.0347L14.1234 29.0347L14.1234 29.0348L14.1232 29.035L14.1225 29.0357L14.1173 29.0416L14.0935 29.068C14.0717 29.092 14.0383 29.1282 13.9937 29.1751C13.9045 29.2687 13.7709 29.4045 13.5974 29.5683C13.25 29.8963 12.7451 30.3343 12.1182 30.7718C10.8932 31.6266 9.24498 32.4498 7.41759 32.4978C7.39815 32.4259 7.37888 32.3198 7.36563 32.1736C7.3274 31.7517 7.35207 31.1636 7.40812 30.5451C7.46353 29.9336 7.54697 29.3193 7.61695 28.8559C7.65187 28.6247 7.68327 28.4322 7.70589 28.2978C7.7172 28.2306 7.7263 28.178 7.73254 28.1424L7.73966 28.1021L7.74145 28.0921L7.74188 28.0897L7.74197 28.0892L7.74198 28.0892L7.74199 28.0891L7.81097 27.7086L7.45991 27.5462C3.38514 25.6614 0.5 22.5557 0.5 18.9091C0.5 16.0886 2.01836 13.4976 4.54755 11.5947C7.07696 9.69175 10.594 8.5 14.5 8.5C18.406 8.5 21.923 9.69175 24.4524 11.5947C26.9816 13.4976 28.5 16.0886 28.5 18.9091C28.5 21.7241 26.9873 24.1986 24.4638 25.9878C21.9369 27.7795 18.4169 28.8636 14.5 28.8636Z" fill="white" stroke="black"></path>
                    <path d="M15.9275 17C15.9275 17.3547 15.8202 17.7 15.6055 18.036C15.3908 18.3627 15.0828 18.6333 14.6815 18.848C14.2802 19.0627 13.7995 19.17 13.2395 19.17H12.8755L13.1555 21.62H13.9955L14.0935 19.94C14.6162 19.912 15.1015 19.7673 15.5495 19.506C15.9975 19.2353 16.3615 18.8853 16.6415 18.456C16.9215 18.0173 17.0615 17.532 17.0615 17C17.0615 16.58 16.9822 16.1927 16.8235 15.838C16.6742 15.4833 16.4595 15.1753 16.1795 14.914C15.9088 14.6433 15.5868 14.4333 15.2135 14.284C14.8495 14.1347 14.4482 14.06 14.0095 14.06C13.4588 14.06 12.9922 14.13 12.6095 14.27C12.2362 14.4007 11.9188 14.592 11.6575 14.844C11.3962 15.0867 11.1582 15.3713 10.9435 15.698L11.8535 16.272C12.0682 15.9173 12.3388 15.6373 12.6655 15.432C13.0015 15.2173 13.4028 15.11 13.8695 15.11C14.2895 15.11 14.6535 15.1847 14.9615 15.334C15.2695 15.4833 15.5075 15.698 15.6755 15.978C15.8435 16.258 15.9275 16.5987 15.9275 17ZM12.8335 23.44C12.8335 23.6453 12.9082 23.8273 13.0575 23.986C13.2162 24.1353 13.3982 24.21 13.6035 24.21C13.8182 24.21 14.0002 24.1353 14.1495 23.986C14.2988 23.8273 14.3735 23.6453 14.3735 23.44C14.3735 23.2253 14.2988 23.0433 14.1495 22.894C14.0002 22.7447 13.8182 22.67 13.6035 22.67C13.3982 22.67 13.2162 22.7447 13.0575 22.894C12.9082 23.0433 12.8335 23.2253 12.8335 23.44Z" fill="black"></path>
                    <path d="M32 40H32.2269L32.376 40.1705L32.3761 40.1705L32.3761 40.1706L32.3763 40.1707L32.3772 40.1718L32.3831 40.1784L32.4097 40.2079C32.434 40.2345 32.4712 40.2747 32.5207 40.3265C32.6197 40.4301 32.7677 40.5801 32.9599 40.7609C33.3446 41.123 33.9037 41.6065 34.598 42.0895C35.9626 43.0388 37.8067 43.9565 39.8539 43.9985C39.8805 43.9151 39.9068 43.7835 39.9239 43.5954C39.9665 43.1267 39.939 42.4762 39.8771 41.7953C39.8158 41.1213 39.7236 40.4445 39.6463 39.9343C39.6077 39.6797 39.573 39.4676 39.548 39.3196C39.5355 39.2456 39.5254 39.1876 39.5185 39.1483L39.5107 39.1038L39.5087 39.0927L39.5082 39.0901L39.5081 39.0895L39.5081 39.0894L39.5081 39.0894L39.4387 38.7082L39.7906 38.5459C44.2952 36.4688 47.5 33.0391 47.5 29C47.5 25.879 45.8144 23.0153 43.0137 20.9147C40.2128 18.8141 36.3206 17.5 32 17.5C27.6794 17.5 23.7872 18.8141 20.9863 20.9147C18.1856 23.0153 16.5 25.879 16.5 29C16.5 32.1156 18.1799 34.8514 20.9749 36.827C23.7733 38.805 27.6685 40 32 40Z" fill="white" stroke="black"></path>
                    <circle cx="24.5" cy="28.5" r="2" fill="white" stroke="black"></circle>
                    <circle cx="31.5" cy="28.5" r="2" fill="white" stroke="black"></circle>
                    <circle cx="38.5" cy="28.5" r="2" fill="white" stroke="black"></circle>
                </svg>
            </span>
            <h4>Personalized experience</h4>
            <p>Free consultations via email.</p>
        </div>
        <!-- Site Feature Col End -->
    </div>
</section>

<section class="foundermsg">
    <div>
        <h2 class="medium-heading">From Founder</h2>
        <p class="foundermsg__text large-paragraph">
            “For a long time I was looking to create a new beauty brand that is different. Our beauty experts use ingredients that work and that everyone understands.”
        </p>
        <a href="{{ route('main.about') }}" class="foundermsg__link">Learn More About Us</a>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

<!-- For Slider -->

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