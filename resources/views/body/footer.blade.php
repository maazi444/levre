<footer>
    <div class="footer">
        <div class="row">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
        </div>

        <div class="row">
            <ul>
                <li><a href="{{ route('main.shop') }}">Shop</a></li>
                <li><a href="{{ route('main.about') }}">About</a></li>
                <li><a href="{{ route('main.contact') }}">Contact us</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>

        <div class="row">
            LEVRE Copyright © {{ now()->year }} - All rights reserved
        </div>
    </div>
</footer>