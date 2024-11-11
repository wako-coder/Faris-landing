@extends('layouts.app')
@section('content')
<main class="main">
    <div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/01.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">Our Services</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Services</li>
            </ul>
        </div>
    </div>
    <div class="service-area sa-bg pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="site-heading">
                        <span class="site-title-tagline"><i class="fas fa-bring-forward"></i> Services</span>
                        <h2 class="site-title service-text">Explore Our Best <span>Technology</span> Solutions</h2>
                        <p class="service-text">
                            We offer a wide range of innovative services in web development, app development, AI solutions, and space technology, designed to empower businesses and industries.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="service-icon">
                            <img src="{{ asset('assets/img/icon/tab.svg') }}" alt>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">
                                <a href="{{ url('/service-single') }}">Custom Web Development</a>
                            </h3>
                            <p class="service-text">
                                We build robust and scalable web solutions to meet the needs of modern businesses.
                            </p>
                            <div class="service-arrow">
                                <a href="{{ url('/service-single') }}" class="service-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                        <div class="service-icon">
                            <img src="{{ asset('assets/img/icon/phone.svg') }}" alt>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">
                                <a href="{{ url('/service-single') }}">Mobile App Development</a>
                            </h3>
                            <p class="service-text">
                                Transform your ideas into user-friendly mobile apps that engage customers on all platforms.
                            </p>
                            <div class="service-arrow">
                                <a href="{{ url('/service-single') }}" class="service-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                        <div class="service-icon">
                            <img src="{{ asset('assets/img/icon/gadget.svg') }}" alt>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">
                                <a href="{{ url('/service-single') }}">AI-Driven Solutions</a>
                            </h3>
                            <p class="service-text">
                                Harness the power of artificial intelligence to automate and optimize your business operations.
                            </p>
                            <div class="service-arrow">
                                <a href="{{ url('/service-single') }}" class="service-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="service-icon">
                            <img src="{{ asset('assets/img/icon/laptop.svg') }}" alt>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">
                                <a href="{{ url('/service-single') }}">Cloud Computing & Infrastructure</a>
                            </h3>
                            <p class="service-text">
                                Secure and scalable cloud solutions to streamline your digital infrastructure and improve efficiency.
                            </p>
                            <div class="service-arrow">
                                <a href="{{ url('/service-single') }}" class="service-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                        <div class="service-icon">
                            <img src="{{ asset('assets/img/icon/recovery.svg') }}" alt>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">
                                <a href="{{ url('/service-single') }}">Space Science Technology</a>
                            </h3>
                            <p class="service-text">
                                Pioneering space science innovations to push the boundaries of exploration and discovery.
                            </p>
                            <div class="service-arrow">
                                <a href="{{ url('/service-single') }}" class="service-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                        <div class="service-icon">
                            <img src="{{ asset('assets/img/icon/tab.svg') }}" alt>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">
                                <a href="{{ url('/service-single') }}">Innovative Hardware Solutions</a>
                            </h3>
                            <p class="service-text">
                                Stay ahead of the curve with the latest hardware updates and solutions tailored to your business.
                            </p>
                            <div class="service-arrow">
                                <a href="{{ url('/service-single') }}" class="service-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

</main>
@endsection
