@extends('layouts.app')

@section('content')
<main class="main">

    <!-- Breadcrumb Section with Video Background -->
    <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme">
            <!-- Slide 1 -->
            <div class="hero-single">
                <img src="{{ asset('assets/img/gallery/Research n re  (2).jpg') }}" alt="Capacity Animation" class="video-background" style="filter: brightness(0.5);">
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
                        <div class="img" style="padding-right: 50px" >
                            <img src="{{ asset('assets/img/gallery/GIS.png') }}" alt="Research Insights">
                        </div>
                    </div>
                </div>

                <!-- Accordion Section -->
                <div class="col-lg-6">
                    <div class="faq-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                       
                            <h2 class="site-title my-3">Akwarach</h2>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <!-- Localized Mapping Solution -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span><i class="far fa-map"></i></span> Localized Mapping Solution
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        FARIS Technologies has developed a localized mapping solution designed specifically for Ethiopia's unique geographic and infrastructural challenges. This platform integrates real-time traffic data, helping drivers navigate effectively by avoiding obstacles such as unexpected traffic jams, roadworks, or accidents. The solution is accessible via SMS for non-smartphone users and through an intuitive mobile app for smartphone users, ensuring inclusivity and wide adoption.
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Geo-Platform for Spatial Analysis -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span><i class="fas fa-globe"></i></span> Geo-Platform for Spatial Analysis
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Our geo-platform is a comprehensive solution that brings together critical data, advanced algorithms, and robust tools to address complex geospatial challenges. This platform supports mapping, location-based services, navigation, and spatial analysis, enabling industries such as agriculture, urban planning, and environmental management to make data-driven decisions with precision and ease.
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Real-Time Traffic Monitoring -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span><i class="fas fa-road"></i></span> Real-Time Traffic Monitoring
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        By combining advanced mapping technologies and live data feeds, our real-time traffic monitoring system empowers drivers to make informed decisions on the go. The app provides detailed traffic updates, including detours and estimated time of arrival, ensuring smooth commutes. This service is critical for logistics companies, public transport providers, and everyday commuters.
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Innovative Location-Based Services -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <span><i class="fas fa-map-marked-alt"></i></span> Innovative Location-Based Services
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        FARIS Technologies offers cutting-edge location-based services, including tailored navigation systems for various sectors. These services include:
                                        <ul>
                                            <li>&bull; Customized maps for businesses, integrating points of interest and customer data.</li>
                                            <li>&bull; Precision navigation tools for fleet management and logistics optimization.</li>
                                            <li>&bull; Enhanced spatial analysis for market research and planning.</li>
                                            <li>&bull; Real-time route suggestions for emergency services to minimize response time.</li>
                                            <li>&bull; Integrated APIs for developers to embed location services into their applications.</li>
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
    <div class="faq-area py-80">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Section -->
                <div class="col-lg-6">
                    <div class="faq-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="img" style="padding-right: 50px" >
                            <img src="{{ asset('assets/img/gallery/Drone technology.png') }}" alt="Research Insights">
                        </div>
                    </div>
                </div>

                <!-- Accordion Section -->
                <div class="col-lg-6">
                    <div class="faq-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <h2 class="site-title my-3">Drone Technology for Medical Delivery</h2>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <!-- Drone Technology for Medical Delivery -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span><i class="fas fa-drones"></i></span> Drone Technology for Medical Delivery
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Drone technology for medical delivery involves using unmanned aerial vehicles (UAVs) to transport essential medical supplies, such as vaccines, blood, and medications, to remote or hard-to-reach areas. This innovation addresses the challenges of timely delivery and access to healthcare resources, particularly in emergencies or underserved regions. Key benefits include:
                                        <ul>
                                            <li><strong>Rapid Response:</strong> Quick transport of medical supplies in urgent situations, ensuring faster healthcare intervention.</li>
                                            <li><strong>Accessibility:</strong> Reaching areas that are difficult to access due to poor infrastructure, bad weather, or challenging geography.</li>
                                            <li><strong>Efficiency:</strong> Reducing logistical costs and delays associated with traditional delivery methods.</li>
                                            <li><strong>Enhanced Healthcare Reach:</strong> Providing critical healthcare supplies in real-time to areas that need them the most.</li>
                                        </ul>
                                        This technology helps ensure that people in remote locations or during emergencies can receive vital medical care swiftly and effectively.
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
