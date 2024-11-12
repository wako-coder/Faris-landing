@extends('layouts.app')

@section('content')
<main class="main">

    <div class="site-breadcrumb" style="background: url('assets/img/about/portfolio_04.jpeg')">
        <div class="container">
            <h2 class="breadcrumb-title">Research & Development</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.html">Home</a></li>
                <li class="active">Research & Development</li>
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
                                    <a href="#"><i class="far fa-angle-double-right"></i>Research & Development</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Software Development</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>IT Consulting</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Cybersecurity</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Cloud Computing</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Data Analytics</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Network Solutions</a>
                                </div>
                            </div>
                            <div class="widget service-download">
                                <h4 class="widget-title">Download</h4>
                                <a href="#"><i class="far fa-file-pdf"></i> Download Research Overview</a>
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
                                <h3 class="mb-30">Research & Development</h3>
                                <p class="mb-20">
                                    Our Research & Development (R&D) services focus on creating innovative solutions tailored to evolving industry needs. We specialize in conducting in-depth research to bring forward-thinking technologies and methodologies to your business.
                                </p>
                                <p class="mb-20">
                                    With a commitment to advancing technological solutions, our R&D team explores emerging trends, optimizes processes, and develops prototypes. We aim to drive innovation and equip your organization with cutting-edge resources for future growth.
                                </p>
                                <div class="row">
                                    <div class="col-md-6 mb-20">
                                        <img src="{{ asset('assets/img/about/emile-perron-xrVDYZRGdw4-unsplash-scaled-e1654596346828.jpg.webp') }}" alt="R&D Image 1">
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <img src="{{ asset('assets/img/gallery/A20I3216-1-scaled (1).jpg') }}" alt="R&D Image 2">
                                    </div>
                                </div>
                                <p class="mb-20">
                                    Our R&D approach is agile and adaptable, ensuring each project is customized to address specific industry challenges and opportunities. We emphasize innovative, sustainable solutions to propel your business forward.
                                </p>
                                <div class="my-4">
                                    <div class="mb-3">
                                        <h3 class="mb-3">Our Research Process</h3>
                                        <p>Our R&D process is structured to maximize innovation and collaboration. It includes phases of exploration, prototype development, testing, and analysis to deliver solutions that align with your strategic goals.</p>
                                    </div>
                                    <ul class="service-single-list">
                                        <li><i class="far fa-check"></i>Comprehensive research and industry analysis.</li>
                                        <li><i class="far fa-check"></i>Prototype development and iterative testing.</li>
                                        <li><i class="far fa-check"></i>Collaboration with industry experts and stakeholders.</li>
                                        <li><i class="far fa-check"></i>Continuous innovation and refinement.</li>
                                        <li><i class="far fa-check"></i>Focus on sustainability and future readiness.</li>
                                    </ul>
                                </div>
                                <div class="my-4">
                                    <h3 class="mb-3">Service Features</h3>
                                    <p>Our R&D services offer a unique blend of creativity, technical expertise, and a future-focused approach, providing your business with the tools to excel in a rapidly evolving marketplace.</p>
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
