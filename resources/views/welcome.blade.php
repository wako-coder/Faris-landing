@extends('layouts.app')
@section('content')
    



<div class="search-popup">
    <button class="close-search"><span class="far fa-times"></span></button>
    <form action="#">
        <div class="form-group">
            <input type="search" name="search-field" placeholder="Search Here..." required>
            <button type="submit"><i class="far fa-search"></i></button>
        </div>
    </form>
</div>

<main class="main">
    <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme">
            <!-- Slide 1 -->
            <div class="hero-single" style="background: url(assets/img/about/Landing.jpg)">
            {{-- <div class="hero-single" style="background: url(assets/img/shag.jpg)"> --}}
                <!-- Video background -->
                {{-- <video autoplay loop muted playsinline class="video-background">
                    <source src="https://videos.pexels.com/video-files/11041434/c:\Users\waqo1\Downloads\Telegram Desktop\Faris Photo\Office Photo\A20I2980.JPG-hd_1920_1080_30fps.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video> --}}
                
                <!-- Content container -->
                <div class="container">
                    <div class="row align-items-center">
                     
                        <div class="col-md-7 col-lg-7">
                            <div class="hero-content">
                                <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Think out of Earth</h6>
                                <h1 class="hero-title" data-animation="fadeInUp" data-delay=".50s">
                                    The Hub of <span>Emerging</span> Technology in Africa
                                </h1>
                                <p data-animation="fadeInUp" data-delay=".75s"></p>
                                <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                    <a href="#" class="theme-btn">About More<i class="fas fa-arrow-right"></i></a>
                                    {{-- <a href="#" class="theme-btn theme-btn2" style="color: black; box-shadow: 0px 0px 0px rgba(255, 255, 255, 0.1); hover{color:white}">Learn More<i class="fas fa-arrow-right"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 2 -->
            <div class="hero-single" style="position: relative; background: url('{{ asset('assets/img/A20I3407.JPG') }}') no-repeat center center; background-size: cover;">
                <div style="content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to bottom right, rgba(0, 39, 57, 0.95) 0%, rgba(0, 0, 0, 0.1) 100%); z-index: 1;"></div>
            
            {{-- <div class="hero-single" style="background: url('{{ asset('assets/img/A20I3685.JPG') }}')"> --}}
                {{-- <video autoplay loop muted playsinline class="video-background">
                    <source src="https://videos.pexels.com/video-files/6156511/6156511-hd_1920_1080_24fps.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video> --}}
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <div class="hero-content">
                                <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Think out of Earth</h6>
                                <h1 class="hero-title" data-animation="fadeInUp" data-delay=".50s">
                                    "Empowering Africa <span>Through Innovation in AI</span> and Emerging Technologies"
                                </h1>
                                <p data-animation="fadeInUp" data-delay=".75s">
                                    We create cutting-edge web solutions tailored to help businesses thrive in the digital world.
                                </p>
                                <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                    <a href="#" class="theme-btn">About More<i class="fas fa-arrow-right"></i></a>
                                    <a href="#" class="theme-btn theme-btn2">Learn More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Slide 3 -->
            <div class="hero-single" style="background: url('{{ asset('assets/img/pixelcut-export.jpeg') }}')">
                <div class="container">
                    <div class="row align-items-center">
                  <div class="col"></div>
                        <div class="col-md-8 col-lg-8">
                            <div class="hero-content">
                                <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Think out of Earth</h6>
                                <h1 class="hero-title" data-animation="fadeInUp" data-delay=".50s">
                                    Technology Meets <span> Expertise at </span>FARIS Technologies
                                </h1>
                                <p data-animation="fadeInUp" data-delay=".75s">
                                    There are many variations of passages orem psum available but the majority have suffered alteration in some form by injected humour or randomised.
                                </p>
                                <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                    <a href="#" class="theme-btn">About More<i class="fas fa-arrow-right"></i></a>
                                    {{-- <a href="#" class="theme-btn theme-btn2">Learn More<i class="fas fa-arrow-right"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="appointment">
    <div class="col-lg-8">
    </div>
</div>
<div class="feature-area pt-120 col-10 mx-auto">
        <div class="testimonial-slider owl-carousel " data-wow-duration="1s"
        data-wow-delay=".25s">
            <div class="testimonial-single" style="padding: 0px;">
                <div class="feature-item">
                    <span class="count">01</span>
                    <div class="feature-icon">
                        <img src="{{ asset('assets/img/icon/BPO-01.svg') }}" alt>
                    </div>
                    <div class="feature-content">
                        <h4>Digital Transformation Services</h4>
                        <p> At FARIS Technologies, we offer a future-proof approach - Digital Ascendancy Services. We leverage cutting-edge technologies to propel your business to the next level</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-single" style="padding: 0px;">
                <div class="feature-item">
                    <span class="count">02</span>
                    <div class="feature-icon">
                        <img src="{{ asset('assets/img/icon/Digital.svg') }}" alt>
                    </div>
                    <div class="feature-content">
                        <h4>Business Process Outsourcing</h4>
                        <p>At FARIS technologies, we elevate your business with our comprehensive BPO solutions, from providing exceptional customer service and support to delivering innovative IT services  </p>
                    </div>
                </div>
            </div>
            <div class="testimonial-single" style="padding:0px;">
                <div class="feature-item">
                    <span class="count">03</span>
                    <div class="feature-icon">
                        <img src="{{ asset('assets/img/icon/knowldege.svg') }}" alt>
                    </div>
                    <div class="feature-content">
                        <h4>Research & Development</h4>
                        <p>Leveraging AI and space science, we bring innovative solutions to transform industries.   We deliver robust, innovative web and software solutions to drive business success.</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-single" style="padding: 0px;">
                <div class="feature-item">
                    <span class="count">04</span>
                    <div class="feature-icon">
                        <img src="{{ asset('assets/img/icon/Research.svg') }}"  alt>
                    </div>
                    <div class="feature-content">
                        <h4>Knowledge and Capacity Building</h4>
                        <p>Leveraging AI and space science, we bring innovative solutions to transform industries. We deliver robust and Streamline your business processes with our expert outsourcing solutions.</p>
                    </div>
                </div>
            </div>
    </div>
</div>

<div class="about-area py-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">
                    <div class="about-img">
                        <div class="about-img-1">
                            <img src="{{ asset('assets/img/about/portfolio_04.jpeg') }}" alt>
                        </div>
                        <div class="about-img-2">
                            <img src="{{ asset('assets/img/about/emile-perron-xrVDYZRGdw4-unsplash-scaled-e1654596346828.jpg.webp') }}" alt>
                        </div>
                    </div>
                    <div class="about-shape">
                        <img src="{{ asset('assets/img/shape/01.png') }}" alt>
                    </div>
                    <div class="about-experience">
                        <h1>5+</h1>
                        <div class="about-experience-text">
                            Years Of <br> Innovation
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <span class="site-title-tagline"><i class="fas fa-bring-forward"></i> About Us</span>
                        <h2 class="site-title">
                            Pioneering the Future of <span>Technology</span>
                        </h2>
                    </div>
                    <p class="about-text">
                        Welcome to FARIS Technology Knowledge & Capacity Building Division, where we are committed to shaping Ethiopia's future through cutting-edge felids in digital emerging technologies Space Science, Robotics, Rocketry, Artificial Intelligence (AI), Data Science and Analytics, the Internet of Things (IoT), Blockchain Technology, Virtual Reality (VR) and Augmented Reality (AR), Cloud Computing, Cybersecurity, 5G Technology, Quantum Computing, Edge Computing, Biotechnology, and Automation and Robotics are key fields driving innovation and transformation across various industries.
                    </p>
                    <div class="about-list-wrap">
                        <ul class="about-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/money.svg') }}" alt>
                                </div>
                                <div class="content">
                                    <h4>Cost-Effective Solutions</h4>
                                    <p>Our services are designed to provide maximum value, combining innovation with affordability.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/trusted.svg') }}" alt>
                                </div>
                                <div class="content">
                                    <h4>Trusted by Innovators</h4>
                                    <p>We are the trusted partner of forward-thinking businesses ready to embrace the future.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="{{ url('/about') }}" class="theme-btn mt-4">Discover More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="service-area sa-bg pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="site-heading">
                    <span class="site-title-tagline"><i class="fas fa-bring-forward"></i> Services</span>
                    <h2 class="site-title service-text">Explore Our Best <span>Technology</span> Solutions</h2>
                    <p class="service-text">
                        We offer a wide range of innovative services in web development, app development, AI solutions, and space technology, designed to empower businesses and industries.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                    <div class="service-icon">
                        <img src="{{ asset('assets/img/icon/Digital.svg') }}" alt>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">
                            <a href="{{ url('/software') }}">Digital Transformation Services</a>
                        </h3>
                        <p class="service-text">
                            We deliver robust, innovative web and software solutions to drive business success.
                        </p>
                        <div class="service-arrow">
                            <a href="{{ url('/software') }}" class="service-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                    <div class="service-icon">
                        <img src="{{ asset('assets/img/icon/BPO-01.svg') }}" alt>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">
                            <a href="{{ url('/buisness') }}">Business Process Outsourcing</a>
                        </h3>
                        <p class="service-text">
                            Streamline your business processes with our expert outsourcing solutions.
                        </p>
                        <div class="service-arrow">
                            <a href="{{ url('/buisness') }}" class="service-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                    <div class="service-icon">
                        <img src="{{ asset('assets/img/icon/Research.svg') }}" alt>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">
                            <a href="{{ url('/digital') }}">Research & Development</a>
                        </h3>
                        <p class="service-text">
                            Advance your business with our cutting-edge research and development services.
                        </p>
                        <div class="service-arrow">
                            <a href="{{ url('/digital') }}" class="service-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                    <div class="service-icon">
                        <img src="{{ asset('assets/img/icon/knowldege.svg') }}" alt>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">
                            <a href="{{ url('/service-single') }}">knowledge and Capacity Building</a>
                        </h3>
                        <p class="service-text">
                            Secure, scalable cloud solutions to enhance your digital infrastructure.
                        </p>
                        <div class="service-arrow">
                            <a href="{{ url('/service-single') }}" class="service-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</div>



<div class="video-area py-100">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-4">
                <div class="site-heading mb-0 wow fadeInLeft" data-wow-delay=".25s">
                    <span class="site-title-tagline"><i class="fas fa-bring-forward"></i> Latest Video</span>
                    <h2 class="site-title"><span>Discover</span> Our Insights on AI & Space</h2>
                    <p>
                        Join our CEO as they share insights on the transformative power of AI technology and its impact on space science. This engaging discussion explores the future of innovation and exploration.
                    </p>
                    <a href="{{ url('/contact') }}" class="theme-btn mt-20">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="video-content wow fadeInRight" data-wow-delay=".25s"
                    style="background-image: url('{{ asset('assets/img/video/01.jpg') }}'); background-size: cover; background-position: center; padding: 50px; position: relative; border-radius: 15px;">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="video-wrap"
                                style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.3);">
                                <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                                src="https://www.youtube.com/embed/e1chb0Ga_oQ?autoplay=0&mute=1&rel=0"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="choose-area py-120">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <div class="choose-content wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <span class="site-title-tagline"><i class="fas fa-bring-forward"></i> Why Choose Us</span>
                        <h2 class="site-title">
                            When You Need Innovation, <span>We Are</span> Always Here
                        </h2>
                    </div>
                    <p>
                        Our team specializes in cutting-edge web and app development, AI solutions, and advancements in space science technology. We are dedicated to delivering reliable and transformative services.
                    </p>
                    <div class="choose-wrapper mt-4">
                        <div class="choose-item">
                            <div class="choose-icon">
                                <img src="{{ asset('assets/img/icon/team-2.svg') }}" alt>
                            </div>
                            <div class="choose-item-content">
                                <h4>Expert Developers</h4>
                                <p>Our skilled developers are committed to crafting innovative solutions that meet your unique needs.</p>
                            </div>
                        </div>
                        <div class="choose-item active">
                            <div class="choose-icon">
                                <img src="{{ asset('assets/img/icon/quality.svg') }}" alt>
                            </div>
                            <div class="choose-item-content">
                                <h4>Quality Assurance</h4>
                                <p>We implement rigorous testing protocols to ensure that our products are of the highest quality and reliability.</p>
                            </div>
                        </div>
                        <div class="choose-item">
                            <div class="choose-icon">
                                <img src="{{ asset('assets/img/icon/trusted.svg') }}" alt>
                            </div>
                            <div class="choose-item-content">
                                <h4>Your Trusted Technology Partner</h4>
                                <p>We build lasting relationships with our clients, offering support and guidance every step of the way.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="choose-img wow fadeInRight" data-wow-duration="1s" data-wow-delay=".25s">
                    <div class="row g-4">
                        <div class="col-6">
                            <img class="img-1" src="{{ asset('assets/img/choose/pexels-captainfrank_-696992066-1.jpg') }}" alt>
                        </div>
                        <div class="col-6">
                            <img class="img-2" src="{{ asset('assets/img/choose/emile-perron-xrVDYZRGdw4-unsplas.webp') }}" alt>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<h3 class="text-center pb-20">Our Partners</h3>
<div class="partner-area bg pt-20 pb-50 col-8 mx-auto" style="background-color: white">
    <div class="container">
    <div class="partner-wrapper partner-slider owl-carousel owl-theme">
    <img src="{{asset('assets/img/our_partners/aastu-01.png')}}" style="width: 90px" alt="thumb">
    <img src="{{asset('assets/img/our_partners/ibm-17.png')}}" style="width: 90px" alt="thumb">
    <img src="{{asset('assets/img/our_partners/mint-10.png')}}" style="width: 90px" alt="thumb">
    <img src="{{asset('assets/img/our_partners/oracle-21.png')}}" style="width: 90px" alt="thumb">
    <img src="{{asset('assets/img/our_partners/bdu-05.png')}}" style="width: 90px" alt="thumb">
    <img src="{{asset('assets/img/our_partners/nvidia-28.png')}}" style="width: 90px" alt="thumb">
    <img src="{{asset('assets/img/our_partners/sdnx-14.png')}}" style="width: 90px" alt="thumb">
    <img src="{{asset('assets/img/our_partners/plus id-23.png')}}" style="width: 90px" alt="thumb">
    <img src="{{asset('assets/img/our_partners/Hawasa-08.png')}}" style="width: 90px"  alt="thumb">
    <img src="{{asset('assets/img/our_partners/aau-02.png')}}" style="width: 90px" alt="thumb">
    <img src="{{asset('assets/img/our_partners/Ambo.png')}}" style="width: 90px" alt="thumb">
    <img src="{{asset('assets/img/our_partners/esss-07.png')}}" style="width: 90px" alt="thumb">
    <img src="{{asset('assets/img/our_partners/hp-22.png')}}" style="width: 90px" alt="thumb">
    <img src="{{asset('assets/img/our_partners/xtranet-18.png')}}" style="width: 90px" alt="thumb">
    <img src="{{asset('assets/img/our_partners/Insa-09.png')}}" style="width: 90px" alt="thumb">
    </div>
    </div>
    </div>

<div class="cta-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto text-center">
                <div class="cta-text">
                    <h1>Innovative <span>Technology</span> Solutions</h1>
                    <p>
                        As a leading tech startup, we specialize in cutting-edge web and app development, artificial intelligence, and space science technology. Our mission is to drive innovation and deliver tailored solutions that push the boundaries of what's possible.
                    </p>
                </div>
                {{-- <div class="mb-20 mt-10">
                    <a href="#" class="cta-border-btn"><i class="fal fa-headset"></i>+251-902122222</a>
                </div>
                <a href="{{ url('/contact') }}" class="theme-btn">Contact Us <i class="fas fa-arrow-right"></i></a> --}}
            </div>
        </div>
    </div>
</div>
<div class="counter-area">
    <div class="container">
        <div class="counter-wrap">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/repair-2.svg') }}" alt>
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="100" data-speed="3000">100</span>
                            <h6 class="title">+ Projects Done</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/happy.svg') }}" alt>
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="95" data-speed="3000">95</span>
                            <h6 class="title">+ Happy Clients</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/team-2.svg') }}" alt>
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="45" data-speed="3000">45</span>
                            <h6 class="title">+ Experts Staffs</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/award.svg') }}" alt>
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="50" data-speed="3000">50</span>
                            <h6 class="title">+ Win Awards</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gallery-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="site-heading text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                    <span class="site-title-tagline"><i class="fas fa-bring-forward"></i> Photo Gallery</span>
                    <h2 class="site-title">Explore Photo <span>Gallery</span></h2>
                    <div class="heading-divider"></div>
                </div>
                <div class="filter-controls wow fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                    <ul class="filter-btns">
                        <li class="active" data-filter="*"><i class="far fa-computer-speaker"></i> All</li>
                        <li data-filter=".cat1"><i class="far fa-mobile"></i> Our Teams</li>
                        <li data-filter=".cat2"><i class="far fa-laptop"></i> Our Bootcamp</li>
                        <li data-filter=".cat3"><i class="far fa-tv"></i> Our Clients</li>
                        <li data-filter=".cat4"><i class="far fa-tablet"></i> Meetings</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-3 filter-box popup-gallery wow fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">

            <!-- Gallery Item 1 -->
            <div class="col-md-4 filter-item cat3 cat5">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="{{ asset('assets/img/office/meeting.JPG') }}" alt>
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{ asset('assets/img/office/meeting.JPG') }}"><i class="far fa-camera"></i></a>
                    </div>
                </div>
            </div>



            <!-- Gallery Item 6 -->
            <div class="col-md-4 filter-item cat2">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="{{ asset('assets/img/office/robot2.JPG') }}" alt>
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{ asset('assets/img/office/robot2.JPG') }}"><i class="far fa-camera"></i></a>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 7 -->
            <div class="col-md-4 filter-item cat2">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="{{ asset('assets/img/office/robot3.JPG') }}" alt>
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{ asset('assets/img/office/robot3.JPG') }}"><i class="far fa-camera"></i></a>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 8 -->
            <div class="col-md-4 filter-item cat2 ">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="{{ asset('assets/img/office/kids.JPG') }}" alt>
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{ asset('assets/img/office/kids.JPG') }}"><i class="far fa-camera"></i></a>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 9 -->
            <div class="col-md-4 filter-item cat4 cat3">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="{{ asset('assets/img/office/A20I2667.JPG') }}" alt>
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{ asset('assets/img/office/A20I2667.JPG') }}"><i class="far fa-camera"></i></a>
                    </div>
                </div>
            </div>
             
          

            <!-- Gallery Item 10 -->
            <div class="col-md-4 filter-item cat1 cat3 cat4 cat5">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="{{ asset('assets/img/office/A20I3163.jpg') }}" alt>
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{ asset('assets/img/office/A20I3163.jpg') }}"><i class="far fa-camera"></i></a>
                    </div>
                </div>
            </div>

         

            

        </div>
    </div>
</div>
</main>

<h3 class="text-center pb-20">Our Clients</h3>
<div class="partner-area bg pt-20 pb-50 col-8 mx-auto" style="background-color: white">
    <div class="container">
    <div class="partner-wrapper partner-slider owl-carousel ">
    <img src="{{asset('assets/img/our_clients/dbe-30.png')}}" style="width: 100px;" alt="thumb">
    <img src="{{asset('assets/img/our_clients/emfa-06.png')}}" style="width: 100px" alt="thumb">
    <img src="{{asset('assets/img/our_clients/italy-embassy.png')}}" style="width: 100px" alt="thumb">
    <img src="{{asset('assets/img/our_clients/koica-33.png')}}" style="width: 100px" alt="thumb">
    <img src="{{asset('assets/img/our_clients/Mint-10.png')}}" style="width: 100px" alt="thumb">
    <img src="{{asset('assets/img/our_clients/wasasa-29.png')}}" style="width: 100px" alt="thumb">
    <img src="{{asset('assets/img/our_clients/world-bank-32.png')}}" style="width: 100px" alt="thumb">
    </div>
    </div>
    </div>
        @endsection

