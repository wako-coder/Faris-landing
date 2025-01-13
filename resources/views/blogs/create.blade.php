@extends('layouts.app')

@section('content')
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
                                <textarea name="content" class="form-control" id="content" rows="6" placeholder="Write your blog content here" required></textarea>
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
@endsection

