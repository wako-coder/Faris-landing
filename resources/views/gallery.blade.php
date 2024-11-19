@extends('layouts.app')
@section('content')


<main class="main">

    <div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/01.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">Photo Gallery</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.html">Home</a></li>
                <li class="active">Photo Gallery</li>
            </ul>
        </div>
    </div>

    <div class="gallery-area py-120">
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
                            <li data-filter=".cat1"><i class="far fa-mobile"></i> Our Teams</li>
                            <li data-filter=".cat2"><i class="far fa-laptop"></i> Our Bootcamp</li>
                            <li data-filter=".cat3"><i class="far fa-tv"></i> Our Clients</li>
                            <li data-filter=".cat4"><i class="far fa-tablet"></i> Meetings</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-3 filter-box popup-gallery wow fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
    
                <!-- Gallery Item 1 -->
                <div class="col-md-4 filter-item cat3 cat4 cat5">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/office/meeting.JPG') }}" alt>
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{ asset('assets/img/office/meeting.JPG') }}"><i class="far fa-camera"></i></a>
                        </div>
                    </div>
                </div>
    
                <!-- Gallery Item 2 -->
                <div class="col-md-4 filter-item cat3 cat4 cat5">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/office/A20I3298.JPG') }}" alt>
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{ asset('assets/img/office/A20I3298.JPG') }}"><i class="far fa-camera"></i></a>
                        </div>
                    </div>
                </div>
    
                <!-- Gallery Item 3 -->
                <div class="col-md-4 filter-item cat1">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/office/Faris.jpg') }}" alt>
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{ asset('assets/img/office/Faris.jpg') }}"><i class="far fa-camera"></i></a>
                        </div>
                    </div>
                </div>
    
                <!-- Gallery Item 4 -->
                <div class="col-md-4 filter-item cat1">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/office/A20I3317.jpg') }}" alt>
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{ asset('assets/img/office/A20I3317.jpg') }}"><i class="far fa-camera"></i></a>
                        </div>
                    </div>
                </div>
    
                <!-- Gallery Item 5 -->
                <div class="col-md-4 filter-item cat2">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/office/robot.JPG') }}" alt>
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{ asset('assets/img/office/robot.JPG') }}"><i class="far fa-camera"></i></a>
                        </div>
                    </div>
                </div>
    
                <!-- Gallery Item 6 -->
                <div class="col-md-4 filter-item cat2">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/office/robot2.JPG') }}" alt>
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{ asset('assets/img/office/robot2.JPG') }}"><i class="far fa-camera"></i></a>
                        </div>
                    </div>
                </div>
    
                <!-- Gallery Item 7 -->
                <div class="col-md-4 filter-item cat2">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/office/robot3.JPG') }}" alt>
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{ asset('assets/img/office/robot3.JPG') }}"><i class="far fa-camera"></i></a>
                        </div>
                    </div>
                </div>
    
                <!-- Gallery Item 8 -->
                <div class="col-md-4 filter-item cat2 cat4">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/office/kids.JPG') }}" alt>
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{ asset('assets/img/office/kids.JPG') }}"><i class="far fa-camera"></i></a>
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
                 
                <div class="col-md-4 filter-item cat1 cat4 cat5">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/office/A20I3118.jpg') }}" alt>
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{ asset('assets/img/office/A20I3118.jpg') }}"><i class="far fa-camera"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 10 -->
                <div class="col-md-4 filter-item cat1 cat3 cat4 cat5">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/office/A20I3163.jpg') }}" alt>
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{ asset('assets/img/office/A20I3163.jpg') }}"><i class="far fa-camera"></i></a>
                        </div>
                    </div>
                </div>
    
                <!-- Gallery Item 11 -->
                <div class="col-md-4 filter-item cat1 cat4 cat5 cat3">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/office/report.jpg') }}" alt>
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{ asset('assets/img/office/report.jpg') }}"><i class="far fa-camera"></i></a>
                        </div>
                    </div>
                </div>

                
    
            </div>
        </div>
    </div>
    
    
</main>

@endsection
