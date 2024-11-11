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
                            <li data-filter=".cat1"><i class="far fa-mobile"></i> Phone</li>
                            <li data-filter=".cat2"><i class="far fa-laptop"></i> Computer</li>
                            <li data-filter=".cat3"><i class="far fa-tv"></i> Tv</li>
                            <li data-filter=".cat4"><i class="far fa-tablet"></i> Tablet</li>
                            <li data-filter=".cat5"><i class="far fa-microchip"></i> Gadget</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-3 filter-box popup-gallery wow fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                <div class="col-md-4 filter-item cat3 cat4 cat5">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/Office Photo/A20I3190.JPG') }}" alt>
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{ asset('assets/img/Education division/20240903_113119.jpg') }}"><i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 filter-item cat1 cat2">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/Education division/photo_2024-08-30_14-39-48.jpg') }}" alt>
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{ asset('assets/img/Office Photo/A20I3190 (2).JPG') }}"><i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 filter-item cat2 cat3">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/Office Photo/A20I3056.JPG') }}" alt>
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{ asset('assets/img/Office Photo/Faris .jpg') }}"><i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 filter-item cat2 cat4">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/Education division/5.jpg') }}" alt>
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{ asset('assets/img/Office Photo/A20I3243 (2).JPG') }}"><i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 filter-item cat1 cat4 cat5">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/Education division/photo_2024-09-09_12-27-55.jpg') }}" alt>
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{ asset('assets/img/Office Photo/A20I2614.JPG') }}"><i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</main>

@endsection
