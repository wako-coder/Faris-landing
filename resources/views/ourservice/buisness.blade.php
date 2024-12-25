@extends('layouts.app')

@section('content')
<main class="main">

    <!-- Breadcrumb Section with Video Background -->
    <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme">
            <!-- Slide 1 -->
            <div class="hero-single">
                <img src="{{ asset('assets/img/gallery/work-station.png') }}" style="filter: brightness(0.5);" alt="Capacity Animation" class="video-background">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8 col-lg-8">
                            <div class="hero-content" style="position: relative; top:80px;">
                                <h1 class="hero-title" data-animation="fadeInUp" data-delay=".50s">
                                    Business Process <span>Outsourcing</span>
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

    <div class="service-single-area mb-20">
        <div class="container">
            <div class="service-single-wrapper py-80">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="service-details wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline"><i class="fas fa-briefcase"></i> BPO Services</span>
                                <h2 class="site-title my-3">Business Process Outsourcing <span>Services</span></h2>
                            </div>
                            <p class="about-text mb-20">
                                FARIS Technologies offers efficient BPO solutions in customer service, IT services, and content creation to help optimize your business operations.
                            </p>
                    
                            <h4 class="mb-20 mt-20">Key Services:</h4>
                            <ul class="ms-4 mb-10">
                                <li>&bull; Customer Service: Call centers, email, and chat support.</li>
                                <li>&bull; IT Services: Software development and technical support.</li>
                                <li>&bull; Content Creation: Writing, translation, and digital marketing.</li>
                            </ul>
                    
                            <h4 class="mb-20 mt-20">Why Ethiopia?</h4>
                            <ul class="ms-4 mb-10">
                                <li>&bull; Cost-Effective Labor.</li>
                                <li>&bull; Skilled Workforce with English fluency.</li>
                                <li>&bull; Time Zone Advantage with Europe and the Middle East.</li>
                            </ul>
                    
                            <p class="mt-20">Partner with FARIS Technologies for tailored BPO services that drive growth.</p>
                        </div>
                    </div>
                    
                    <!-- Image Section on Right -->
                    <div class="col-lg-6">
                        <div class="service-details-img text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                            <img src="{{ asset('assets/img/gallery/BPOfaris.png') }}" alt="BPO Services" class="img-fluid">
                        </div>
                    </div>
                    
                </div>
            </div>

            
                <!-- Insights Section -->
               
    
                <!-- FAQ Section -->
                <div class="faq-area py-60">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="faq-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">
                                    <div class="faq-img">
                                        <img src="assets/img/about/15022851879.png" alt="BPO Insights">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="faq-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                                    <div class="site-heading mb-3">
                                        <span class="site-title-tagline"><i class="fas fa-lightbulb"></i> Insights</span>
                                        <h2 class="site-title my-3">Frequently Asked <span>Questions</span></h2>
                                    </div>
                                    <p class="about-text">Find answers to the most common questions about our Business Process Outsourcing (BPO) services.</p>
                                    <div class="mt-4">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <span><i class="far fa-lightbulb"></i></span> What is Business Process Outsourcing (BPO)?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        BPO refers to contracting a business function to an external provider. It can involve customer service, IT support, or content creation, helping businesses reduce costs and enhance efficiency.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        <span><i class="far fa-lightbulb"></i></span> Why Should We Outsource to Ethiopia?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Ethiopia offers cost-effective labor, a skilled workforce, and a strategic time zone that aligns with Europe and the Middle East. This makes it an ideal outsourcing destination for high-quality services at competitive rates.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        <span><i class="far fa-lightbulb"></i></span> How Can BPO Benefit My Business?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        BPO can help reduce costs, improve service quality, enhance customer satisfaction, and allow you to focus on core business operations, all while scaling your business operations seamlessly.
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
        </div>
    </div>
    
    

</main>
@endsection
