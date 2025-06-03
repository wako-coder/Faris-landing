
@extends('layouts.app')
@section('content')
<style>
    .card {
      position: relative;
      border: none;
      overflow: hidden;
      transition: background 0.5s ease, transform 0.5s ease;
      min-height: 300px; /* Minimum height */
      max-height: 340px;
    }
    
    .card > img {
      border-radius: 5px;
      width: 100%;
      height: 100%;
      filter: brightness(0.6);
      object-fit: contain;
      transition: opacity 1s ease;
      z-index:1;
    }
    .card > h4{
        position:relative;

        top:55px;
        font: bold;
        color:white;
        z-index: 2;
    }
    .card:hover {
      border: 1px solid #757F95;
      background: white;
      border-radius: 15px;
      transform: scale(1.05); /* Slight zoom on hover */
    }
    .card:hover > h4{
        display: none;
    }
    .card:hover > #card-img {
      opacity: 0; /* Hide the image */
    }
  
    .card .card-body {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background: transparent;
      color: black;
      opacity: 0;
      z-index: 2;
      transition: opacity 0.5s ease;
    }
  
    .card:hover .card-body {
      opacity: 1; /* Show content */
    }
  
    .card-body h4 {
      font-weight: bold;
      color: #757F95;
      font-size: 1.5rem;
      margin-bottom: 0.5rem;
      transform: translateY(30px);
      opacity: 0;
      transition: transform 0.5s ease, opacity 0.5s ease;
    }
  
    .card:hover .card-body h4 {
      transform: translateY(0); /* Slide in from below */
      opacity: 1; /* Fade in */
    }
  
    .card-body p {
      color: #757F95;
      font-size: 0.9rem;
      text-align: center;
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.5s ease, transform 0.5s ease;
    }
  
    .card:hover .card-body p {
      opacity: 1; /* Fade in */
      transform: translateY(0); /* Slide in */
    }
  
    /* Icon Animation */
    .card-body .feature-icon {
      opacity: 0;
      transform: scale(0.5);
      transition: opacity 0.5s ease, transform 0.5s ease;
    }
  
    .card:hover .card-body .feature-icon {
      opacity: 1;
      transform: scale(1); /* Icon grows into view */
    }
  </style>
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
    {{-- <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme">
            <!-- Slide 1 -->
            <div class="hero-single">
                <!-- Video background -->
                <video autoplay poster="{{asset('assets/img/office/A20I3269-1-1-scaled-e1697205751873.jpg')}}" loading="lazy" loop muted playsinline class="video-background"  style="filter: brightness(0.5);" >
                    <source src="{{ asset('assets/img/video/Company.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                
                <!-- Content container -->
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7 col-lg-10">
                            <div class="hero-content" style="position: relative; top:150px;">
                                <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Think out of Earth<span class="d-none d-lg-inline"><img src="{{ asset('assets/img/gallery/anime-unscreen.gif') }}"  style="width:150px; display:inline; position: relative; right:40px; bottom:10px;" alt="giff"></span></h6> 
                                <h2 class="hero-title" data-animation="fadeInUp" data-delay=".50s">
                                    The Hub of <span>Emerging</span> Technology in Africa 
                                </h2>
                                <p data-animation="fadeInUp" data-delay=".75s"></p>
                            </div>
                            <div>
                                <div class="d-none d-sm-block" style="position: relative; top:150px; margin-bottom:50px;">
                                    <a href="{{ url('/contact') }}" class="theme-btn">Learn More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div> --}}
    <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme">
            <div class="hero-single">
                <!-- Video background -->
                <video autoplay poster="{{asset('assets/img/office/A20I3269-1-1-scaled-e1697205751873.jpg')}}" loading="lazy" loop muted playsinline class="video-background"  style="filter: brightness(0.5);" >
                    <source src="{{ asset('assets/img/video/faris.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                
                <!-- Content container -->
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <div class="hero-content" style="position: relative; top:150px;">
                                <h6 class="site-title" data-animation="fadeInUp" data-delay=".25s" style="color: white;">Think out of Earth !</h6> 
                                <h4 class="pt-4" data-animation="fadeInUp" data-delay=".50s">
                                    The Hub of <span style="color: white">Emerging</span> Technology in Africa 
                                </h4>
                                <p data-animation="fadeInUp" data-delay=".75s"></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="hero-single" style="background: url({{asset('assets/img/office/A20I3269-1-1-scaled-e1697205751873.jpg')}});">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="hero-content" style="position: relative; top:150px;">
                                <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s" style="color: white;" >Think out of Earth</h6> 
                                <h4 class="site-title" data-animation="fadeInUp" data-delay=".50s">
                                    The Hub of <span style="color: white">Emerging</span> Technology in Africa 
                                </h4>
                                <p data-animation="fadeInUp" data-delay=".75s"></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    
    <div class="appointment">
    <div class="col-lg-8">
    </div>
