<header>
    <div class="header__desktopNav">
        <a class="header__logo" href="{{ url('/') }}">
            <img src="{{ asset('frontend/img/logo.svg') }}" alt="Levre" />
        </a>
        <div class="header__links">
            <a class="header__linkLtr" href="{{ route('main.home') }}">Home</a>
            <a class="header__linkLtr" href="{{ route('main.shop') }}">Shop</a>
            <a class="header__linkLtr" href="{{ route('main.categories') }}">Categories</a>
            <a class="header__linkLtr" href="{{ route('main.about') }}">About</a>
            <a class="header__linkLtr" href="{{ route('main.contact') }}">Contact</a>
        </div>
        <div class="header__actions">
            <a class="header__wishlist" href="#"><img src="{{ asset('frontend/img/heart-icon.svg') }}" alt="Levre Wishlist" /></a>
            <a class="header__profile" href="{{ route('login') }}"><img src="{{ asset('frontend/img/profile.svg') }}" alt="Levre User" /></a>
            <button class="header__cartBtn">
                <img src="{{ asset('frontend/img/cart-icon.svg') }}" alt="Levre Navigation" />
                <span class="cart-item-counter">0</span>
            </button>
            <button class="header__mobileBtn">
                <img src="{{ asset('frontend/img/bars.svg') }}" alt="Levre Navigation" />
            </button>
        </div>
    </div>
    <div class="header__mobileNav">
        <ul>
            <li><a href="{{ route('main.home') }}">Home</a></li>
            <li><a href="{{ route('main.shop') }}">Shop</a></li>
            <li><a href="{{ route('main.categories') }}">Categories</a></li>
            <li><a href="{{ route('main.about') }}">About</a></li>
            <li><a href="{{ route('main.contact') }}">Contact</a></li>
            <li>
                <a class="header__wishlist-mobile" href="#"><img src="{{ asset('frontend/img/heart-icon.svg') }}" alt="Levre Wishlist" /></a>
                <a class="header__profile-mobile" href="{{ route('login') }}"><img src="{{ asset('frontend/img/profile.svg') }}" alt="Levre User" /></a>
            </li>
        </ul>
    </div>
</header>