<style>
  .navbar {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 9999;
    background: transparent;
    transition: background-color 0.4s ease, box-shadow 0.3s ease;
}



.navbar.fixed-top {
    box-shadow: none;
}




</style>

<header class="header">

 

    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container position-relative">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/logo/FARISLogoheader.png') }}"  alt="logo">
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
                        <ul class="navbar-nav justify-content-end flex-grow-1"  style="color:#021218; font:xx-large;">
                            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/service') }}">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/gallery') }}">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/blogs') }}">News</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/vacancy') }}">Vacancy</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact Us</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