</div>
<div class="cta-area section"  id="section1" style="position: relative; top:100px;">
    <div class="about-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="about-img">
                            <div class="about-img-1">
                                <video autoplay poster="{{ asset('assets/img/office/A20I3269-1-1-scaled-e1697205751873.jpg') }}" 
       loading="lazy" loop muted playsinline 
       class="video-background"  
       style="filter: brightness(0.5); border-radius: 20px; width: 75%;">
    <source src="{{ asset('assets/img/newcontents/0528.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
</video>

                            </div>
                            {{-- <div class="about-img-2">
                                <img src="{{ asset('assets/img/about/emile-perron-xrVDYZRGdw4-unsplas (1).webp') }}" alt>
                            </div> --}}
                        </div>
                        {{-- <div class="about-shape">
                            <img src="{{ asset('assets/img/shape/01.png') }}" alt>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6 cta-area4">
                    <div class="about-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline"><i class="fas fa-bring-forward"></i> About Us</span>
                        </div>
                        <p class="about-text" style="color: white; font-family: 'Arial', sans-serif; font-weight: 300; font-size: 1.125rem; line-height: 1.6;">
                            At FARIS Technologies, we embody the principle "Think Big, Start Small, Scale Fast."  this mindset has driven our evolution into one of Ethiopia's most dynamic holding companies, impacting industries across Africa and beyond. 
                        </p>
                        <div class="about-list-wrap">
                            <ul class="about-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/Vision-02.svg') }}" alt>
                                    </div>
                                    <div class="content" style="color: white;">
                                        <h4>Our Vision</h4>
                                        <p style="font-family: 'Arial', sans-serif; font-weight: 300; font-size: 1rem; line-height: 1.5;">
                                            By 2030, we envision a future where we are the most diversified and reputable company in Africa, known for our integrity, innovation, and positive impact on the communities we serve.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/Mission-01.svg') }}" alt>
                                    </div>
                                    <div class="content" style="color: white;">
                                        <h4>Our Mission</h4>
                                        <p style="font-family: 'Arial', sans-serif; font-weight: 300; font-size: 1rem; line-height: 1.5;">
                                            By cultivating talent, embracing digital transformation, delivering BPO services, and solving complex challenges, we empower humanity through AI, space, and emerging technologies.
                                        </p>
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
    
    </div>
<div class="container section py-5" id="section2" style="position: relative; top:80px; margin-bottom:100px;">
    <div class="site-heading text-center">
        <span class="site-title-tagline"><i class="fas fa-bring-forward"></i>OUR BUSINESSES</span>
        <h2 class="site-title">The <span> industries we</span> are in </h2>
        <div class="heading-divider"></div>
        </div>

        <div class="row g-4 pt-4 justify-content-center gap-4">

            
            <div class="col-12 col-lg-5">
                <a href="{{ url('/knowledge') }}" class="card text-decoration-none text-dark">
                  <h4 class="text-center">Knowledge and Capacity Building</h4>
                  <img class="img-1" id="card-img" src="{{ asset('assets/img/gallery/Knowledge capacity division.jpg') }}" alt>
                  <div class="card-body text-center">
                    <div class="feature-icon">
                      <img src="{{ asset('assets/img/icon/Knowldege.svg') }}" alt>
                    </div>
                    <h4 class="pb-2 text-center">Knowledge and Capacity Building</h4>
                    <p>With our vision to be the center of emerging technologies, we started to raise a generation of scientists of tomorrow for our country and continent!</p>
                  </div>
                </a>
              </div>

               <!-- Card 2 -->
            <div class="col-12 col-lg-5">
                <a href="{{ url('/software') }}" class="card text-decoration-none text-dark">
                  <h4 class="text-center">Digital Transformation Services</h4>
                  <img id="card-img" src="{{ asset('assets/img/gallery/pexels-kevin-ku-92347-577585 (1) (1).jpg') }}" alt>
                  <div class="card-body text-center">
                    <div class="feature-icon">
                      <img src="{{ asset('assets/img/icon/Digital.svg') }}" alt>
                    </div>
                    <h4 class="pb-2 text-center">Digital Transformation Services</h4>
                    <p>At FARIS Technologies, we offer a future-proof approach - Digital Ascendancy Services.</p>
                  </div>
                </a>
              </div>

            <!-- Card 1 -->
            <div class="col-12 col-lg-5">
              <a href="{{ url('/buisness') }}" class="card text-decoration-none text-dark">
                <h4 class="text-center">Business Process Outsourcing</h4>
                <img id="card-img" src="{{ asset('assets/img/newcontents/bpo.png') }}" alt="thumb">
                <div class="card-body text-center">
                  <div class="feature-icon">
                    <img src="{{ asset('assets/img/icon/BPO-01.svg') }}" alt>
                  </div>
                  <h4 class="pb-2 text-center">Business Process Outsourcing</h4>
                  <p>We provide exceptional Business Process Outsourcing services that empower businesses to streamline their operations and focus on core competencies.</p>
                </div>
              </a>
            </div>
          
           
          
            <!-- Card 3 -->

          
            <!-- Card 4 -->
            <div class="col-12 col-lg-5">
              <a href="{{ url('/research') }}" class="card text-decoration-none text-dark">
                <h4 class=" text-center">Research and Re-Engineering</h4>
                <img class="img-1" id="card-img" src="{{ asset('assets/img/gallery/Research n re  (2).jpg') }}" alt>
                <div class="card-body text-center">
                  <div class="feature-icon">
                    <img src="{{ asset('assets/img/icon/Research.svg') }}" alt>
                  </div>
                  <h4 class="pb-2 text-center">Research and Re-Engineering</h4>
                  <p>Advance your business with our cutting-edge research and development services.</p>
                </div>
              </a>
            </div>
          </div>
          
          
  </div>


{{-- <div class="service-area sa-bg pt-100 pb-70">
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
                            <a href="{{ url('/research') }}">Research and Re-Engineering</a>
                        </h3>
                        <p class="service-text">
                            Advance your business with our cutting-edge research and development services.
                        </p>
                        <div class="service-arrow">
                            <a href="{{ url('/research') }}" class="service-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                    <div class="service-icon">
                        <img src="{{ asset('assets/img/icon/Knowldege.svg') }}" alt>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">
                            <a href="{{ url('/knowledge') }}">knowledge and Capacity Building</a>
                        </h3>
                        <p class="service-text">
                            Secure, scalable cloud solutions to enhance your digital infrastructure.
                        </p>
                        <div class="service-arrow">
                            <a href="{{ url('/knowledge') }}" class="service-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</div> --}}



<div class="video-area py-60 cta-area2 section" style="background-image: url('{{ asset('assets/img/video/01.jpg') }}');" id="section3">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-4">
                <div class="site-heading mb-0 wow fadeInLeft" data-wow-delay=".25s">
                    
                    {{-- <h4 class="footer-widget-title"><span style="color:#27a9dd; font-size:1.9rem;">Empowering the future</span> with innovation in action!</h4> --}}
                    <h2 class="site-title text-white"><span>Empowering the future  with</span> innovation in action!</h2>
                    <p>
                        Driving tomorrow's advancements through cutting-edge AI and Space Science solutions.
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
                                <!-- Placeholder image for video -->
                                <img src="{{ asset('assets/img/video/faris-screenshot.png') }}" alt="Video Placeholder" 
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
                                <!-- Play Button or Image Overlay (optional) -->
                                <div class="play-button" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 3rem; color: #fff;">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                       
            
        </div>
    </div>
</div>


<div class="cta-area section" id="section4">
    <div class="choose-area py-60">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <div class="choose-content wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title" style="color:#27a9dd;"><i class="fas fa-bring-forward"></i> Why Choose Us</span>
                            <h3 class="header-title text-white">
                                When You Need Innovation, <span>We Are</span> Always Here
                            </h3>
                        </div>
                        <p class="text-white" style="text-align: justify;">
                            AI is at the core of our innovation. We excel in this field, developing cutting-edge solutions for diverse sectors. Our expertise extends to Space Science, encompassing satellite technology, remote sensing, and GIS solutions. We leverage Drone Technology for applications in agriculture and environmental monitoring. We also actively engage in Rocketry and Aerospace research, pushing the boundaries of space exploration.
                        </p>
                        <div class="choose-wrapper mt-4">
                            <div class="choose-item">
                                <div class="choose-icon">
                                    <img src="{{ asset('assets/img/icon/Ai.svg') }}" alt>
                                </div>
                                <div class="choose-item-content">
                                    <h4 class="text-white">AI-Powered Innovation</h4>
                                    <p class="text-white">We are at the forefront of AI, driving cutting-edge solutions across diverse sectors.</p>
                                </div>
                            </div>
                            <div class="choose-item">
                                <div class="choose-icon">
                                    <img src="{{ asset('assets/img/icon/Space Science Expertise-04.svg') }}" alt>
                                </div>
                                <div class="choose-item-content">
                                    <h4 class="text-white">Space Science and Satellite Technology</h4>
                                    <p class="text-white">We focus on impactful applications in Space Science by leveraging satellite technology, remote sensing, and GIS solutions.</p>
                                </div>
                            </div>
                            <div class="choose-item">
                                <div class="choose-icon">
                                    <img src="{{ asset('assets/img/icon/Drone Technology Leadership-05.svg') }}" alt>
                                </div>
                                <div class="choose-item-content">
                                    <h4 class="text-white">Drone Technology Leadership</h4>
                                    <p class="text-white">We are pioneers in Drone Technology, utilizing it for advancements in agriculture, environmental monitoring, and disaster response.</p>
                                </div>
                            </div>
                            <div class="choose-item">
                                <div class="choose-icon">
                                    <img src="{{ asset('assets/img/icon/Rocketry and Aerospace-06.svg') }}" alt>
                                </div>
                                <div class="choose-item-content">
                                    <h4 class="text-white">Rocketry and Aerospace Pioneers</h4>
                                    <p class="text-white">We actively engage in Rocketry and Aerospace research, pushing the boundaries of space exploration.</p>
                                </div>
                            </div>
                            <div class="choose-item">
                                <div class="choose-icon">
                                    <img src="{{ asset('assets/img/icon/Commitment to Quality-07.svg') }}" alt>
                                </div>
                                <div class="choose-item-content">
                                    <h4 class="text-white">Commitment to Quality</h4>
                                    <p class="text-white">We deliver high-quality, innovative solutions with integrity and a focus on client satisfaction.</p>
                                </div>
                            </div>
                            <div class="choose-item">
                                <div class="choose-icon">
                                    <img src="{{ asset('assets/img/icon/Customer-Centric Approach-08.svg') }}" alt>
                                </div>
                                <div class="choose-item-content">
                                    <h4 class="text-white">Customer-Centric Approach</h4>
                                    <p class="text-white">We prioritize understanding your unique needs and tailoring our solutions to meet your specific requirements.</p>
                                </div>
                            </div>
                            <div class="choose-item">
                                <div class="choose-icon">
                                    <img src="{{ asset('assets/img/icon/A Team of Experts-09.svg') }}" alt>
                                </div>
                                <div class="choose-item-content">
                                    <h4 class="text-white">A Team of Experts</h4>
                                    <p class="text-white">We are comprised of a highly skilled and experienced team of professionals passionate about pushing the boundaries of technology.</p>
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
</div>

<div class="counter-area">
    <div class="container">
        <div class="counter-wrap">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <img src="assets/img/icon/repair-2.svg" alt="">
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="{{ $activeUsers }}" data-speed="3000">{{$activeUsers}}</span>
                            <h6 class="title"> Active Users</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <img src="assets/img/icon/happy.svg" alt="">
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="{{  $pageperview}}" data-speed="3000">{{ $pageperview }}</span>
                            <h6 class="title">+ Visitors</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <img src="assets/img/icon/team-2.svg" alt="">
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="123" data-speed="3000">123</span>
                            <h6 class="title">+ Experts Staffs</h6>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <img src="assets/img/icon/award.svg" alt="">
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="50" data-speed="3000">50</span>
                            <h6 class="title">+ Win Awards</h6>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>

<div class="about-area py-80 section" id="section5">
    <h2 class="site-title text-center" style="padding-bottom: 40px;">
        Our Global <span>Presence</span>
    </h2>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">
                    <div class="about-img-global">
                        <div class="about-img-1 col-10">
                            <video autoplay muted loop class="global-video-background">
                                <source src="{{ asset('assets/img/video/presence2.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

        </div>
    </div>
    
</div>
</div>


</div>
</div>
</div>

    
    
</div>


<div class="container" style="margin-top: 60px;">
<h3 class="text-center">Our Partners and Clients</h3>

<div class="wrapper">
    <img class="item item1" src="{{asset('assets/img/our_partners/aau-02.png')}}" style="width: 50px; height:50px;" alt="thumb">
    <img class="item item2" src="{{asset('assets/img/our_partners/aastu-01.png')}}" style="width: 50px; height:50px;" alt="thumb">
    <img class="item item3" src="{{asset('assets/img/our_partners/bdu-05.png')}}" style="width: 50px; height:50px;" alt="thumb">
    <img class="item item4" src="{{asset('assets/img/our_partners/Hawasa-08.png')}}" style="width: 50px; height:50px;"  alt="thumb">
    <img class="item item5" src="{{asset('assets/img/our_partners/Insa-09.png')}}" style="width: 50px; height:50px;" alt="thumb">
    <img class="item item6" src="{{asset('assets/img/our_clients/wasasa-29.png')}}" style="width: 50px; height:50px;" alt="thumb">
    <img class="item item7" src="{{asset('assets/img/our_partners/ibm-17.png')}}" style="width: 50px; height:50px;" alt="thumb">
    <img class="item item8" src="{{asset('assets/img/our_partners/Hawasa-08.png')}}" style="width: 50px; height:50px;" alt="thumb">
    <img class="item item9" src="{{asset('assets/img/our_partners/xtranet-18.png')}}" style="width: 50px; height:50px;" alt="thumb">
    <img class="item item10" src="{{asset('assets/img/our_partners/urbi-20.png')}}" style="width: 50px; height:50px;" alt="thumb">
    <img class="item item11" src="{{asset('assets/img/our_partners/undp-34.png')}}" style="width: 50px; height:50px;" alt="thumb">
    <img class="item item12" src="{{asset('assets/img/our_partners/ssgi-15.png')}}" style="width: 50px; height:50px;" alt="thumb">
    <img class="item item13" src="{{asset('assets/img/our_partners/Nasa Human exploration rover challenge-11.png')}}" style="width: 50px; height:50px;" alt="thumb">
    <img class="item item14" src="{{asset('assets/img/our_partners/oracle-21.png')}}" style="width: 50px; height:50px;" alt="thumb">
    <img class="item item15" src="{{asset('assets/img/our_partners/oromia tech-12.png')}}" style="width: 50px; height:50px;" alt="thumb">
    <img class="item item16" src="{{asset('assets/img/our_partners/plus id-23.png')}}" style="width: 50px; height:50px;" alt="thumb">
    <img class="item item17" src="{{asset('assets/img/our_partners/sam labs-24.png')}}" style="width: 50px; height:50px;" alt="thumb">
    <img class="item item18" src="{{asset('assets/img/our_partners/aws-25.png')}}" style="width: 50px; height:50px;" alt="thumb">
    <img class="item item19" src="{{asset('assets/img/our_partners/boeing-26.png')}}" style="width: 50px; height:50px;" alt="thumb">
    <img class="item item20" src="{{asset('assets/img/our_partners/microsoft-19.png')}}" style="width: 50px; height:50px;" alt="thumb">
  
    
    <img class="item item21" src="{{asset('assets/img/our_partners/nvidia-28.png')}}" style="width: 50px; height:50px;" alt="thumb">
   
    <img class="item item22" src="{{asset('assets/img/our_partners/wollega unv-16.png')}}" style="width: 50px; height:50px;" alt="thumb">

   
    
   
   

    <img class="item item23" src="{{asset('assets/img/our_partners/esss-07.png')}}" style="width: 50px; height:50px;" alt="thumb">
    <img class="item item24" src="{{asset('assets/img/our_partners/hp-22.png')}}" style="width: 50px; height:50px;" alt="thumb">

  </div>
  
</div>

</div>
</main>
        @endsection
