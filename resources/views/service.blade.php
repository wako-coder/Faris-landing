@extends('layouts.app')
@section('content')
<main class="main">
    
    <div class="service-area sa-bg pt-100 pb-70 mt-200" style="position: relative; top:60px;">
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
                            <img src="{{ asset('assets/img/icon/Digital.svg') }}" alt>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">
                                <a href="{{ url('/software') }}">Digital Transformation Services</a>
                            </h3>
                            <p class="service-text">
                                Revolutionize your business with Faris Technologies' AI-driven digital transformation services.
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
                            <img src="{{ asset('assets/img/icon/BPO-01.svg') }}" alt>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">
                                <a href="{{ url('/buisness') }}">Business Process Outsourcing</a>
                            </h3>
                            <p class="service-text">
                                Efficiency meets intelligence in our BPO services. Powered by AI, we deliver solutions that reduce costs.
                            </p>
                            <div class="service-arrow">
                                <a href="{{ url('/buisness') }}" class="service-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                        <div class="service-icon">
                            <img src="{{ asset('assets/img/icon/Research.svg') }}" alt>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">
                                <a href="{{ url('//research') }}">Research & Re Engineering</a>
                            </h3>
                            <p class="service-text">
                                Secure, scalable cloud solutions to enhance your digital infrastructure
                            </p>
                            <div class="service-arrow">
                                <a href="{{ url('/research') }}" class="service-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="service-icon">
                            <img src="{{ asset('assets/img/icon/knowldege.svg') }}" alt>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">
                                <a href="{{ url('/knowledge') }}">knowledge and Capacity Building</a>
                            </h3>
                            <p class="service-text">
                                Secure, scalable cloud solutions to enhance your digital infrastructure.
                            </p>
                            <div class="service-arrow">
                                <a href="{{ url('/knowledge') }}" class="service-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</main>
@endsection
