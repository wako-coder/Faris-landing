<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content>
    <meta name="keywords" content>

    <title>FARIS Technology – Better Technology, Better Business.</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo/WhiteMinilogo.png.webp') }}">
    {{-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet"> --}}

    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all-fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
    <style>
     :root {
    --body-font: 'Roboto', sans-serif;
    --heading-font: 'Montserrat', sans-serif; /* Clean and structured, similar to Europa Grotesk */
} 
.choose-item:nth-child(2) {
    margin-left: 0px;
}  
.cta-area {
    padding-top: 80px;
    padding-bottom: 80px;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    position: relative;
    z-index: 1
}

.cta-area2::before {
    content: "";
    position: absolute;
    background: rgba(9, 15, 39, 0.6);
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    z-index: -1
}   
.cta-area2 {
    padding-top: 80px;
    padding-bottom: 180px;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    position: relative;
    z-index: 1
}

.cta-area2::before {
    content: "";
    position: absolute;
    background: rgba(9, 15, 39, 0.6);
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    z-index: -1
}
.cta-area3 {
    padding-top: 80px;
    padding-bottom: 180px;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    position: relative;
    z-index: 1
}

.cta-area3::before {
    content: "";
    position: absolute;
    background: rgba(255, 255, 255, 0.6);
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    z-index: -1
}
.cta-area4 {
    padding-top: 80px;
    padding-bottom: 20px;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    position: relative;
    z-index: 1
}

.cta-area4::before {
    content: "";
    position: absolute;
    background: rgba(0, 40, 58, .6);
    width: 100%;
    height: 90%;
    left: 0;
    top: 0;
    z-index: -1
}

  .hero-section {
            position: relative;
            overflow: hidden;
        }

        .hero-single {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 100vh; /* Full viewport height */
        }


        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures the video covers the entire background */
            z-index: -1; /* Places the video behind the content */
        }

        .container, .hero-content {
            position: relative;
            z-index: 1; /* Ensures content is above the video */
        }

        .hero-content {
            color: #fff; /* Ensures text is visible on video */
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7); /* Adds contrast to the text */
        }

        .owl-carousel .owl-stage-outer {
            overflow: hidden; /* Ensures smooth sliding effect */
        }

        :root {
    --theme-color: #27a9dd;
    --theme-color2: #1D4D72;
    --color-dark: #00000 /* A dark blue that complements the lighter primary blue */
}
.hero-single .hero-content .theme-btn2, {
    color: black;
    box-shadow: 0px 0px 0px rgba(255, 255, 255, 0.3);
}
 .theme-btn {
     box-shadow: 0px 0px 0px rgba(255, 255, 255, 0.1);
    }
    .hero-content, {
        
        color: black;
    box-shadow: 0px 0px 0px rgba(255, 255, 255, 0.1);
}
.hero-single::before{
    /* background: linear-gradient(to bottom right, rgba(0, 39, 57, 0.95) 100%, rgba(0, 0, 0, 0.1) 100%); */
    background: linear-gradient(to bottom right, rgba(0, 39, 57, 0) 0%, rgba(0, 0, 0, 0) 100%);

    /* background: #fff; */
}
.navbar .nav-item .nav-link{
    font-size: 1.25rem;
}

.hero-slider.owl-theme .owl-nav [class*=owl-] {
    background: transparent;
    color: white;
}
.wrapper {
  width: 90%;
  max-width: 1536px;
  margin-inline: auto;
  position: relative;
  height: 100px;
  margin-top: 2rem;
  margin-bottom: 2rem;
  overflow: hidden;
  mask-image: linear-gradient(
    to right,
    rgba(0, 0, 0, 0),
    rgba(0, 0, 0, 1) 20%,
    rgba(0, 0, 0, 1) 80%,
    rgba(0, 0, 0, 0)
  );
}

@keyframes scrollLeft {
  to {
    left: -200px;
  }
}

.item {
  width: 200px;
  height: 100px;
  border-radius: 6px;
  position: absolute;
  left: max(calc(200px * 8), 100%);
  animation-name: scrollLeft;
  animation-duration: 65s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
}

