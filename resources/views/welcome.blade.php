
@extends('layouts.app')
@section('content')
<style>
    .card {
      position: relative;
      border: none;
      overflow: hidden;
      transition: background 0.5s ease, transform 0.5s ease;
      min-height: 300px; /* Minimum height */
      max-height: 350px;
    }
    
    .card > img {
      width: 100%;
      height: 100%;
      filter: brightness(0.6);
      object-fit: contain;
      transition: opacity 1s ease;
      z-index:1;
    }
    .card > h4{
        position:relative;
        top:50px;
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
            <div class="hero-single" style="background: url({{asset('assets/img/office/A20I3269-1-1-scaled-e1697205751873.jpg')}})">
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
    </div>
    
    <div class="appointment">
    <div class="col-lg-8">
    </div>
</div>
<div class="cta-area section"  id="section1" style="position: relative; top:100px; margin-bottom:50px;">
    <div class="about-area  " >
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
                        {{-- <div class="about-experience">
                            <h1>5+</h1>
                            <div class="about-experience-text">
                                Years Of <br> Innovation
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline"><i class="fas fa-bring-forward"></i> About Us</span>
                           
                        </div>
                        <p class="about-text" style="color: white;">
                            At FARIS Technologies, we embody the principle "Think Big, Start Small, Scale Fast." Since 2018, this mindset has driven our evolution into one of Ethiopia's most dynamic holding companies, impacting industries across Africa and beyond.
                        </p>
                        <p class="about-text"style="color: white;">
                            <strong>Our Vision</strong><br>
                            To be the most diversified and reputable company in Africa, in 2030!
                        </p>
                        <p class="about-text" style="color: white;">
                            <strong>Our Mission</strong><br>
                            By cultivating talent, embracing digital transformation, delivering BPO services, and solving complex challenges, we empower humanity through AI, space, and emerging technologies.
                        </p>
                        <div class="about-list-wrap">
                            <ul class="about-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/money.svg') }}" alt>
                                    </div>
                                    <div class="content" style="color: white;">
                                        <h4>Cost-Effective Solutions</h4>
                                        <p>Our services are designed to provide maximum value, combining innovation with affordability.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/trusted.svg') }}" alt>
                                    </div>
                                    <div class="content" style="color: white;">
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
    </div>
<div class="container section py-5" id="section2" style="position: relative; top:80px; margin-bottom:50px;">
    <div class="site-heading text-center">
        <span class="site-title-tagline"><i class="fas fa-bring-forward"></i>OUR BUSINESSES</span>
        <h2 class="site-title">The <span> industries we</span> are in </h2>
        <div class="heading-divider"></div>
        </div>

        <div class="row g-4 pt-4 justify-content-center gap-4">
            <!-- Card 1 -->
            <div class="col-12 col-lg-5"> 
              <div class="card">
                <h4 class="pb-2 mx-auto d-none d-sm-block ">Business Process Outsourcing</h4>
               <img id="card-img" src="{{('assets/img/about/transformed.jpeg')}}" alt="thumb">
                <div class="card-body text-center">
                  <div class="feature-icon">
                 <img src="{{ asset('assets/img/icon/BPO-01.svg') }}" alt>
                  </div>
                  <h4 class="pb-2 d-none d-sm-block">  <a href="{{ url('/buisness') }}">Business Process Outsourcing</a></h4>
                  <p>We provide exceptional Business Process Outsourcing services that empower businesses to streamline their operations and focus on core competencies.</p>
                </div>
              </div>
            </div>
          
            <!-- Card 2 -->
            <div class="col-12 col-lg-5">
              <div class="card">
                <h4 class="pb-2 mx-auto d-none d-sm-block">Digital Transformation Services</h4>
                <img id="card-img" src="{{ asset('assets/img/gallery/pexels-kevin-ku-92347-577585 (1) (1).jpg') }}" alt>
                <div class="card-body text-center">
                  <div class="feature-icon">
                    <img src="{{ asset('assets/img/icon/Digital.svg') }}" alt>
                  </div>
                  <h4 class="pb-2">  <a href="{{ url('/software') }}">Digital Transformation Services</a></h4>
                  <p>At FARIS Technologies, we offer a future-proof approach - Digital Ascendancy Services.</p>
                </div>
              </div>
            </div>
          
            <!-- Card 3 -->
            <div class="col-12 col-lg-5">
              <div class="card">
                <h4 class="pb-2 mx-auto d-none d-sm-block">Knowledge and Capacity Building</h4>
                <img class="img-1" id="card-img" src="{{ asset('assets/img/gallery/Knowledge capacity division.jpg') }}" alt>
                <div class="card-body text-center">
                  <div class="feature-icon">
                    <img src="{{ asset('assets/img/icon/Knowldege.svg') }}" alt>
                  </div>
                  <h4 class="pb-2">   <a href="{{ url('/knowledge') }}">Knowledge and Capacity Building </a></h4>
                  <p>With our vision to be the center of emerging technologies, we started to raise a generation of scientists of tomorrow for our country and continent!</p>
                </div>
              </div>
            </div>
          
            <div class="col-12 col-lg-5">
              <div class="card">
                <h4 class="pb-2 mx-auto d-none d-sm-block">Research and Re-Engineering</h4>
                <img class="img-1" id="card-img" src="{{ asset('assets/img/gallery/Research n re  (2).jpg') }}" alt>
                <div class="card-body text-center">
                  <div class="feature-icon">
                    <img src="{{ asset('assets/img/icon/Research.svg') }}" alt>
                  </div>
                  <h4 class="pb-2 mx-auto">   <a href="{{ url('/research') }}">Research and Re-Engineering</a></h4>
                  <p>Advance your business with our cutting-edge research and development services.</p>
                </div>
              </div>
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



<div class="video-area py-100">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-4">
                <div class="site-heading mb-0 wow fadeInLeft" data-wow-delay=".25s">
                    
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

<h3 class="text-center pb-20">Our Partners and Clients</h3>
<div class="wrapper">
    <img class="item item1" src="{{asset('assets/img/our_partners/aastu-01.png')}}" style="width: 90px" alt="thumb">
    <img class="item item2" src="{{asset('assets/img/our_clients/Mint-10.png')}}" style="width: 100px" alt="thumb">
    <img class="item item3" src="{{asset('assets/img/our_partners/ibm-17.png')}}" style="width: 90px" alt="thumb">
    <img class="item item4" src="{{asset('assets/img/our_partners/Hawasa-08.png')}}" style="width: 90px" alt="thumb">
  
    <img class="item item5" src="{{asset('assets/img/our_partners/bdu-05.png')}}" style="width: 90px" alt="thumb">
    <img class="item item6" src="{{asset('assets/img/our_partners/nvidia-28.png')}}" style="width: 90px" alt="thumb">
   
    <img class="item item7" src="{{asset('assets/img/our_clients/emfa-06.png')}}" style="width: 100px" alt="thumb">
    <img class="item item8" src="{{asset('assets/img/our_clients/italy-embassy.png')}}" style="width: 100px" alt="thumb">
    <img class="item item9" src="{{asset('assets/img/our_clients/koica-33.png')}}" style="width: 100px" alt="thumb">
   
    
    <img class="item item10" src="{{asset('assets/img/our_partners/Hawasa-08.png')}}" style="width: 90px"  alt="thumb">
    <img class="item item11" src="{{asset('assets/img/our_partners/aau-02.png')}}" style="width: 90px" alt="thumb">
    <img class="item item12" src="{{asset('assets/img/our_partners/Ambo.png')}}" style="width: 90px" alt="thumb">
    <img class="item item13" src="{{asset('assets/img/our_partners/esss-07.png')}}" style="width: 90px" alt="thumb">
    <img class="item item14" src="{{asset('assets/img/our_partners/hp-22.png')}}" style="width: 90px" alt="thumb">

    <img class="item item15" src="{{asset('assets/img/our_partners/Insa-09.png')}}" style="width: 90px" alt="thumb">
  </div>

<div class="cta-area section" id="section3">
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

{{-- <div class="gallery-area py-120">
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
                        <li data-filter=".cat2"><i class="far fa-laptop"></i> Our Bootcamp</li>
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
                        <img src="{{ asset('assets/img/office/robot2.jpg') }}" alt>
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{ asset('assets/img/office/robot2.jpg') }}"><i class="far fa-camera"></i></a>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 7 -->
            <div class="col-md-4 filter-item cat2">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="{{ asset('assets/img/office/robot3.jpg') }}" alt>
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{ asset('assets/img/office/robot3.jpg') }}"><i class="far fa-camera"></i></a>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 8 -->
            <div class="col-md-4 filter-item cat2 ">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="{{ asset('assets/img/office/kids.jpg') }}" alt>
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{ asset('assets/img/office/kids.jpg') }}"><i class="far fa-camera"></i></a>
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
             
          


         

            

        </div>
    </div>
</div> --}}

