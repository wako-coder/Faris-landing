@extends('layouts.app')

@section('content')
<main class="main">

    <div class="site-breadcrumb" style="background: url('assets/img/about/space-tech.jpg')">
        <div class="container">
            <h2 class="breadcrumb-title">Space Science Technology</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.html">Home</a></li>
                <li class="active">Space Science Technology</li>
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
                                    <a href="#"><i class="far fa-angle-double-right"></i>Space Science Technology</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Data Analytics</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>IT Consulting</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Cybersecurity</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Cloud Computing</a>
                                    <a href="#"><i class="far fa-angle-double-right"></i>Network Solutions</a>
                                </div>
                            </div>
                            <div class="widget service-download">
                                <h4 class="widget-title">Download</h4>
                                <a href="#"><i class="far fa-file-pdf"></i> Download Space Research Overview</a>
                                <a href="#"><i class="far fa-file-alt"></i> Download Case Study</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="service-details">
                            <div class="service-details-img mb-30">
                                <img src="assets/img/about/space-tech.jpg" alt="Space Science Technology">
                            </div>
                            <div class="service-details">
                                <h3 class="mb-30">Space Science Technology</h3>
                                <p class="mb-20">
                                    Our Space Science Technology division is dedicated to advancing knowledge and capabilities in the field of space exploration. We conduct groundbreaking research and develop cutting-edge technologies aimed at pushing the boundaries of what’s possible in space.
                                </p>
                                <p class="mb-20">
                                    By focusing on innovation and exploration, we aim to support the scientific community and contribute to the global understanding of our universe. Our projects span various areas including satellite technology, planetary research, and space exploration instruments.
                                </p>
                                <div class="row">
                                    <div class="col-md-6 mb-20">
                                        <img src="{{ asset('assets/img/about/space1.jpg') }}" alt="Space Innovation 1">
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <img src="{{ asset('assets/img/about/space2.jpg') }}" alt="Space Innovation 2">
                                    </div>
                                </div>
                                <p class="mb-20">
                                    With a team of experts and state-of-the-art facilities, we are equipped to handle complex challenges and deliver solutions that advance space science technology. We work in collaboration with other research institutions to ensure the highest standards of innovation.
                                </p>
                                <div class="my-4">
                                    <div class="mb-3">
                                        <h3 class="mb-3">Our Space Research Process</h3>
                                        <p>Our approach to space science technology is structured, rigorous, and collaborative. We focus on research, design, testing, and implementation, ensuring that our projects deliver meaningful contributions to space exploration.</p>
                                    </div>
                                    <ul class="service-single-list">
                                        <li><i class="far fa-check"></i>Comprehensive space research and analysis.</li>
                                        <li><i class="far fa-check"></i>Design and development of exploration tools.</li>
                                        <li><i class="far fa-check"></i>Rigorous testing and quality assurance.</li>
                                        <li><i class="far fa-check"></i>Collaboration with global space research organizations.</li>
                                        <li><i class="far fa-check"></i>Focus on sustainability and long-term impact.</li>
                                    </ul>
                                </div>
                                <div class="my-4">
                                    <h3 class="mb-3">Service Features</h3>
                                    <p>Our Space Science Technology services are distinguished by expert project management, dedicated research teams, and an emphasis on creating technology that furthers human understanding of space. We are committed to pushing the frontiers of knowledge.</p>
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