.item1 {
  animation-delay: calc(65s / 24 * (24 - 1) * -1);
}

.item2 {
  animation-delay: calc(65s / 24 * (24 - 2) * -1);
}

.item3 {
  animation-delay: calc(65s / 24 * (24 - 3) * -1);
}

.item4 {
  animation-delay: calc(65s / 24 * (24 - 4) * -1);
}

.item5 {
  animation-delay: calc(65s / 24 * (24 - 5) * -1);
}

.item6 {
  animation-delay: calc(65s / 24 * (24 - 6) * -1);
}

.item7 {
  animation-delay: calc(65s / 24 * (24 - 7) * -1);
}

.item8 {
  animation-delay: calc(65s / 24 * (24 - 8) * -1);
}
.item9 {
  animation-delay: calc(65s / 24 * (24 - 9) * -1);
}
.item10 {
  animation-delay: calc(65s / 24 * (24 - 10) * -1);
}
.item11 {
  animation-delay: calc(65s / 24 * (24 - 11) * -1);
}
.item12 {
  animation-delay: calc(65s / 24 * (24 - 12) * -1);
}
.item13 {
  animation-delay: calc(65s / 24 * (24 - 13) * -1);
}
.item14 {
  animation-delay: calc(65s / 24 * (24 - 14) * -1);
}
.item15 {
  animation-delay: calc(65s / 24 * (24 - 15) * -1);
}
.item16 {
  animation-delay: calc(65s / 24 * (24 - 16) * -1);
}
.item17 {
  animation-delay: calc(65s / 24 * (24 - 17) * -1);
}
.item18 {
  animation-delay: calc(65s / 24 * (24 - 18) * -1);
}
.item19 {
  animation-delay: calc(65s / 24 * (24 - 19) * -1);
}
.item20 {
  animation-delay: calc(65s / 24 * (24 - 20) * -1);
}
.item21 {
  animation-delay: calc(65s / 24 * (24 - 21) * -1);
}
.item22 {
  animation-delay: calc(65s / 24 * (24 - 22) * -1);
}
.item23 {
  animation-delay: calc(65s / 24 * (24 - 23) * -1);
}
.item24 {
  animation-delay: calc(65s / 24 * (24 - 24) * -1);
}



.choose-item:nth-child(2) {
    margin-left: 0px;
}
 
.global-video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures the video covers the entire background */
            z-index: -1; /* Places the video behind the content */
        }

 @media (max-width: 768px) {
    .video-background {
        display: none;
    }

    /* Fallback to the poster image on small screens */
    .hero-single {
        background: url('{{asset('assets/img/office/A20I3269-1-1-scaled-e1697205751873.jpg')}}') no-repeat center center;
        background-size: cover;
        background:brightness(0.5);
    }
}

.about-img {
    position: relative;
    height: 500px; /* Adjust height as needed */
    overflow: hidden;
}
.about-img-global{
    position: relative;
    height: 500px; /* Adjust height as needed */
    overflow: hidden;
}
.about-list li .icon img {
    width: 42px;
    filter: brightness(1);
}
.choose-icon img {
    width: 50px;
    filter: brightness(1);
}

@media (max-width: 767.98px) {
    .global-video-background {
        position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit:unset; /* Ensures the video covers the entire background */
            z-index: -1; /* Places the video behind the content */
    }
   
}
.ck-rounded-corners .ck.ck-editor__main>.ck-editor__editable, .ck.ck-editor__main>.ck-editor__editable.ck-rounded-corners {
    height: 300px;
}
.blog-item-img {
    max-height: 180px;
}
    </style>

</head>

<body>

    @if (Request::is('/')) 
    <header class="header-main">
        @include('layouts.header')
    </header>
@else
    <header class="header-other">
        @include('layouts.headerother')
    </header>
