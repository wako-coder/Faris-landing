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
                            <div class="hero-content" style=" position: relative; top:80px;">
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
    

    <div class="service-single-area py-80">
        <div class="container">
            <div class="service-single-wrapper">
                <div class="row">
                    <div class="col-xl-2 col-lg-2">
                    </div>
                    <div class="col-xl-12 col-lg-8">
                        <div class="service-details">
                            <div class="service-details">
                                <h3 class="mb-20 mt-20">Digital Transformation Services</h3>
                                <p class="mb-20">
                                    At FARIS Technologies, we offer a future-proof approach - Digital Ascendancy Services. We leverage cutting-edge technologies to propel your business to the next level. This comprehensive suite of services seamlessly integrates digital solutions across your entire organization, fundamentally disrupting your current operations and unlocking exponential improvements in performance and customer experience.
                                </p>

                                <h4 class="mb-30 mt-20">Key Ascendancy Pillars:</h4>
                                <ul>
                                    <li><i class="far fa-check"></i> AI-Powered Solution: Harness the power of Artificial Intelligence to glean actionable insights from your data, driving data-driven decision making and unlocking hidden opportunities.</li>
                                    <li><i class="far fa-check"></i> Hyper-Connected Ecosystem: Forge a seamlessly integrated ecosystem of interconnected devices, applications, and platforms through the Internet of Things (IoT) for real-time visibility and automation.</li>
                                    <li><i class="far fa-check"></i> Next-Gen Customer Engagement: Craft immersive customer experiences through cutting-edge technologies like augmented reality and virtual reality, fostering brand loyalty and advocacy.</li>
                                    <li><i class="far fa-check"></i> Cybersecurity Fortress: Implement a robust and constantly evolving cybersecurity architecture to safeguard your data and assets in the ever-evolving digital landscape.</li>
                                    <li><i class="far fa-check"></i> Cloud Supremacy: Migrate your infrastructure to the cloud, achieving unparalleled scalability, agility, and cost optimization.</li>
                                    <li><i class="far fa-check"></i> Internet of Things (IoT): Connecting devices and systems to gather and analyze data for better decision-making.</li>
                                    <li><i class="far fa-check"></i> Mobile App Development: Creating mobile applications to enhance customer engagement and business operations.</li>
                                    <li><i class="far fa-check"></i> Web Development and Design: Designing and developing user-friendly websites and web applications.</li>
                                    <li><i class="far fa-check"></i> E-commerce: Setting up online stores and implementing digital marketing strategies.</li>
                                </ul>

                                <h3 class="mb-30 mt-20">Embrace the Digital Ascendancy.</h3>
                                <p>
                                    Collaborate with FARIS Technologies and future-proof your business today!
                                </p>
                                <div class="service-details-img mb-30">
                                    <img src="assets/img/about/15022851879.png" alt="thumb">
                                </div>
                                <h3 class="mb-30 mt-20">By embracing digital transformation services, your business can:</h3>
                                <ul>
                                    <li><i class="far fa-check"></i> Improve efficiency: Automate tasks, streamline processes, and reduce costs.</li>
                                    <li><i class="far fa-check"></i> Enhance customer experience: Deliver personalized experiences and improve customer satisfaction.</li>
                                    <li><i class="far fa-check"></i> Innovate products and services: Create new products and services to stay ahead of the competition.</li>
                                    <li><i class="far fa-check"></i> Make data-driven decisions: Utilize data analytics to identify trends and opportunities.</li>
                                    <li><i class="far fa-check"></i> Increase revenue: Expand market reach and generate new revenue streams.</li>
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
