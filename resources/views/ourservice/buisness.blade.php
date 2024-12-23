@extends('layouts.app')

@section('content')
<main class="main">

    <!-- Breadcrumb Section with Video Background -->
    <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme">
            <!-- Slide 1 -->
            <div class="hero-single">
                <img src="{{ asset('assets/img/about/A20I2701.JPG') }}" style="filter: brightness(0.5);" alt="Capacity Animation" class="video-background">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8 col-lg-8">
                            <div class="hero-content" style="position: relative; top:80px;">
                                <h1 class="hero-title" data-animation="fadeInUp" data-delay=".50s">
                                    Business Process <span>Outsourcing</span>
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

    <div class="service-single-area mb-20">
        <div class="container">
            <div class="service-single-wrapper">
                <div class="row">
                    <div class="col-xl-2 col-lg-2">
                    </div>
                    <div class="col-xl-12 col-lg-8">
                        <div class="service-details">
                            <h3 class="mb-20 mt-20">Business Process Outsourcing (BPO)</h3>
                            <p class="mb-20">
                                At FARIS technologies, we elevate your business with our comprehensive BPO solutions, from providing exceptional customer service and support to delivering innovative IT services and captivating content creation and management. Our dedicated team is committed to optimizing your operations, enhancing customer satisfaction, and driving business growth.
                            </p>
                            <p class="mb-30">
                                Ethiopia, with its growing pool of skilled talent and favorable economic climate, is well positioned to offer a range of BPO services. Here are some key areas where we excel:
                            </p>

                            <!-- Key Areas (Customer Service, IT, Content) -->
                            <h4 class="mb-30 mt-20">1. Customer Service and Support:</h4>
                            <p>&bull; Call Centers: Handling inbound and outbound calls for customer inquiries, technical support, and sales.</p>
                            <p>&bull; Email Support: Responding to customer emails and resolving queries.</p>
                            <p>&bull; Live Chat Support: Providing real-time customer support through online chat.</p>

                            <h4 class="mb-30 mt-20">2. IT Services:</h4>
                            <p>&bull; Software Development: Developing custom software solutions for various industries.</p>
                            <p>&bull; IT Support: Providing technical support to clients, including troubleshooting and network maintenance.</p>
                            <p>&bull; Data Entry and Processing: Inputting and processing large volumes of data accurately and efficiently.</p>

                            <h4 class="mb-30 mt-20">3. Content Creation and Management:</h4>
                            <p>&bull; Content Writing: Creating high-quality content for websites, blogs, and social media.</p>
                            <p>&bull; Translation and Localization: Translating content into different languages and adapting it to local cultures.</p>
                            <p>&bull; SEO and Digital Marketing: Optimizing websites for search engines and implementing digital marketing campaigns.</p>

                            <!-- Why BPO is attractive to foreign companies -->
                            <h3 class="mb-30 mt-20">Why BPO is attractive to foreign companies?</h3>
                            <p>&bull; Cost-Effective Labor: Ethiopia offers a relatively low cost of labor compared to other outsourcing destinations, making it an attractive option for cost-conscious businesses.</p>
                            <p>&bull; Linguistic Advantage: Many Ethiopians, especially the younger generation, are fluent in English, facilitating effective communication with international clients.</p>
                            <p>&bull; Dedicated Workforce: Ethiopian workers are known for their strong work ethic, discipline, and willingness to learn.</p>
                            <p>&bull; Time Zone Advantage: Ethiopia's time zone is favorable for businesses operating in Europe and the Middle East, enabling seamless 24/7 operations.</p>
                            <p>&bull; Government Support: The Ethiopian government has implemented various policies and incentives to promote the BPO industry, including tax breaks, streamlined regulations, and infrastructure development.</p>

                            <div class="service-details-img mb-30 mt-30">
                                <img src="assets/img/about/transformed.jpeg" style="width: 800px; height:400px;" alt="thumb">
                            </div>

                            <!-- How Ethiopia benefits from BPO -->
                            <h3 class="mb-30 mt-20">How Ethiopia benefits from BPO:</h3>
                            <p>&bull; Job Creation: We at FARIS technologies create numerous jobs, particularly in customer service, Software Development, IT support, and data entry. This can help reduce unemployment rates and boost economic growth.</p>
                            <p>&bull; Skill Development: Provide extensive training to our employees, leading to skill enhancement in areas like communication, problem-solving, and technical expertise. This can benefit the overall workforce.</p>
                            <p>&bull; Foreign Exchange Earnings: Bring in foreign currency, which can contribute to the country's economic stability.</p>
                            <p>&bull; Technology Transfer: Introduce advanced technologies and best practices, which can help modernize the local IT sector.</p>

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