@endif

    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
        </main>
    </div> --}}
    @yield('content')
    <footer class="footer-area footer-bg section" id="section5">
        <div class="footer-widget">
            <div class="container">
                <div class="row footer-widget-wrap pt-100 pb-70">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box about-us">
                            <a href="#" class="footer-logo">
                                <img src="{{ asset('assets/img/logo/WhiteMinilogo.png.webp') }}" alt="Farist Technologies Logo">
                            </a>
                            <p class="mb-4">
                                At Faris Technologies, we drive innovation through cutting-edge web and app development, AI, and space science solutions.
                            </p>
                            <h4 class="footer-widget-title">Quick Links</h4>
                            <ul class="footer-list">
                                <li><a href="#"><i class="fas fa-dot-circle"></i> About Us</a></li>
                                <li><a href="#"><i class="fas fa-dot-circle"></i> FAQ's</a></li>
                                <li><a href="#"><i class="fas fa-dot-circle"></i> Terms Of Service</a></li>
                                <li><a href="#"><i class="fas fa-dot-circle"></i> Privacy Policy</a></li>
                                <li><a href="#"><i class="fas fa-dot-circle"></i> Our Team</a></li>
                                <li><a href="#"><i class="fas fa-dot-circle"></i> Latest Blog</a></li>
                            </ul>
                        </div>
                    </div>
                
                    <div class="col-md-6 col-lg-5">
                        <div class="footer-widget-box about-us">
                            <h4 class="footer-widget-title">Our Locations</h4>
                    
                            <!-- Location 1 -->
                            <div class="mb-4">
                                <p class="pb-2 flex items-center">
                                    <span class="pr-2">
                                        <!-- Location Icon -->
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M12,21.933a1.715,1.715,0,0,1-1.384-.691L5.555,14.5a7.894,7.894,0,1,1,12.885-.009L13.385,21.24A1.717,1.717,0,0,1,12,21.933ZM11.992,3.066A6.81,6.81,0,0,0,7.414,4.815a6.891,6.891,0,0,0-1.05,9.1l5.051,6.727a.725.725,0,0,0,.584.292h0a.732.732,0,0,0,.586-.292l5.044-6.734A6.874,6.874,0,0,0,12.81,3.113,7.277,7.277,0,0,0,11.992,3.066Z"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <a href="https://www.google.com/maps?q=6th+Floor,+Sur+Construction,+Bole,+Addis+Ababa" target="_blank" class="text-blue-500 hover:underline">
                                        Head office 6th Floor, Sur Construction, Bole
                                    </a>
                                </p>
                                <p class="pb-2 pl-6">
                                    <a href="https://www.google.com/maps?q=XQXC+W3Q,+Addis+Ababa" target="_blank" class="font-bold text-blue-500 hover:underline">
                                        XQXC+W3Q, Addis Ababa
                                    </a>
                                </p>
                                <p class="pb-2 flex items-center pl-1">
                                    <span class="pr-2">
                                        <!-- Phone Icon -->
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0,0,0 122.6.61l-104 24A24 24,0 0,0,0,48c0,256.5,207.9,464,464,464a24 24 0 0,0 23.4-18.6l24-104a24.29 24.29 0 0,0-14.01-27.6z"></path>
                                        </svg>
                                    </span>
                                    <a href="tel:+251-902122222" class="text-blue-500 hover:underline">+251-902122222</a>
                                </p>
                            </div>
                    
                            <!-- Location 2 -->
                            <div class="mb-4">
                                <p class="pb-2 flex items-center">
                                    <span class="pr-2">
                                        <!-- Location Icon -->
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M12,21.933a1.715,1.715,0,0,1-1.384-.691L5.555,14.5a7.894,7.894,0,1,1,12.885-.009L13.385,21.24A1.717,1.717,0,0,1,12,21.933ZM11.992,3.066A6.81,6.81,0,0,0,7.414,4.815a6.891,6.891,0,0,0-1.05,9.1l5.051,6.727a.725.725,0,0,0,.584.292h0a.732.732,0,0,0,.586-.292l5.044-6.734A6.874,6.874,0,0,0,12.81,3.113,7.277,7.277,0,0,0,11.992,3.066Z"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <a href="https://www.google.com/maps?q=Business+Bay+Area,+Dubai,+UAE" target="_blank" class="text-blue-500 hover:underline">
                                        UAE, Dubai, Business Bay Area
                                    </a>
                                </p>
                                <p class="pb-2 pl-6">
                                    <a href="https://www.google.com/maps?q=XR8R+C5H,+Addis+Ababa" target="_blank" class="font-bold text-blue-500 hover:underline">
                                        XR8R+C5H, Addis Ababa
                                    </a>
                                </p>
                                <p class="pb-2 flex items-center pl-1">
                                    <span class="pr-2">
                                        <!-- Phone Icon -->
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0,0,0 122.6.61l-104 24A24 24,0 0,0,0,48c0,256.5,207.9,464,464,464a24 24 0 0,0 23.4-18.6l24-104a24.29 24.29 0 0,0-14.01-27.6z"></path>
                                        </svg>
                                    </span>
                                    <a href="tel:+971-508515282" class="text-blue-500 hover:underline">+971 508515282</a>
                                </p>
                            </div>
                    
                            <!-- Location 3 -->
                            <div class="mb-4">
                                <p class="pb-2 flex items-center">
                                    <span class="pr-2">
                                        <!-- Location Icon -->
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M12,21.933a1.715,1.715,0,0,1-1.384-.691L5.555,14.5a7.894,7.894,0,1,1,12.885-.009L13.385,21.24A1.717,1.717,0,0,1,12,21.933ZM11.992,3.066A6.81,6.81,0,0,0,7.414,4.815a6.891,6.891,0,0,0-1.05,9.1l5.051,6.727a.725.725,0,0,0,.584.292h0a.732.732,0,0,0,.586-.292l5.044-6.734A6.874,6.874,0,0,0,12.81,3.113,7.277,7.277,0,0,0,11.992,3.066Z"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <a href="https://www.google.com/maps?q=USA,+California,+San+Francisco" target="_blank" class="text-blue-500 hover:underline">
                                        USA California, San Francisco
                                    </a>
                                </p>
                                <p class="pb-2 flex items-center pl-1">
                                    <span class="pr-2">
                                        <!-- Phone Icon -->
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0,0,0 122.6.61l-104 24A24 24,0 0,0,0,48c0,256.5,207.9,464,464,464a24 24 0 0,0 23.4-18.6l24-104a24.29 24.29 0 0,0-14.01-27.6z"></path>
                                        </svg>
                                    </span>
                                    <a href="tel:+1-4151234567" class="text-blue-500 hover:underline">+1 4151234567</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    
                                      
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Newsletter</h4>
                            <div class="footer-newsletter">
                                <p>Subscribe to our newsletter for the latest updates and news.</p>
                                <div class="subscribe-form">
                                    <form action="#">
                                        <input type="email" class="form-control" placeholder="Your Email" required>
                                        <button class="theme-btn" type="submit">
                                            Subscribe Now <i class="far fa-paper-plane"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p class="copyright-text">
                            &copy; Copyright <span id="date"></span> <a href="#"> Faris Technology</a>. All Rights
                            Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <ul class="footer-social">
                            <li><a href="https://web.facebook.com/faristechnologies"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://x.com/faris_techn"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://et.linkedin.com/company/faris-technology"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UC75Q2-lgaH6XnczWrMJd1rw"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    
    <a href="#" id="scroll-top"><i class="far fa-angle-up"></i></a>
    
    <!-- JavaScript Assets -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter-up.js') }}"></script>
    <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>

  window.addEventListener('load', function() {
        const videoWrap = document.querySelector('.video-wrap');
        const playButton = videoWrap.querySelector('.play-button');

        playButton.addEventListener('click', function() {
            // Create the iframe dynamically
            const iframe = document.createElement('iframe');
            iframe.src = "https://www.youtube.com/embed/GSYtvsf95EI?mute=0&rel=0&controls=0";
            iframe.style.position = "absolute";
            iframe.style.top = "0";
            iframe.style.left = "0";
            iframe.style.width = "100%";
            iframe.style.height = "100%";
            iframe.frameBorder = "0";
            iframe.allow = "encrypted-media";
            iframe.allowFullscreen = true;

            // Clear the placeholder and add the iframe
            videoWrap.innerHTML = ""; // Remove placeholder content
            videoWrap.appendChild(iframe); // Add the iframe

            // Optionally remove the play button after the video starts
            playButton.style.display = 'none';
        });
    });
    @stack('scripts')
      // JavaScript for Intersection Observer
