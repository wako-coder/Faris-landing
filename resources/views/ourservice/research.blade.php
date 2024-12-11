@extends('layouts.app')

@section('content')
<main class="main">

    <!-- Breadcrumb Section with Video Background -->
    <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme">
            <!-- Slide 1 -->
            <div class="hero-single">
                <img src="{{ asset('assets/img/office/A20I2667.JPG') }}" alt="Capacity Animation" class="video-background" style="filter: brightness(0.5); ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8 col-lg-8">
                            <div class="hero-content" style="position: relative; top:80px;">
                                <h1 class="hero-title" data-animation="fadeInUp" data-delay=".50s">
                                    Research and <span>Re-Engineering</span>
                                </h1>
                                <p data-animation="fadeInUp" data-delay=".75s">
                                    Unlock the Future with FARIS Technologies' Digital Ascendancy Services
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>


    <div class="service-single-area py-80">
        <div class="container">
            <div class="service-single-wrapper">
                <div class="row">
                    <div class="col-xl-2 col-lg-2"></div>
                    <div class="col-xl-12 col-lg-8">
                        <div class="service-details">
                           
                            <div class="service-details">
                                <h3 class="mb-20 mt-20">Research and Re-Engineering</h3>
                                <p class="mb-20">
                                    At FARIS technologies, we empower our clients by identifying, developing, and implementing best-fit services and engineering solutions that adapt to their evolving needs. Our commitment lies in exploring and advancing future and emerging technologies to drive innovation and shape the next generation of solutions.
                                </p>
                                <p class="mb-30">
                                    Our dedication to research and re-engineering is reflected in our strategic participation in groundbreaking projects. A key highlight of this effort is our contribution to Ethiopia’s first remote sensing satellite, ETRSS-1. Below are some areas where we excel:
                                </p>
                                <h4 class="mb-30 mt-20">1. Advanced Technology Development:</h4>
                                <ul>
                                    <li><i class="far fa-check"></i> Collaborated on satellite payload systems for environmental monitoring and agricultural applications.</li>
                                    <li><i class="far fa-check"></i> Contributed to the development of real-time data transmission systems for remote sensing.</li>
                                    <li><i class="far fa-check"></i> Integrated innovative technologies for optimized navigation and sensing capabilities.</li>
                                </ul>
                                <h4 class="mb-30 mt-20">2. Engineering Solutions:</h4>
                                <ul>
                                    <li><i class="far fa-check"></i> Delivered custom-designed systems tailored to complex requirements.</li>
                                    <li><i class="far fa-check"></i> Provided scalable solutions to meet environmental and socio-economic challenges.</li>
                                    <li><i class="far fa-check"></i> Supported operations through training programs and technical expertise.</li>
                                </ul>
                                <h4 class="mb-30 mt-20">3. Capacity Building and Impact:</h4>
                                <ul>
                                    <li><i class="far fa-check"></i> Trained a new generation of engineers and scientists for sustained development in aerospace technology.</li>
                                    <li><i class="far fa-check"></i> Fostered international collaborations to bring advanced skills and insights to local projects.</li>
                                    <li><i class="far fa-check"></i> Enabled the transfer of critical technology to modernize local industries.</li>
                                </ul>
                                <h3 class="mb-30 mt-20">Participation in ETRSS-1: A Landmark Achievement</h3>
                                <ul>
                                    <li><i class="far fa-check"></i> Designed systems to monitor climate, disasters, and agricultural needs with precision.</li>
                                    <li><i class="far fa-check"></i> Enhanced Ethiopia’s ability to collect and process satellite data efficiently.</li>
                                    <li><i class="far fa-check"></i> Contributed to a project that paves the way for future aerospace endeavors.</li>
                                </ul>
                                <div class="service-details-img mb-30 mt-30">
                                    <img src="assets/img/office/etress.jpg" style="width: 800px; height:400px;" alt="thumb">
                                </div>
                                <h3 class="mb-30 mt-20">Benefits of Research and Re-Engineering:</h3>
                                <ul>
                                    <li><i class="far fa-check"></i> Drives innovation through the adoption of cutting-edge technologies.</li>
                                    <li><i class="far fa-check"></i> Supports economic growth by enhancing industry capabilities and workforce expertise.</li>
                                    <li><i class="far fa-check"></i> Contributes to sustainable development with solutions tailored to societal needs.</li>
                                    <li><i class="far fa-check"></i> Positions Ethiopia as a hub for advanced research and engineering projects.</li>
                                </ul>
                                <div class="text-center mt-20">
                                    <a href="{{ url('/contact') }}" class="theme-btn theme-btn2">Get in Touch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</main>

@endsection