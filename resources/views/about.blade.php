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

    <div class="choose-area py-120">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <div class="choose-content wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline"><i class="fas fa-bring-forward"></i> Why Choose Us</span>
                            <h2 class="site-title">
                                When You Need Innovation, <span>We Are</span> Always Here
                            </h2>
                        </div>
                        <p>
                            Our team specializes in cutting-edge web and app development, AI solutions, and advancements in space science technology. We are dedicated to delivering reliable and transformative services.
                        </p>
                        <div class="choose-wrapper mt-4">
                            <div class="choose-item">
                                <div class="choose-icon">
                                    <img src="{{ asset('assets/img/icon/team-2.svg') }}" alt>
                                </div>
                                <div class="choose-item-content">
                                    <h4>Expert Developers</h4>
                                    <p>Our skilled developers are committed to crafting innovative solutions that meet your unique needs.</p>
                                </div>
                            </div>
                            <div class="choose-item active">
                                <div class="choose-icon">
                                    <img src="{{ asset('assets/img/icon/quality.svg') }}" alt>
                                </div>
                                <div class="choose-item-content">
                                    <h4>Quality Assurance</h4>
                                    <p>We implement rigorous testing protocols to ensure that our products are of the highest quality and reliability.</p>
                                </div>
                            </div>
                            <div class="choose-item">
                                <div class="choose-icon">
                                    <img src="{{ asset('assets/img/icon/trusted.svg') }}" alt>
                                </div>
                                <div class="choose-item-content">
                                    <h4>Your Trusted Technology Partner</h4>
                                    <p>We build lasting relationships with our clients, offering support and guidance every step of the way.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-img wow fadeInRight" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="row g-4">
                            <div class="col-6">
                                <img class="img-1" src="{{ asset('assets/img/choose/pexels-captainfrank_-696992066-1.jpg') }}" alt>
                            </div>
                            <div class="col-6">
                                <img class="img-2" src="{{ asset('assets/img/choose/emile-perron-xrVDYZRGdw4-unsplas.webp') }}" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="about-img">
                            <div class="about-img-1">
                                <img src="{{ asset('assets/img/about/innovation_01.jpeg') }}" alt>
                            </div>
                            <div class="about-img-2">
                                <img src="{{ asset('assets/img/about/technology_future.jpeg') }}" alt>
                            </div>
                        </div>
                        <div class="about-shape">
                            <img src="{{ asset('assets/img/shape/02.png') }}" alt>
                        </div>
                        <div class="about-experience">
                            <h1>10+</h1>
                            <div class="about-experience-text">
                                Years Of <br> Excellence
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline"><i class="fas fa-lightbulb"></i> Our Journey</span>
                            <h2 class="site-title">
                                Leading the <span>Way</span> in Innovation
                            </h2>
                        </div>
                        <p class="about-text">
                            For over a decade, we’ve been at the forefront of technological advancements, delivering solutions that inspire growth and transformation.
                        </p>
                        <div class="about-list-wrap">
                            <ul class="about-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/Research.svg') }}" alt>
                                    </div>
                                    <div class="content">
                                        <h4>Innovative Strategies</h4>
                                        <p>Our approach is rooted in creativity and innovation to provide unparalleled solutions for businesses.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/repair.svg') }}" alt>
                                    </div>
                                    <div class="content">
                                        <h4>Proven Expertise</h4>
                                        <p>We are a trusted name in technology, delivering reliable results that drive success.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="{{ url('/our-journey') }}" class="theme-btn mt-4">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</main>
@endsection
