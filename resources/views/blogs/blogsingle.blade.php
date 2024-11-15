@extends('layouts.app')

@section('content')
<main class="main">

    <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
    <div class="container">
    <h2 class="breadcrumb-title">Blog Single</h2>
    <ul class="breadcrumb-menu">
    <li><a href="index.html">Home</a></li>
    <li class="active">Blog Single</li>
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
    <img src="assets/img/blog/single.jpg" alt="thumb">
    </div>
    <div class="blog-info">
    <div class="blog-meta">
    <div class="blog-meta-left">
    <ul>
    <li><i class="far fa-user"></i><a href="#">Jean R Gunter</a></li>
    <li><i class="far fa-comments"></i>3.2k Comments</li>
    <li><i class="far fa-thumbs-up"></i>1.4k Like</li>
    </ul>
    </div>
    <div class="blog-meta-right">
    <a href="#" class="share-link"><i class="far fa-share-alt"></i>Share</a>
    </div>
    </div>
    <div class="blog-details">
    <h3 class="blog-details-title mb-20">It is a long established fact that a reader</h3>
    <p class="mb-10">
    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
    </p>
    <p class="mb-10">
    But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.
    </p>
    <blockquote class="blockqoute">
    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.
    <h6 class="blockqoute-author">Mark Crawford</h6>
    </blockquote>
    <p class="mb-20">
    In a free hour when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection.
    </p>
    <div class="row">
    <div class="col-md-6 mb-20">
    <img src="assets/img/blog/01.jpg" alt>
    </div>
    <div class="col-md-6 mb-20">
    <img src="assets/img/blog/02.jpg" alt>
    </div>
    </div>
    <p class="mb-20">
    Power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection.
    </p>
    <hr>
    <div class="blog-details-tags pb-20">
    <h5>Tags : </h5>
    <ul>
    <li><a href="#">Repair</a></li>
    <li><a href="#">Phone</a></li>
    <li><a href="#">Computer</a></li>
    </ul>
    </div>
    </div>
    <div class="blog-author">
    <div class="blog-author-img">
    <img src="assets/img/blog/author.jpg" alt>
    </div>
    <div class="author-info">
    <h6>Author</h6>
    <h3 class="author-name">Roger D Duque</h3>
    <p>It is a long established fact that a reader will be distracted by the abcd readable content of a page when looking at its layout that more less.</p>
    <div class="author-social">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-x-twitter"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-whatsapp"></i></a>
    </div>
    </div>
    </div>
    </div>
    <div class="blog-comments">
    <h3>Comments (20)</h3>
    <div class="blog-comments-wrap">
    <div class="blog-comments-single">
    <div class="blog-comments-img"><img src="assets/img/blog/com-1.jpg" alt="thumb"></div>
    <div class="blog-comments-content">
    <h5>Jesse Sinkler</h5>
    <span><i class="far fa-clock"></i> 16 Aug, 2024</span>
    <p>There are many variations of passages the majority have suffered in some injected humour or randomised words which don't look even slightly believable.</p>
    <a href="#"><i class="far fa-reply"></i> Reply</a>
    </div>
    </div>
    <div class="blog-comments-single blog-comments-reply">
    <div class="blog-comments-img"><img src="assets/img/blog/com-2.jpg" alt="thumb"></div>
    <div class="blog-comments-content">
    <h5>Daniel Wellman</h5>
    <span><i class="far fa-clock"></i> 16 Aug, 2024</span>
    <p>There are many variations of passages the majority have suffered in some injected humour or randomised words which don't look even slightly believable.</p>
    <a href="#"><i class="far fa-reply"></i> Reply</a>
    </div>
    </div>
    <div class="blog-comments-single">
    <div class="blog-comments-img"><img src="assets/img/blog/com-3.jpg" alt="thumb"></div>
    <div class="blog-comments-content">
    <h5>Kenneth Evans</h5>
    <span><i class="far fa-clock"></i> 16 Aug, 2024</span>
    <p>There are many variations of passages the majority have suffered in some injected humour or randomised words which don't look even slightly believable.</p>
    <a href="#"><i class="far fa-reply"></i> Reply</a>
    </div>
    </div>
    </div>
    <div class="blog-comments-form">
    <h3>Leave A Comment</h3>
    <form action="#">
    <div class="row">
    <div class="col-md-6">
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Your Name*">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <input type="email" class="form-control" placeholder="Your Email*">
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
    <textarea class="form-control" rows="5" placeholder="Your Comment*"></textarea>
    </div>
    <button type="submit" class="theme-btn">Post Comment <i class="far fa-paper-plane"></i></button>
    </div>
    </div>
    </form>
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
    
    <div class="widget category">
    <h5 class="widget-title">Category</h5>
    <div class="category-list">
    <a href="#"><i class="far fa-angle-double-right"></i>Data Recovery<span>(20)</span></a>
    <a href="#"><i class="far fa-angle-double-right"></i>Hardware Update<span>(10)</span></a>
    <a href="#"><i class="far fa-angle-double-right"></i>Electronics Care<span>(15)</span></a>
    <a href="#"><i class="far fa-angle-double-right"></i>Display Change<span>(30)</span></a>
    <a href="#"><i class="far fa-angle-double-right"></i>Keyboard Change<span>(25)</span></a>
    </div>
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
    
    <div class="widget sidebar-tag">
    <h5 class="widget-title">Popular Tags</h5>
    <div class="tag-list">
    <a href="#">Repair</a>
    <a href="#">Mobile</a>
    <a href="#">Phone</a>
    <a href="#">Desktop</a>
    <a href="#">Computer</a>
    <a href="#">Display</a>
    <a href="#">Change</a>
    <a href="#">Hardware</a>
    </div>
    </div>
    </aside>
    </div>
    </div>
    </div>
    </div>
    
    </main>
@endsection