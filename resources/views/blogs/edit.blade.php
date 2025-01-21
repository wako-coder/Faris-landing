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
                                <h5>Edit Your Blog</h5>
                                <p>Update your blog post to keep it engaging and relevant for your audience.</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-calendar"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Stay Updated</h5>
                                <p>Ensure your blog reflects your latest thoughts, ideas, or insights.</p>
                            </div>
                        </div>
                        <div class="contact-info border-0">
                            <div class="contact-info-icon">
                                <i class="fal fa-star"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Enhance Visibility</h5>
                                <p>Refine your blog to maximize its impact and attract more readers.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Editing Form -->
                <div class="col-lg-8">
                    <div class="contact-form">
                        <div class="contact-form-header">
                            <h2>Edit Blog Post</h2>
                            <p>Modify the blog details to ensure they are up-to-date and accurate.</p>
                        </div>
                        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Blog Title -->
                            <div class="form-group">
                                <label>Blog Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter blog title" value="{{ old('title', $blog->title) }}" required>
                            </div>

                            <!-- Blog Content -->
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="content" class="form-control" placeholder="Write your blog content here" rows="5" id="content" required>{{ old('content', $blog->content) }}</textarea>
                            </div>

                            <!-- Blog Image Upload -->
                            <div class="form-group">
                                <label for="image">Upload an Image</label>
                                <input type="file" class="form-control" name="images[]" accept="image/*" multiple>
                            </div>

                            <!-- Show Current Image if Exists -->
                            @if($blog->images)
                                <div class="form-group">
                                    <label>Current Image</label>
                                    @foreach(json_decode($blog->images) as $image)
                                    <div class="blog-item-img">
                                        <img src="{{ asset('storage/' . $image) }}" alt="Blog Image" class="img-fluid" style="width: 100%; height: auto;">
                                    </div>
                                @endforeach
                                
                                </div>
                            @endif

                            <!-- Terms Agreement Checkbox -->
                          

                            <!-- Submit Button -->
                            <div class="d-flex align-items-center">
                                <button type="submit" class="theme-btn"><i class="far fa-paper-plane"></i> Update Blog</button>
                            </div>
                        </form>
                    </div>

                    <!-- Logout Button -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger mt-3">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
