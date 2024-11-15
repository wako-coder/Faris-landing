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
    <div class="service-area sa-bg pt-60 pb-70">
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
                                <a href="{{ url('/software') }}">ICT & Software Development</a>
                            </h3>
                            <p class="service-text">
                                We build robust and scalable software solutions tailored to modern business needs.
                            </p>
                            <div class="service-arrow">
                                <a href="{{ url('/software') }}" class="service-btn"><i class="far fa-arrow-right"></i></a>
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
                                <a href="{{ url('/service-single') }}">Business Process Outsourcing</a>
                            </h3>
                            <p class="service-text">
                                Enhance efficiency by outsourcing key business processes to our expert team.
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
                                <a href="{{ url('/service-single') }}">Research & Development</a>
                            </h3>
                            <p class="service-text">
                                Drive innovation with our R&D services, focused on new technologies and solutions.
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
                                <a href="{{ url('/service-single') }}">Cloud Solutions & Infrastructure</a>
                            </h3>
                            <p class="service-text">
                                Leverage cloud technology to enhance your infrastructure's scalability and security.
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
                                <a href="{{ url('/service-single') }}">Space Science & Technology</a>
                            </h3>
                            <p class="service-text">
                                Pioneer new discoveries with our advanced space technology solutions.
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
                                <a href="{{ url('/service-single') }}">Talent Development & Capacity Building</a>
                            </h3>
                            <p class="service-text">
                                Empower your workforce with training and skills for future readiness.
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
