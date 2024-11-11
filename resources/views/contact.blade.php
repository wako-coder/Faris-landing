@extends('layouts.app')

@section('content')
<main class="main">

    <!-- Breadcrumb Section -->
    <div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/01.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">Contact Us</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>

    <!-- Contact Information Section -->
    <div class="contact-area py-120">
        <div class="container">
            <div class="contact-wrap">
                <div class="row">
                    <!-- Contact Details -->
                    <div class="col-lg-4">
                        <div class="contact-content">
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-location-dot"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Offce Address</h5>
                                    <p>2nd Floor, Holy City Center, Gurd Shola, Addis Ababa, Ethiopia</p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-phone-volume"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Call Us</h5>
                                    <p><a href="tel:+251902122222">+251-902122222</a></p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Email Us</h5>
                                    <p><a href="mailto:info@faristechnologies.com">info@faristechnologies.com</a></p>
                                </div>
                            </div>
                            <div class="contact-info border-0">
                                <div class="contact-info-icon">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Open Time</h5>
                                    <p>Mon - Sat (10.00AM - 05.30PM)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <div class="contact-form-header">
                                <h2>Get In Touch</h2>
                                <p>We value your feedback. Feel free to send us a message!</p>
                            </div>
                            <form method="POST" action="" id="contact-form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="5" placeholder="Write Your Message" required></textarea>
                                </div>
                                <button type="submit" class="theme-btn">Send Message <i class="far fa-paper-plane"></i></button>
                                <div class="col-md-12 mt-3">
                                    <div class="form-message text-success"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Google Map Embed Section -->
    <div class="contact-map">
        <iframe src="https://maps.google.com/maps?q=Gurd%20Shola,%20Addis%20Ababa,%20Ethiopia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="width: 100%; height: 400px; border:0;" allowfullscreen loading="lazy"></iframe>
    </div>

</main>
@endsection
