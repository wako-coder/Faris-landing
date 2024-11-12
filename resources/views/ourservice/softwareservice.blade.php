@extends('layouts.app')

@section('content')
<main class="main">

    <div class="site-breadcrumb" style="background: url('assets/img/about/portfolio_04.jpeg')">
        <div class="container">
            <h2 class="breadcrumb-title">ICT & Software Development</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.html">Home</a></li>
                <li class="active">ICT & Software Development</li>
            </ul>
        </div>
    </div>

    <div class="service-single-area py-120">
        <div class="container">
            <div class="service-single-wrapper">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="service-sidebar">
                            <div class="widget category">
                                <h4 class="widget-title">Our Services</h4>
                                <div class="category-list">
                                    <a href="#"><i class="far fa-angle-double-right"></i>Software Development</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Web & Mobile App Development</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>IT Consulting</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Cybersecurity</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Cloud Computing</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Data Analytics</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Network Solutions</a>
                                </div>
                            </div>
                            <div class="widget service-download">
                                <h4 class="widget-title">Download</h4>
                                <a href="#"><i class="far fa-file-pdf"></i> Download Service Overview</a>
                                <a href="#"><i class="far fa-file-alt"></i> Download Case Study</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="service-details">
                            <div class="service-details-img mb-30">
                                <img src="assets/img/about/portfolio_04.jpeg" alt="thumb">
                            </div>
                            <div class="service-details">
                                <h3 class="mb-30">Ict and Software Development</h3>
                                <p class="mb-20">
                                    Our software development services are tailored to meet the specific needs of businesses, ensuring high-quality, reliable software solutions that drive efficiency and growth. From application design to deployment, we focus on delivering seamless user experiences.
                                </p>
                                <p class="mb-20">
                                    With our expertise in ICT and software solutions, we aim to provide sustainable and scalable products that are easily adaptable to future technological advancements. We prioritize security, scalability, and performance at every step of development.
                                </p>
                                <div class="row">
                                    <div class="col-md-6 mb-20">
                                        <img src="{{ asset('assets/img/about/emile-perron-xrVDYZRGdw4-unsplash-scaled-e1654596346828.jpg.webp') }}" >
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <img src="{{ asset('assets/img/gallery/A20I3216-1-scaled (1).jpg') }}" alt>
                                    </div>
                                </div>
                                <p class="mb-20">
                                    Our software development process follows the best practices of agile methodologies, ensuring that we deliver solutions that align with your business objectives. Every feature is crafted to provide value and enhance operational effectiveness.
                                </p>
                                <div class="my-4">
                                    <div class="mb-3">
                                        <h3 class="mb-3">Our Work Process</h3>
                                        <p>We follow a structured approach to ICT and software development that ensures transparency, timely delivery, and continuous improvements. Our process includes planning, design, development, testing, and post-launch support to guarantee the success of your project.</p>
                                    </div>
                                    <ul class="service-single-list">
                                        <li><i class="far fa-check"></i>Comprehensive project analysis and planning.</li>
                                        <li><i class="far fa-check"></i>Agile development with regular progress updates.</li>
                                        <li><i class="far fa-check"></i>Thorough testing and quality assurance.</li>
                                        <li><i class="far fa-check"></i>Dedicated post-launch support and maintenance.</li>
                                        <li><i class="far fa-check"></i>Focus on scalability, security, and performance.</li>
                                    </ul>
                                </div>
                                <div class="my-4">
                                    <h3 class="mb-3">Service Features</h3>
                                    <p>Our ICT and software development services come with several distinctive features, including dedicated project management, expert technical support, and a results-oriented approach. We strive to help your business leverage technology for competitive advantage.</p>
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