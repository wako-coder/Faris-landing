@extends('layouts.app')

@section('content')
<main class="main">

    <!-- Breadcrumb Section -->
    <div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/01.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">Vacancies</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">Vacancies</li>
            </ul>
        </div>
    </div>

    <!-- Vacancy Section -->
    <div class="vacancy-area py-120">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="site-title service-text">Join Our Team</h2>
                <p class="text-muted">Discover exciting career opportunities and be a part of our growing company.</p>
            </div>

            <div class="vacancy-list">
                <div class="row gy-4">
                    <!-- Job Position Card Example -->
                    <div class="col-lg-6">
                        <div class="card vacancy-item p-4 shadow-sm border-0" style="background-color: #f9f9f9;">
                            <h4 class="card-title service-text">Full Stack Developer</h4>
                            <p class="card-subtitle text-muted mb-2"><strong>Location:</strong> Addis Ababa, Ethiopia</p>
                            <p class="card-subtitle text-muted mb-2"><strong>Employment Type:</strong> Full-Time</p>
                            <p class="card-text mt-3">
                                We are looking for a skilled Full Stack Developer to work on exciting projects and collaborate with our team.
                            </p>
                            <a href="" class="theme-btn mt-3 col-lg-8 align-center">View Details <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Job Position Card 2 -->
                    <div class="col-lg-6">
                        <div class="card vacancy-item p-4 shadow-sm border-0" style="background-color: #f9f9f9;">
                            <h4 class="card-title service-text">Project Manager</h4>
                            <p class="card-subtitle text-muted mb-2"><strong>Location:</strong> Remote</p>
                            <p class="card-subtitle text-muted mb-2"><strong>Employment Type:</strong> Contract</p>
                            <p class="card-text mt-3">
                                We’re looking for an experienced Project Manager to oversee project timelines, budgets, and deliverables.
                            </p>
                            <a href="" class="theme-btn mt-3 col-lg-8">View Details <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Additional Job Cards Here -->

                    <div class="col-lg-6">
                        <div class="card vacancy-item p-4 shadow-sm border-0" style="background-color: #f9f9f9;">
                            <h4 class="card-title service-text">Project Manager</h4>
                            <p class="card-subtitle text-muted mb-2"><strong>Location:</strong> Remote</p>
                            <p class="card-subtitle text-muted mb-2"><strong>Employment Type:</strong> Contract</p>
                            <p class="card-text mt-3">
                                We’re looking for an experienced Project Manager to oversee project timelines, budgets, and deliverables.
                            </p>
                            <a href="" class="theme-btn mt-3 col-lg-8">View Details <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
