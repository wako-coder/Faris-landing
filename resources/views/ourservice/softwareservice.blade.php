@extends('layouts.app')

@section('content')
<main class="main">

    <!-- Breadcrumb Section with Video Background -->
    <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme">
            <!-- Slide 1 -->
            <div class="hero-single">
                <img src="{{ asset('assets/img/about/20241119_103910.jpg') }}" alt="Capacity Animation" class="video-background" style="filter: brightness(0.5);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8 col-lg-8">
                            <div class="hero-content" style="position: relative; top: 80px;">
                                <h1 class="hero-title" data-animation="fadeInUp" data-delay=".50s">
                                    Digital Transformation <span>Services</span>
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

    <!-- Service Section -->
    <div class="service-single-area py-80">
        <div class="container">
            <div class="service-single-wrapper">
                <div class="row align-items-center">
                    <!-- Text Section on Left -->
                    <div class="col-lg-6">
                        <div class="service-details wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline"><i class="fas fa-bring-forward"></i> Digital Services</span>
                                <h2 class="site-title my-3">Digital Transformation <span>Services</span></h2>
                            </div>
                            <p class="about-text mb-20">
                                At FARIS Technologies, we offer Digital Ascendancy Services that leverage cutting-edge technologies to propel your business forward. Our services integrate digital solutions across your organization, enhancing performance, efficiency, and customer experience.
                            </p>
                            <h4 class="mb-20 mt-20">How You Benefit:</h4>
                            <ul class="ms-4 mb-10">
                                <li>&bull; Improved operational efficiency.</li>
                                <li>&bull; Enhanced customer experience and satisfaction.</li>
                                <li>&bull; Increased revenue through data-driven decisions and innovation.</li>
                            </ul>
    
                            <p class="mt-20">
                                Partner with FARIS Technologies and embrace digital transformation to future-proof your business today.
                            </p>
                        </div>
                    </div>
    
                    <!-- Image Section on Right -->
                    <div class="col-lg-6">
                        <div class="service-details-img text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                            <img src="{{ asset('assets/img/gallery/DTS (39).jpg') }}" alt="Digital Transformation" class="img-fluid" style="height: 450px;">
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
                <div class="col-lg-6">
                    <div class="faq-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="img" style="padding-right: 50px" >
                            <img src="{{ asset('assets/img/about/15022851879.png') }}" alt="Digital Insights">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline"><i class="fas fa-lightbulb"></i> Insights</span>
                            <h2 class="site-title my-3">Key <span>Insights</span> for Digital Growth</h2>
                        </div>
                        <p class="about-text">Discover the transformative power of digital solutions and how they can propel your business to new heights.</p>
                        <div class="mt-4">
                            <div class="accordion" id="accordionExample">
                                <!-- Accordion Item 1 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span><i class="far fa-lightbulb"></i></span> What is Digital Transformation?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Digital transformation integrates advanced technologies like AI, IoT, and cloud computing to revolutionize business operations and enhance customer experiences.
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion Item 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span><i class="far fa-lightbulb"></i></span> What Are the Core Pillars?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            The core pillars include AI-driven insights, IoT-powered connectivity, immersive customer experiences, cybersecurity resilience, and cloud optimization.
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion Item 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span><i class="far fa-lightbulb"></i></span> Key Services Offered
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul class="ms-4">
                                                <li>&bull; AI-Powered Solutions for data-driven decision-making.</li>
                                                <li>&bull; Seamless IoT integration for real-time visibility and automation.</li>
                                                <li>&bull; Next-Gen customer engagement with AR and VR technologies.</li>
                                                <li>&bull; Robust cybersecurity to protect your data.</li>
                                                <li>&bull; Cloud migration for scalability and cost efficiency.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion Item 4 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <span><i class="far fa-lightbulb"></i></span> What Are the Benefits?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Benefits include improved efficiency, enhanced customer experiences, data-driven decision-making, innovation, and increased revenue.
                                        </div>
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