<div class="about-area py-80">
    <div class="container">
        <div class="row align-items-center">
   <div class="col-lg-7">
    <div class="about-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">
        <div class="about-img">
            <div class="about-img-1">
                <img src="{{ asset('assets/img/gallery/photo_5940468038916752252_y.jpg') }}" alt>
            </div>
           
        </div>
        
    </div>
</div>
<div class="col-lg-5 section" id="section4">
    <div class="about-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
        <div class="site-heading ">
            <h2 class="site-title">
                Our Global <span>Presence</span>
            </h2>
            <p class="about-text">
                FARIS Technologies is proud to have a strong presence across key regions globally, driving innovation and transformation:
            </p>
            <ul>
                <li><strong>North America:</strong> From our head office in San Francisco, California, USA, we lead advancements in cutting-edge AI, aerospace, and digital transformation projects.</li>
                <li><strong>Asia:</strong> Based in Dubai, UAE, at the Business Bay Area, we capitalize on dynamic opportunities through strategic partnerships and emerging markets.</li>
                <li><strong>Africa:</strong> With deep roots in Africa, we lead impactful initiatives such as Ethiopia’s first Amharic AI platform and satellite technology projects, operating from our head office on the 6th Floor, Sur Construction, Bole, Addis Ababa, Ethiopia.</li>
            </ul>
        </div>
    </div>
</div>
``

</div>
</div>

</main>
        @endsection
