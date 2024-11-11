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
    <div class="contact-info-area py-120">
        <div class="container">
            <div class="row g-4">
                <!-- Contact Details -->
                <div class="col-lg-4">
                    <div class="contact-info-box">
                        <h4>Get In Touch</h4>
                        <p>We'd love to hear from you! Reach out for any inquiries or support.</p>
                        <ul class="contact-list">
                            <li><i class="far fa-phone"></i> <a href="tel:+251902122222">+251-902122222</a></li>
                            <li><i class="far fa-envelope"></i> <a href="mailto:info@faristechnologies.com">info@faristechnologies.com</a></li>
                            <li><i class="far fa-map-marker-alt"></i> 2nd Floor, Holy City Center, Gurd Shola, Addis Ababa, Ethiopia</li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-8">
                    <div class="contact-form-box">
                        <h4>Send Us a Message</h4>
                        <form action="" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" name="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" id="subject" name="subject" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea id="message" name="message" class="form-control" rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="theme-btn">Send Message <i class="fas fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Google Map Embed Section -->
    <div class="map-area pt-50">
        <div class="container">
            <h4 class="text-center mb-4">Our Location</h4>
            <div class="map-container">
                <iframe src="https://maps.google.com/maps?q=Gurd%20Shola,%20Addis%20Ababa,%20Ethiopia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="width: 100%; height: 400px; border:0;" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</main>
@endsection
