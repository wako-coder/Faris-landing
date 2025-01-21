@extends('layouts.app')

@section('content')
<main class="main">

    <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
    <div class="container">
    <h2 class="breadcrumb-title">News</h2>
    <ul class="breadcrumb-menu">
    <li><a href="index.html">Home</a></li>
    <li class="active">News</li>
    </ul>
    </div>
    </div>


    <div class="blog-single-area pt-120 pb-120">
    <div class="container">
    <div class="row">
    <div class="col-lg-8">
    <div class="blog-single-wrap">
    <div class="blog-single-content">
    <div class="blog-thumb-img">
        <div class="blog-item-img">
            @if($blog->images)
                @php
                    $images = json_decode($blog->images); // Decode the JSON string into an array
                @endphp
                <img src="{{ asset('storage/' . $images[0]) }}" alt="Thumb">
            @endif
        </div>
    </div>
    <div class="blog-info">
    <div class="blog-meta">
    <div class="blog-meta-left">
    <ul>
    <li><i class="far fa-user"></i><a href="#">Jean R Gunter</a></li>
    {{-- <li><i class="far fa-comments"></i>3.2k Comments</li>
    <li><i class="far fa-thumbs-up"></i>1.4k Like</li> --}}
    </ul>
    </div>
    <div class="blog-meta-right">
    <a href="#" class="share-link"><i class="far fa-share-alt"></i>Share</a>
    </div>
    </div>
    <div class="blog-details">
    <h3 class="blog-details-title mb-20">{{$blog->title}}</h3>
    <p class="mb-10">
        {{ \Illuminate\Support\Str::limit($blog->content, 2036) }}
    </p>
    <div class="row">
        @if($blog->images)
            @foreach(json_decode($blog->images) as $image)
                <div class="col-md-6 mb-20">
                    <img src="{{ asset('storage/' . $image) }}" alt="Blog Image" class="img-fluid" style="width: 100%; height: auto;">
                </div>
            @endforeach
        @endif
    </div>
    
    <p class="mb-20">
       {{ substr($blog->content, 2638);}}
    </p>
    <hr>
  
    </div>

    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4">
    <aside class="sidebar">
    
    <div class="widget search">
    <h5 class="widget-title">Search</h5>
    <form class="search-form">
    <input type="text" class="form-control" placeholder="Search Here...">
    <button type="submit"><i class="far fa-search"></i></button>
    </form>
    </div>
    
  
    
    <div class="widget recent-post">
    <h5 class="widget-title">Recent Post</h5>
    <div class="recent-post-single">
    <div class="recent-post-img">
    <img src="assets/img/blog/bs-1.jpg" alt="thumb">
    </div>
    <div class="recent-post-bio">
    <h6><a href="#">It is a long established fact that a reader layout</a></h6>
    <span><i class="far fa-clock"></i>16 Aug, 2024</span>
    </div>
    </div>
    <div class="recent-post-single">
    <div class="recent-post-img">
    <img src="assets/img/blog/bs-2.jpg" alt="thumb">
    </div>
    <div class="recent-post-bio">
    <h6><a href="#">It is a long established fact that a reader layout</a></h6>
    <span><i class="far fa-clock"></i>16 Aug, 2024</span>
    </div>
    </div>
    <div class="recent-post-single">
    <div class="recent-post-img">
    <img src="assets/img/blog/bs-3.jpg" alt="thumb">
    </div>
    <div class="recent-post-bio">
    <h6><a href="#">It is a long established fact that a reader layout</a></h6>
    <span><i class="far fa-clock"></i>16 Aug, 2024</span>
    </div>
    </div>
    </div>
    
    <div class="widget social-share">
    <h5 class="widget-title">Follow Us</h5>
    <div class="social-share-link">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-x-twitter"></i></a>
    <a href="#"><i class="fab fa-dribbble"></i></a>
    <a href="#"><i class="fab fa-whatsapp"></i></a>
    <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
    </div>
    
    </aside>
    </div>
    </div>
    </div>
    </div>
    
    </main>
@endsection