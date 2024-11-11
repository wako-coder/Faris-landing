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
                                    <a href="tel:+21236547898"><i class="far fa-phone-volume"></i> +2 123 654 7898</a>
                                </div>
                            </li>
                            <li>
                                <div class="header-top-contact-info">
                                    <a href="mailto:info@example.com"><i class="far fa-envelope"></i>info@example.com</a>
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
        <nav class="navbar navbar-expand-lg">
            <div class="container position-relative">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/logo/FARISLogo-header.png.webp') }}" alt="logo">
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
                            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo">
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Home</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="{{ url('/') }}">Home One</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/index-2') }}">Home Two</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/index-3') }}">Home Three</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="{{ url('/about') }}">About Us</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/team') }}">Our Team</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/pricing') }}">Pricing Plan</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/faq') }}">FAQ's</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/contact') }}">Contact Us</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/testimonial') }}">Testimonials</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">Account</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ url('/login') }}">Login</a></li>
                                            <li><a class="dropdown-item" href="{{ url('/register') }}">Register</a></li>
                                            <li><a class="dropdown-item" href="{{ url('/forgot-password') }}">Forgot Password</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ url('/404') }}">404 Error</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/coming-soon') }}">Coming Soon</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/terms') }}">Terms Of Service</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/privacy') }}">Privacy Policy</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="{{ url('/service') }}">Services One</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/service-2') }}">Services Two</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/service-single') }}">Service Single</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/gallery') }}">Gallery</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="{{ url('/blog') }}">Blog</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/blog-single') }}">Blog Single</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                        </ul>

                        <div class="nav-right">
                            <div class="search-btn">
                                <button type="button" class="nav-right-link search-box-outer"><i class="far fa-search"></i></button>
                            </div>
                            <div class="nav-btn">
                                <a href="{{ url('/contact') }}" class="theme-btn">Let's Talk <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

</header>
