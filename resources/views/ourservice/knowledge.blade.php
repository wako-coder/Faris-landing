@extends('layouts.app')

@section('content')
<main class="main">
    <!-- Hero Section with Video Background -->
    <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme">
            <!-- Slide 1 -->
            <div class="hero-single">
                <img src="{{ asset('assets/img/gallery/photo_2024-11-19_09-02-28.jpg') }}" alt="Capacity Animation" class="video-background" style="filter: brightness(0.5);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8 col-lg-8">
                            <div class="hero-content" style="position: relative; top:80px;">
                                <h1 class="hero-title" data-animation="fadeInUp" data-delay=".50s">
                                    Knowledge and <span>Capacity Building</span>
                                </h1>
                                <p data-animation="fadeInUp" data-delay=".75s">
                                    Advancing expertise and fostering growth through strategic learning initiatives.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Section with Content and Image -->
    <div class="service-single-area mb-20">
        <div class="container">
            <div class="service-single-wrapper py-80">
                <div class="row align-items-center">
                    <!-- Text Section on Left -->
                    <div class="col-lg-6">
                        <div class="service-details wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline"><i class="fas fa-bring-forward"></i> Knowledge & Capacity Building</span>
                                <h2 class="site-title my-3">Empowering Minds Through Knowledge & Capacity Building</h2>
                            </div>
                            <p class="about-text mb-20">
                                Welcome to FARIS Technology Knowledge & Capacity Building Division, where we are committed to shaping Ethiopia's future through cutting-edge fields in digital emerging technologies. Space Science, Robotics, Rocketry, Artificial Intelligence (AI), Data Science and Analytics, the Internet of Things (IoT), Blockchain Technology, Virtual Reality (VR) and Augmented Reality (AR), Cloud Computing, Cybersecurity, 5G Technology, Quantum Computing, Edge Computing, Biotechnology, and Automation and Robotics are key fields driving innovation and transformation across various industries. </p><p> As a trailblazer in these transformative fields, we believe that empowering individuals and communities is vital for creating a brighter tomorrow. With over six years of industry expertise, we have positioned ourselves as a leading force in redefining Ethiopia's technological landscape.
                            </p>
                        </div>
                    </div>
            
                    <!-- Image Section on Right -->
                    <div class="col-lg-6 ">
                        <div class="service-details-img text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                            <img src="{{ asset('assets/img/gallery/students 2.JPG') }}" alt="Knowledge & Capacity Building" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="faq-area py-80">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Image Section -->
                        <div class="col-lg-6">
                            <div class="faq-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">
                                <div class="img" style="padding-right: 50px" >
                                    <img src="{{ asset('assets/img/gallery/WhatsApp Image 2024-11-11 at 12.14.40_f0e14c25.jpg') }}" alt="Research Insights">
                                </div>
                            </div>
                        </div>
                        <!-- Accordion Section -->
                        <div class="col-lg-6">
                            <div class="faq-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                                <div class="site-heading mb-3">
                                    <span class="site-title-tagline"><i class="fas fa-lightbulb"></i> Research Insights</span>
                                </div>
                                <div class="accordion" id="accordionExample">
                                    <!-- FAQ 1 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <span><i class="far fa-lightbulb"></i></span> What is the mission of FARIS Technology in Capacity Building?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                At FARIS, capacity building is at the core of our mission. We aim to raise awareness and promote digital and innovative technologies throughout Ethiopia and Africa. By collaborating with over 20 public universities, we have empowered thousands to unlock their potential in technology, fostering a vibrant culture of creativity and collaboration.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- FAQ 2 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <span><i class="far fa-lightbulb"></i></span> What are the different levels of innovation labs at FARIS?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                We have established nine state-of-the-art innovation labs across Ethiopia, designed for learners at various stages:
                                                <ul>
                                                    <li><strong>Beginners:</strong> Programs to ignite curiosity in young minds and cultivate a growth mindset in technology.</li>
                                                    <li><strong>Intermediate:</strong> For students in schools and universities, we offer mentorship and training in Robotics, AI, Space Science, Rocketry, and Software Development.</li>
                                                    <li><strong>Advanced:</strong> Focused on experiential learning and innovation, preparing students for real-world challenges in the tech industry.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FAQ 3 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <span><i class="far fa-lightbulb"></i></span> How does FARIS help students advance in their careers?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Our advanced programs focus on experiential learning, enabling students to transform their ideas into tangible solutions through real-world projects. This helps them acquire invaluable skills directly applicable in the tech industry.
                                            </div>
                                        </div>
                                    </div>
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
