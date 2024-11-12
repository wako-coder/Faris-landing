@extends('layouts.app')

@section('content')
<main class="main">

    <div class="site-breadcrumb" style="background: url('assets/img/about/portfolio_04.jpeg')">
        <div class="container">
            <h2 class="breadcrumb-title">Talent Development & Capacity Building</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.html">Home</a></li>
                <li class="active">Talent Development & Capacity Building</li>
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
                                    <a href="#"><i class="far fa-angle-double-right"></i>Talent Development & Capacity Building</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>IT Consulting</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Cybersecurity</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Cloud Computing</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Data Analytics</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Network Solutions</a>
                                </div>
                            </div>
                            <div class="widget service-download">
                                <h4 class="widget-title">Download</h4>
                                <a href="#"><i class="far fa-file-pdf"></i> Download Training Overview</a>
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
                                <h3 class="mb-30">Talent Development & Capacity Building</h3>
                                <p class="mb-20">
                                    Our Talent Development & Capacity Building services are designed to enhance workforce skills, boost productivity, and foster continuous learning. We deliver comprehensive training programs tailored to meet the specific goals of your organization.
                                </p>
                                <p class="mb-20">
                                    Through our programs, we focus on building core competencies, promoting leadership, and encouraging innovation within your teams. Our solutions are customized to address industry-specific challenges and ensure the professional growth of your employees.
                                </p>
                                <div class="row">
                                    <div class="col-md-6 mb-20">
                                        <img src="{{ asset('assets/img/about/emile-perron-xrVDYZRGdw4-unsplash-scaled-e1654596346828.jpg.webp') }}" alt="Talent Development Image 1">
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <img src="{{ asset('assets/img/gallery/A20I3216-1-scaled (1).jpg') }}" alt="Talent Development Image 2">
                                    </div>
                                </div>
                                <p class="mb-20">
                                    Our training programs cover a wide range of skills from technical expertise to soft skills, ensuring well-rounded employee development. We believe in empowering your workforce to drive positive change within your organization.
                                </p>
                                <div class="my-4">
                                    <div class="mb-3">
                                        <h3 class="mb-3">Our Training Process</h3>
                                        <p>We use a structured approach to training and capacity building that includes assessment, customized training modules, hands-on learning, and ongoing support. Our process ensures that learning outcomes are achieved effectively.</p>
                                    </div>
                                    <ul class="service-single-list">
                                        <li><i class="far fa-check"></i>Needs assessment and skill gap analysis.</li>
                                        <li><i class="far fa-check"></i>Development of tailored training modules.</li>
                                        <li><i class="far fa-check"></i>Interactive learning and real-world application.</li>
                                        <li><i class="far fa-check"></i>Continuous feedback and improvement.</li>
                                        <li><i class="far fa-check"></i>Post-training support and mentorship.</li>
                                    </ul>
                                </div>
                                <div class="my-4">
                                    <h3 class="mb-3">Service Features</h3>
                                    <p>Our Talent Development & Capacity Building services offer flexible training schedules, expert instructors, and a focus on both technical and interpersonal skills. We work with you to build a workforce that’s prepared for today’s challenges and tomorrow’s innovations.</p>
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
