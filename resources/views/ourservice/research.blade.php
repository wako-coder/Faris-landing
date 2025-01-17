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
                                    Empowering innovation through advanced research and engineering solutions.
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
                <!-- Localized Mapping Solution Section -->
                <div class="col-lg-6">
                    <div class="faq-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="img" style="padding-right: 50px">
                            <img src="{{ asset('assets/img/gallery/GIS.png') }}" alt="Research Insights">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <h2 class="site-title my-3">Akwarach</h2>
                        </div>
                        <div class="accordion" id="accordionLocalized">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingLocalized">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLocalized" aria-expanded="true" aria-controls="collapseLocalized">
                                        <span><i class="far fa-map"></i></span> Localized Mapping Solution
                                    </button>
                                </h2>
                                <div id="collapseLocalized" class="accordion-collapse collapse show" aria-labelledby="headingLocalized">
                                    <div class="accordion-body">
                                        FARIS Technologies has developed a localized mapping solution designed specifically for Ethiopia's unique geographic and infrastructural challenges. This platform integrates real-time traffic data, helping drivers navigate effectively by avoiding obstacles such as unexpected traffic jams, roadworks, or accidents. The solution is accessible via SMS for non-smartphone users and through an intuitive mobile app for smartphone users, ensuring inclusivity and wide adoption.
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
        <!-- Drone Technology Section -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="img" style="padding-right: 50px">
                            <img src="{{ asset('assets/img/gallery/Drone technology.png') }}" alt="Drone Technology">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <h2 class="site-title my-3">Drone Technology for Medical Delivery</h2>
                        </div>
                        <div class="accordion" id="accordionDrone">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingDrone">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDrone" aria-expanded="true" aria-controls="collapseDrone">
                                        <span><i class="fas fa-drones"></i></span> Drone Technology for Medical Delivery
                                    </button>
                                </h2>
                                <div id="collapseDrone" class="accordion-collapse collapse show" aria-labelledby="headingDrone">
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
    
    <div class="faq-area py-80">
        <!-- AI Analytics Solutions Section -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <h2 class="site-title my-3">AI Analytics Solutions</h2>
                        </div>
                        <div class="accordion" id="accordionAI">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingAI">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAI" aria-expanded="true" aria-controls="collapseAI">
                                        <span><i class="fas fa-brain"></i></span> AI Analytics Solutions
                                    </button>
                                </h2>
                                <div id="collapseAI" class="accordion-collapse collapse show" aria-labelledby="headingAI">
                                    <div class="accordion-body">
                                        Unleash the power of data with our industry-leading AI Analytics Solutions. We transform raw information into actionable insights that fuel smarter decision-making and unlock hidden potential within your business. Our expert team leverages cutting-edge AI and machine learning to:
                                        <ul>
                                            <li><strong>AI Analytics:</strong> Extract valuable insights from vast amounts of data using sophisticated machine learning techniques. Gain a deeper understanding of your customers, operations, and market trends to inform strategic decision-making.</li>
                                            <li><strong>AutoML (Automated Machine Learning):</strong> Simplify the AI development process with AutoML. This technology automates model selection, training, and optimization, allowing you to leverage AI’s power without extensive coding expertise.</li>
                                            <li><strong>Generative AI:</strong> Unlock the potential of AI to create entirely new content. Our Generative AI solutions can generate realistic images, text, and code, fostering innovation in areas like product design, marketing materials, and software development.</li>
                                        </ul>
                                        Empower your business to harness the full potential of data and AI, driving growth, innovation, and competitive advantage.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="img" style="padding-right: 50px">
                            <img src="{{ asset('assets/img/gallery/DTS (39) (2).jpg') }}" alt="Drone Technology">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>

    
</main>

@endsection
