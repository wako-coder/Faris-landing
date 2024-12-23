@extends('layouts.app')

@section('content')
<main class="main">

    <!-- Breadcrumb Section with Video Background -->
    <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme">
            <!-- Slide 1 -->
            <div class="hero-single">
                <img src="{{ asset('assets/img/office/A20I2667.JPG') }}" alt="Capacity Animation" class="video-background" style="filter: brightness(0.5);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8 col-lg-8">
                            <div class="hero-content" style="position: relative; top:80px;">
                                <h1 class="hero-title" data-animation="fadeInUp" data-delay=".50s">
                                    Research and <span>Re-Engineering</span>
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
                    <div class="col-xl-2 col-lg-2"></div>
                    <div class="col-xl-12 col-lg-8">
                        <div class="service-details">
                            <h3 class="mb-20 mt-20">Research and Re-Engineering</h3>
                            <p class="mb-20">
                                FARIS Technology is a leading institution in Ethiopia, dedicated to pushing the boundaries of space science, robotics, rocketry, AI, and emerging technologies. Founded in 2018, we've collaborated with esteemed academic and governmental organizations to provide world-class tech education.
                            </p>
                            <p class="mb-30">
                                We've played a pivotal role in Ethiopia's space exploration journey, contributing to the development and commercialization of ETRSS-1 and ETRSS-2 satellite imagery. Our participation in NASA's rover challenge highlights our commitment to international collaboration and innovation.
                            </p>
                            <div class="service-details-img mb-30 mt-30">
                                <img src="assets/img/office/etress.jpg" style="width: 800px; height:400px;" alt="thumb">
                            </div>

                            <!-- Space Science and Technology -->
                            <h4 class="mb-30 mt-20">Space Science and Technology:</h4>
                            <p>&bull; Design, development, and launch of satellites for various applications such as communication, remote sensing, and navigation.</p>
                            <p>&bull; Utilization of satellite and aerial imagery to monitor environmental changes, natural disasters, and urban development.</p>
                            <p>&bull; Development of Geographic Information Systems (GIS) for spatial data analysis, mapping, and decision-making.</p>
                            <p>&bull; Research and development of technologies for space exploration, including mission planning, spacecraft design, and planetary exploration.</p>

                            <!-- Robotics and Automation -->
                            <h4 class="mb-30 mt-20">Robotics and Automation:</h4>
                            <p>&bull; Design and development of industrial robots for automation in manufacturing, assembly, and logistics.</p>
                            <p>&bull; Creation of robots for tasks such as cleaning, delivery, and elderly care.</p>
                            <p>&bull; Development of robotic systems for precision agriculture, including automated planting, harvesting, and weed control.</p>
                            <p>&bull; Fundamental research in robotics, including kinematics, dynamics, control systems, and artificial intelligence.</p>

                            <!-- Artificial Intelligence and Machine Learning -->
                            <h4 class="mb-30 mt-20">Artificial Intelligence and Machine Learning:</h4>
                            <p>&bull; Development and application of machine learning algorithms for data analysis, pattern recognition, and predictive modeling.</p>
                            <p>&bull; Development of systems for understanding and generating human language.</p>
                            <p>&bull; Development of computer vision systems for image and video analysis.</p>
                            <p>&bull; Development of AI-powered applications for various domains, including healthcare, finance, and education.</p>
                            <p>&bull; Research and development of ethical guidelines and safety measures for AI systems.</p>

                            <!-- Rocketry and Aerospace -->
                            <h3 class="mb-30 mt-20">Rocketry and Aerospace:</h3>
                            <p>&bull; Design and development of various types of rockets, including sounding rockets, suborbital rockets, and orbital launch vehicles.</p>
                            <p>&bull; Research and development of advanced propulsion systems for rockets.</p>
                            <p>&bull; Design and analysis of aerospace structures, such as aircraft and spacecraft.</p>
                            <p>&bull; Development of spacecraft subsystems, including communication, power, and attitude control systems.</p>

                            <!-- Drone Technology -->
                            <h3 class="mb-30 mt-20">Drone Technology:</h3>
                            <p>&bull; Use of drones for precision agriculture, crop monitoring, and spraying.</p>
                            <p>&bull; Utilization of drones for monitoring air quality, water pollution, and deforestation.</p>
                            <p>&bull; Deployment of drones for search and rescue operations, damage assessment, and delivery of supplies.</p>
                            <p>&bull; Inspection of bridges, power lines, and other infrastructure using drones.</p>

                            <!-- Benefits of Research and Re-Engineering -->
                            <h3 class="mb-30 mt-20">Benefits of Research and Re-Engineering:</h3>
                            <p>&bull; Drives innovation through the adoption of cutting-edge technologies.</p>
                            <p>&bull; Supports economic growth by enhancing industry capabilities and workforce expertise.</p>
                            <p>&bull; Contributes to sustainable development with solutions tailored to societal needs.</p>
                            <p>&bull; Positions Ethiopia as a hub for advanced research and engineering projects.</p>

                            <div class="text-center mt-20">
                                <a href="{{ url('/contact') }}" class="theme-btn theme-btn2">Get in Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection
