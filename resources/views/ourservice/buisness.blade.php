@extends('layouts.app')

@section('content')
<main class="main">

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme">
            <div class="hero-single">
                <img src="{{ asset('assets/img/gallery/work-station.png') }}" alt="BPO Services" class="video-background" style="filter: brightness(0.5);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8 col-lg-8">
                            <div class="hero-content" style="position: relative; top: 80px;">
                                <h1 class="hero-title" data-animation="fadeInUp" data-delay=".50s">
                                    Business Process <span>Outsourcing</span>
                                </h1>
                                <p data-animation="fadeInUp" data-delay=".75s">
                                    Unlock operational efficiency with FARIS Technologies' comprehensive BPO solutions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BPO Service Section -->
    <div class="service-single-area py-80">
        <div class="container">
            <div class="service-single-wrapper">
                <div class="row align-items-center">
                    <!-- Text Section -->
                    <div class="col-lg-6">
                        <div class="service-details wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline"><i class="fas fa-briefcase"></i> BPO Services</span>
                                <h2 class="site-title my-3">Business Process Outsourcing <span>Services</span></h2>
                            </div>
                            <p class="about-text mb-20">
                                At FARIS Technologies, we offer a full suite of BPO services designed to streamline your operations, from customer service and IT support to content creation and management.
                            </p>
    
                            <!-- Key Areas -->
                          

                            <!-- Why Choose Ethiopia -->
                            <h4 class="mb-20 mt-20">Why Choose Ethiopia?</h4>
                            <ul class="ms-4 mb-10">
                                <li>&bull; Cost-Effective Labor: Lower operational costs.</li>
                                <li>&bull; Skilled Workforce: English fluency and strong work ethics.</li>
                                <li>&bull; Time Zone Advantage: Alignment with Europe and the Middle East.</li>
                            </ul>

                        </div>
                    </div>

                    <!-- Image Section -->
                    <div class="col-lg-6">
                        <div class="service-details-img text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                            <img src="{{ asset('assets/img/gallery/A20I3036.JPG') }}" alt="BPO Services" class="img-fluid">
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
                        <div class="img" style="padding-right: 50px" >
                            <img src="{{ asset('assets/img/gallery/A20I2568.JPG') }}" alt="Digital Insights">
                        </div>
                    </div>
                </div>
                <!-- Accordion Section -->
                <div class="col-lg-6">
                    <div class="faq-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline"><i class="fas fa-lightbulb"></i> Benefits</span>
                            <h2 class="site-title my-3">The Benefits of Outsourcing <span> to FARIS Technologies</span></h2>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <!-- Key Services Accordion -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span><i class="far fa-lightbulb"></i></span> Customer Service: Call Centers, Email, and Live Chat Support
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Our customer service team offers comprehensive support through multiple channels, ensuring a seamless experience for your clients.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span><i class="far fa-lightbulb"></i></span> IT Services: Software Development, Technical Support, and Data Entry
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        FARIS offers robust IT solutions, from custom software development to efficient technical support and accurate data entry.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span><i class="far fa-lightbulb"></i></span> Content Creation: Writing, Translation, SEO, and Digital Marketing
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Our content creation team specializes in writing, translation, SEO, and digital marketing, driving engagement and visibility for your brand.
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Benefits Accordion -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <span><i class="far fa-lightbulb"></i></span> Cost-Effective Labor
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Ethiopia offers a relatively low cost of labor compared to other outsourcing destinations, making it an attractive option for cost-conscious businesses.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <span><i class="far fa-lightbulb"></i></span> Skilled Workforce
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Many Ethiopians, especially the younger generation, are fluent in English, facilitating effective communication with international clients.
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
