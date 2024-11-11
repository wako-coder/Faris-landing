@extends('layouts.app')
@section('content')
<main class="main">
    <div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/01.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">About Us</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>


    <div class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="about-img">
                            <div class="about-img-1">
                                <img src="{{ asset('assets/img/about/portfolio_04.jpeg') }}" alt>
                            </div>
                            <div class="about-img-2">
                                <img src="{{ asset('assets/img/about/emile-perron-xrVDYZRGdw4-unsplash-scaled-e1654596346828.jpg.webp') }}" alt>
                            </div>
                        </div>
                        <div class="about-shape">
                            <img src="{{ asset('assets/img/shape/01.png') }}" alt>
                        </div>
                        <div class="about-experience">
                            <h1>5+</h1>
                            <div class="about-experience-text">
                                Years Of <br> Innovation
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline"><i class="fas fa-bring-forward"></i> About Us</span>
                            <h2 class="site-title">
                                Pioneering the Future of <span>Technology</span>
                            </h2>
                        </div>
                        <p class="about-text">
                            We specialize in web and app development, AI, and space science technology, pushing the boundaries of innovation to deliver transformative solutions.
                        </p>
                        <div class="about-list-wrap">
                            <ul class="about-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/money.svg') }}" alt>
                                    </div>
                                    <div class="content">
                                        <h4>Cost-Effective Solutions</h4>
                                        <p>Our services are designed to provide maximum value, combining innovation with affordability.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/trusted.svg') }}" alt>
                                    </div>
                                    <div class="content">
                                        <h4>Trusted by Innovators</h4>
                                        <p>We are the trusted partner of forward-thinking businesses ready to embrace the future.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="{{ url('/about') }}" class="theme-btn mt-4">Discover More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
