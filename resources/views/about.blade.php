@extends('layouts.app')
@section('content')
<main class="main">
  


     <!-- Hero Section -->
     <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme">
            <div class="hero-single">
                {{-- <img src="{{ asset('assets/img/newcontents/work-station.png') }}" alt="BPO Services" class="video-background" style="filter: brightness(0.5);"> --}}
                <video autoplay poster="{{ asset('assets/img/newcontents/work-station.png') }}" loading="lazy" loop muted playsinline class="video-background"  style="filter: brightness(0.5);" >
                    <source src="{{ asset('assets/img/newcontents/0528.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8 col-lg-8">
                            <div class="hero-content" style="position: relative; top: 80px;">
                                <h1 class="hero-title" data-animation="fadeInUp" data-delay=".50s">
                                   About us
                                </h1>
                                <p data-animation="fadeInUp" data-delay=".75s">
                                    Unlock operational efficiency with FARIS Technologies.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="about-area py-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="about-img">
                            <div class="about-img-1">
                                <img src="{{ asset('assets/img/about/innovation_01.jpeg') }}" alt>
                            </div>
                            <div class="about-img-2">
                                <img src="{{ asset('assets/img/about/technology_future.jpeg') }}" alt>
                            </div>
                        </div>
                        <div class="about-shape">
                            <img src="{{ asset('assets/img/shape/02.png') }}" alt>
                        </div>
                        <div class="about-experience">
                            <h1>10+</h1>
                            <div class="about-experience-text">
                                Years Of <br> Excellence
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline"><i class="fas fa-lightbulb"></i> Our Mission</span>
                            <h2 class="site-title">
                             <span>Capacity Building </span> at the Core
                            </h2>
                        </div>
                        <p class="about-text">
                            At FARIS, capacity building is not merely a goal; it is the essence of our mission. We are passionate about raising awareness and promoting digital and innovative technologies throughout Ethiopia and Africa. By collaborating with over 20 public universities, we have empowered thousands to unlock their potential in technology, fostering a vibrant culture of creativity and collaboration.
                        </p>
                        <div class="about-list-wrap">
                            <ul class="about-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/Research.svg') }}" alt>
                                    </div>
                                    <div class="content">
                                        <h4>Innovative Strategies</h4>
                                        <p>Our approach is rooted in creativity and innovation to provide unparalleled solutions for businesses.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/repair.svg') }}" alt>
                                    </div>
                                    <div class="content">
                                        <h4>Proven Expertise</h4>
                                        <p>We are a trusted name in technology, delivering reliable results that drive success.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="{{ url('/our-journey') }}" class="theme-btn mt-4">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-12 mt-100">
                    <div class="about-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline"><i class="fas fa-lightbulb"></i> Our Mission</span>
                            <h2 class="site-title">
                             <span>Innovation Labs: </span> Cultivating Future Leaders 
                            </h2>
                        </div>
                        <p class="about-text">
                            We have established nine state-of-the-art innovation labs across Ethiopia—three in Addis Ababa and six in other regions—designed to cater to learners at every stage of their educational journey:
                        </p>
                        <div class="about-list-wrap">
                            <ul class="about-list list-unstyled">
                                <li>
                                
                                    <div class="content">
                                        <h4>Beginners:</h4>
                                        <p>We ignite curiosity in young minds from an early age, helping them cultivate a growth mindset that will shape the future of technology in Africa. Our engaging programs are crafted to inspire and empower the next generation of innovators.</p>
                                    </div>
                                </li>
                                <li>
                                  
                                    <div class="content">
                                        <h4>Intermediate:</h4>
                                        <p>For talented students in schools and universities, we offer comprehensive training and mentorship in Robotics, AI, Space Science, Rocketry, and Software Development. By providing hands-on experiences and expert guidance, we prepare these learners for advanced challenges and opportunities.</p>
                                    </div>
                                </li>
                                <li>
                                  
                                    <div class="content">
                                        <h4>Advanced</h4>
                                        <p>Our advanced programs focus on experiential learning and innovation, enabling students to transform their ideas into tangible solutions. Through real-world projects, they acquire invaluable skills that are directly applicable in the tech industry.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-30">
                    <div class="about-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline"><i class="fas fa-lightbulb"></i> Our Mission</span>
                            <h2 class="site-title">
                              <span> Manufacturing Ethiopian </span>  Solutions
                            </h2>
                        </div>
                        <p class="about-text">
                            Our motto, "Manufacturing Ethiopian Solutions," reflects our dedication to practical, impactful education. We encourage our students to think creatively and push the limits of what is possible, equipping them to tackle the unique challenges faced by our communities.
                        </p>
                        <div class="about-list-wrap">
                            <ul class="about-list list-unstyled">
                                <li>
                                  
                                    <div class="content">
                                       <h4> Unlocking Global Opportunities</h4>

                                       <p> Our commitment to support extends beyond technology training. We actively create pathways for our trainees in the realm of business process outsourcing (BPO), linking them with exciting global opportunities. This exposure not only enriches their knowledge but also broadens their perspectives, preparing them to excel in a competitive international job market.</p>
                                    </div>                                
                                </li>
                                <li>
                                    <div class="content">
                                        <h4> Join Us in Shaping the Future</h4>
 
                                        <p> At FARIS Technology, we believe that together, we can empower the next generation of innovators and leaders in Ethiopia. Our unwavering commitment to capacity building is transforming lives, fostering creativity, and bridging opportunities for all. Join us on this exciting journey as we work toward a brighter future for Ethiopia through technology and innovation.
                                            For more information, resources, and to get involved, visit our website today. Let’s bridge opportunities and empower the future together!</p>
                                     </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</main>
@endsection
