<header class="header">

    <div class="header-top">
        <div class="container">
            <div class="header-top-wrap">
                <div class="header-top-left">
                    <div class="header-top-social">
                        <span>Follow Us:</span>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-x-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="header-top-right">
                    <div class="header-top-contact">
                        <ul>
                            <li>
                                <div class="header-top-contact-info">
                                    <a href="tel:+25136547898"><i class="far fa-phone-volume"></i> +2 513 654 7898</a>
                                </div>
                            </li>
                            <li>
                                <div class="header-top-contact-info">
                                    <a href="mailto:info@faris.com"><i class="far fa-envelope"></i>info@faristechnologies.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="header-top-contact-info">
                                    <a href="#"><i class="far fa-clock"></i> Sun - Fri (08AM - 10PM)</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg" style="z-index: 99999">
            <div class="container position-relative">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/logo/FARISLogo-header.png.webp') }}" style="height: 120px;" alt="logo">
                </a>
                <div class="mobile-menu-right">
                    <div class="mobile-menu-btn">
                        <a href="#" class="nav-right-link search-box-outer"><i class="far fa-search"></i></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <a href="{{ url('/') }}" class="offcanvas-brand" id="offcanvasNavbarLabel">
                            <img src="{{ asset('assets/img/logo/FARISLogo-header.png.webp') }}" alt="Logo">
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1">
                            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/service') }}">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/gallery') }}">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/blogs') }}">News</a></li>
                            <li class="nav-item d-lg-none"><a class="nav-link" href="{{ url('/contact') }}">Contact Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/vacancy') }}">Vacancy</a></li>
                        </ul>

                        <div class="nav-right">
                            <div class="nav-btn">
                                <a href="{{ url('/contact') }}" class="theme-btn">Contact Us<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

</header>
