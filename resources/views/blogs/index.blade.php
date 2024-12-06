@extends('layouts.app')

@section('content')
<main class="main">

  
    
    
    <div class="blog-area py-120" style="position: relative; top:50px;">
    <div class="container">
    <div class="row">
    <div class="col-md-6 col-lg-4">
    <div class="blog-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
    <span class="blog-date"><i class="far fa-calendar-alt"></i> Aug 16, 2024</span>
    <div class="blog-item-img">
    <img src="{{ asset('assets/img/gallery/pexels-kevin-ku-92347-577585 (1) (1).jpg') }}"" alt="Thumb">
    </div>
    <div class="blog-item-info">
    <h4 class="blog-title">
    <a href="{{ url('/blogsingle') }}">There are many variation of passage available suffer</a>
    </h4>
    <div class="blog-item-meta">
    <ul>
    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
    <li><a href="#"><i class="far fa-comments"></i> 2.5k Comments</a></li>
    </ul>
    </div>
    <p>
    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
    </p>
    <a class="theme-btn" href="{{ url('/blogsingle') }}">Read More<i class="fas fa-arrow-right"></i></a>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-lg-4">
    <div class="blog-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
    <span class="blog-date"><i class="far fa-calendar-alt"></i> Aug 18, 2024</span>
    <div class="blog-item-img">
    <img src="assets/img/blog/02.jpg" alt="Thumb">
    </div>
    <div class="blog-item-info">
    <h4 class="blog-title">
    <a href="{{ url('/blogsingle') }}">It is a long established fact that will be distracted</a>
    </h4>
    <div class="blog-item-meta">
    <ul>
    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
    <li><a href="#"><i class="far fa-comments"></i> 2.5k Comments</a></li>
    </ul>
    </div>
    <p>
    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
    </p>
    <a class="theme-btn" href="{{ url('/blogsingle') }}">Read More<i class="fas fa-arrow-right"></i></a>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-lg-4">
    <div class="blog-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
    <span class="blog-date"><i class="far fa-calendar-alt"></i> Aug 20, 2024</span>
    <div class="blog-item-img">
        <img src="{{ asset('assets/img/gallery/rocket-launch-67643_1280 (1).jpg') }}" alt>
    </div>
    <div class="blog-item-info">
    <h4 class="blog-title">
    <a href="{{ url('/blogsingle') }}">All the generators on the tend to repeat predefined chunks</a>
    </h4>
    <div class="blog-item-meta">
    <ul>
    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
    <li><a href="#"><i class="far fa-comments"></i> 2.5k Comments</a></li>
    </ul>
    </div>
    <p>
    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
    </p>
    <a class="theme-btn" href="{{ url('/blogsingle') }}">Read More<i class="fas fa-arrow-right"></i></a>
    </div>
    </div>
    </div>
    
   
   
  
    
    <div class="pagination-area">
    <div aria-label="Page navigation example">
    <ul class="pagination">
    <li class="page-item">
    <a class="page-link" href="#" aria-label="Previous">
    <span aria-hidden="true"><i class="far fa-arrow-left"></i></span>
    </a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
    <a class="page-link" href="#" aria-label="Next">
    <span aria-hidden="true"><i class="far fa-arrow-right"></i></span>
    </a>
    </li>
    </ul>
    </div>
    </div>
    
    </div>
    </div>
    <div class="blog-posting-area py-120">
        <div class="container">
            <div class="blog-posting-wrap">
                <div class="row">
                    <!-- Blog Details -->
                    <div class="col-lg-4">
                        <div class="contact-content">
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-lightbulb"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Share Your Ideas</h5>
                                    <p>Express your thoughts, ideas, and stories with the world through our platform.</p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-calendar"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Stay Updated</h5>
                                    <p>Join a growing community of readers and contributors by sharing engaging content.</p>
                                </div>
                            </div>
                            <div class="contact-info border-0">
                                <div class="contact-info-icon">
                                    <i class="fal fa-star"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Gain Visibility</h5>
                                    <p>Get your voice heard and build a portfolio of thought-provoking blog posts.</p>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Blog Posting Form -->
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <div class="contact-form-header">
                                <h2>Create a New Blog Post</h2>
                                <p>Craft an engaging blog post to inspire and connect with your audience.</p>
                            </div>
                            <form method="POST" action="" enctype="multipart/form-data" id="blog-posting-form">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Blog Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter your blog title" required>
                                </div>
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea name="content" class="form-control" rows="6" placeholder="Write your blog content here" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image">Upload an Image</label>
                                    <input type="file" class="form-control" name="image" accept="image/*" required>
                                </div>
                                <button type="submit" class="theme-btn">Publish Blog <i class="far fa-paper-plane"></i></button>
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
    
    </main>
@endsection