// JavaScript for Intersection Observer
document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.header-main .navbar');
    if (!navbar) return;

    const navLinks = document.querySelectorAll('.header-main .navbar .nav-link');
    const sections = document.querySelectorAll('.section');

    // Section styles
    const sectionStyles = [
        { bgColor: 'transparent', textColor: '#ffffff', hoverColor: '#00BFFF' },
        { bgColor: '#123544', textColor: '#ffffff', hoverColor: '#00BFFF' },
        { bgColor: 'white', textColor: '#000000', hoverColor: '#00BFFF' },
        { bgColor: '#090f27', textColor: '#ffffff', hoverColor: '#00BFFF' },
        { bgColor: '#123544', textColor: '#ffffff', hoverColor: '#00BFFF' },
        { bgColor: 'white', textColor: '#000000', hoverColor: '#00BFFF' },
        { bgColor: '#00283a', textColor: '#ffffff', hoverColor: '#00BFFF' }
    ];

    // Function to check screen size
    const isSmallScreen = () => window.innerWidth < 954;

    // Function to create an observer
    const createObserver = (threshold) => {
        return new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const sectionIndex = Array.from(sections).indexOf(entry.target);
                        const { bgColor, textColor, hoverColor } = sectionStyles[sectionIndex];

                        // Adjust text color for small screens
                        const effectiveTextColor = isSmallScreen()   ? '#000000' : textColor;  // Black text for transparent background on small screens
                           

                        // Update navbar background color
                        navbar.style.backgroundColor = bgColor;

                        // Update navbar link text colors and hover colors
                        navLinks.forEach((link) => {
                            link.style.color = effectiveTextColor;
                            link.addEventListener('mouseover', () => {
                                link.style.color = hoverColor;
                            });
                            link.addEventListener('mouseout', () => {
                                link.style.color = effectiveTextColor;
                            });
                        });
                    }
                });
            },
            { threshold } // Dynamic threshold
        );
    };

    // Initial observer setup with a default threshold
    let observer = createObserver(0.5);

    // Function to get threshold based on screen size
    const getThresholdForScreenSize = () => {
        const width = window.innerWidth;

        if (width > 1500) {
            return 0.6; // XL screens
        } 
        else if (width > 1280) {
            return 0.1; // Large screens
        } 
        else if (width > 768) {
            return 0.4; // Laptop screens
        } else {
            return 0.1; // Mobile screens
        }
    };

    // Function to update observer with a new threshold
    const updateThreshold = () => {
        const newThreshold = getThresholdForScreenSize();

        // Disconnect the current observer
        observer.disconnect();

        // Create a new observer with the new threshold
        observer = createObserver(newThreshold);

        // Re-observe sections
        sections.forEach((section) => observer.observe(section));
    };

    // Observe all sections initially
    sections.forEach((section) => observer.observe(section));

    // Update threshold on window resize
    window.addEventListener('resize', () => {
        updateThreshold();

        // Force update the text color for small screens
        navLinks.forEach((link) => {
            if (isSmallScreen) {
                link.style.color = '#000000'; // Ensure black text for small screens
            }
        });
    });

    // Initial threshold setup
    updateThreshold();
});

var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6761383a49e2fd8dfef955e7/1if9s796l';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();

        ClassicEditor.create(document.querySelector('#content'), {
            height: 500,
        })
            .catch( error => {
                console.error( error );
            } );
            
document.getElementById('blog-posting-form').addEventListener('submit', function(e) {
    const content = editorInstance.getData();

    
    document.getElementById('#content').value = content;
})



      </script>
</body>
</html>
