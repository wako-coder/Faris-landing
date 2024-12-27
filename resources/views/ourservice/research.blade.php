@extends('layouts.app')

@section('content')
<main class="main">

    <!-- Breadcrumb Section with Video Background -->
    <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme">
            <!-- Slide 1 -->
            <div class="hero-single">
                <img src="{{ asset('assets/img/office/A20I2667.JPG') }}" alt="Capacity Animation" class="video-background" style="filter: brightness(0.5);">
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
                <div class="row align-items-center">
                    <!-- Text Section -->
                    <div class="col-lg-6">
                        <div class="service-details wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline"><i class="fas fa-briefcase"></i> Research and Re-Engineering</span>
                                <h2 class="site-title my-3">Research and Re-Engineering <span>at FARIS Technologies</span></h2>
                            </div>
                            <p class="about-text mb-20">
                                FARIS Technology is a leading institution in Ethiopia, dedicated to pushing the boundaries of space science, robotics, rocketry, AI, and emerging technologies. Founded in 2018, we've collaborated with esteemed academic and governmental organizations to provide world-class tech education.
                            </p>
    
                            <p class="about-text mb-20">
                                We've played a pivotal role in Ethiopia's space exploration journey, contributing to the development and commercialization of ETRSS-1 and ETRSS-2 satellite imagery. Our participation in NASA's rover challenge highlights our commitment to international collaboration and innovation.
                            </p>
                        </div>
                    </div>
    
                    <!-- Image Section -->
                    <div class="col-lg-6">
                        <div class="service-details-img text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                            <img src="{{ asset('assets/img/gallery/Drone technology crop.png') }}" alt="Research and Re-Engineering" class="img-fluid" style="width: 100%; height: auto;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- FAQ Section -->
    <div class="faq-area py-80">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Section -->
                <div class="col-lg-6">
                    <div class="faq-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="faq-img">
                            <img src="{{ asset('assets/img/gallery/GIS.png') }}" alt="Research Insights">
                        </div>
                    </div>
                </div>

                <!-- Accordion Section -->
                <div class="col-lg-6">
                    <div class="faq-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                       
                            <h2 class="site-title my-3">FARIS Technology</h2>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <!-- Cutting-Edge Technology -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span><i class="far fa-lightbulb"></i></span> Cutting-Edge Technology
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        FARIS Technologies is at the forefront of emerging technologies, including AI, robotics, and space science, pushing the boundaries of innovation.
                                    </div>
                                </div>
                            </div>

                            <!-- International Collaboration -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span><i class="far fa-lightbulb"></i></span> International Collaboration
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        FARIS Technologies has partnered with leading international organizations, including NASA, to enhance Ethiopia’s position in the global research community.
                                    </div>
                                </div>
                            </div>

                            <!-- Sustainable Solutions -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span><i class="far fa-lightbulb"></i></span> Sustainable Solutions
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Our research and engineering solutions focus on sustainability, ensuring that technological advancements have a positive impact on society and the environment.
                                    </div>
                                </div>
                            </div>

                            <!-- Key Services -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <span><i class="fas fa-cogs"></i></span> Key Services
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>&bull; Design, development, and launch of satellites for communication, remote sensing, and navigation.</li>
                                            <li>&bull; Creation of robots for industrial automation, precision agriculture, and various applications.</li>
                                            <li>&bull; AI-powered solutions for healthcare, education, finance, and more.</li>
                                            <li>&bull; Development of rocketry and aerospace systems, including launch vehicles and propulsion systems.</li>
                                            <li>&bull; Utilization of drone technology for agriculture, environmental monitoring, and infrastructure inspection.</li>
                                        </ul>
                                    </div>
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
