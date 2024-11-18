@extends('layouts.app')

@section('content')
<main class="main">

    <!-- Breadcrumb Section with Video Background -->
    <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme">
            <!-- Slide 1 -->
     
    
            <!-- Slide 3 -->
            <div class="hero-single">
                <!-- Video background -->
                <video autoplay loop muted playsinline class="video-background">
                    <source src="{{ asset('assets/img/video/Untitled design.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8 col-lg-8">
                            <div class="hero-content">
                               
                                <h1 class="hero-title" data-animation="fadeInUp" data-delay=".50s">
                                    Ict <span>and</span> Software Development
                                </h1>
                                <p data-animation="fadeInUp" data-delay=".75s"></p>
                                
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
                    <div class="col-xl-2 col-lg-2">
                        {{-- <div class="service-sidebar">
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
                        </div> --}}
                    </div>
                    <div class="col-xl-12 col-lg-8">
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
                                        <li><i class="far fa-check"></i>Adaptable to changing business requirements.</li>
                                    </ul>
                                
                                </div>
                            </div>
                            <div class="service-details">
                                <h3 class="mb-30">Data Recovery</h3>
                                <p class="mb-20">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                velit, sed quia non numquam eius modi tempora incidunt ut labore et.
                                </p>
                                <p class="mb-20">
                                But I must explain to you how all this mistaken idea of denouncing pleasure and
                                praising pain was born and I will give you a complete account of the system, and
                                expound the actual teachings of the great explorer of the truth, the
                                master-builder of human happiness. No one rejects, dislikes, or avoids pleasure
                                itself, because it is pleasure, but because those who do not know how to pursue
                                pleasure rationally encounter consequences that are extremely painful. Nor again
                                is there anyone who loves or pursues or desires to obtain pain of itself,
                                because it is pain, but because occasionally circumstances occur in which toil
                                and pain can procure him some great pleasure. To take a trivial example
                                </p>
                               
                                <p class="mb-20">
                                Power of choice is untrammelled and when nothing prevents our being able to do
                                what we like best, every pleasure is to be welcomed and every pain avoided. But
                                in certain circumstances and owing to the claims of duty or the obligations of
                                business it will frequently occur that pleasures have to be repudiated and
                                annoyances accepted. The wise man therefore always holds in these matters to
                                this principle of selection.
                                </p>
                                <div class="my-4">
                                <div class="mb-3">
                                <h3 class="mb-3">Our Work Process</h3>
                                <p>Aliquam facilisis rhoncus nunc, non vestibulum mauris volutpat non.
                                Vivamus tincidunt accumsan urna, vel aliquet nunc commodo tristique.
                                Nulla facilisi. Phasellus vel ex nulla. Nunc tristique sapien id mauris
                                efficitur, porta scelerisque nisl dignissim. Vestibulum ante ipsum
                                primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed at
                                mollis tellus. Proin consequat, orci nec bibendum viverra, ante orci
                                suscipit dolor, et condimentum felis dolor ac lectus.</p>
                                </div>
                                <ul class="service-single-list">
                                <li><i class="far fa-check"></i>Fusce justo risus placerat in risus eget
                                tincidunt consequat elit.</li>
                                <li><i class="far fa-check"></i>Nunc fermentum sem sit amet dolor laoreet
                                placerat.</li>
                                <li><i class="far fa-check"></i>Nullam rhoncus dictum diam quis ultrices.
                                </li>
                                <li><i class="far fa-check"></i>Integer quis lorem est uspendisse eu augue
                                porta ullamcorper dictum.</li>
                                <li><i class="far fa-check"></i>Quisque tristique neque arcu ut venenatis
                                felis malesuada et.</li>
                                </ul>
                                </div>
                              
                                </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ url('/contact') }} "class="theme-btn theme-btn2">Get in Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
