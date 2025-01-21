@extends('layouts.app')

@section('content')
<main class="main">

  
    
    
    <div class="blog-area py-120" style="position: relative; top:50px;">
    <div class="container">
    <div class="row">
    @foreach ($blogs as $blog)
    <div class="col-md-6 col-lg-4">
    <div class="blog-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
    <span class="blog-date"><i class="far fa-calendar-alt"></i> {{$blog->created_at->format('M d, Y')}}</span>
    <div class="blog-item-img">
        @if($blog->images)
            @php
                $images = json_decode($blog->images); // Decode the JSON string into an array
            @endphp
            <img src="{{ asset('storage/' . $images[0]) }}" alt="Thumb">
        @endif
    </div>    
    <div class="blog-item-info">
    <h4 class="blog-title">
    <a href="{{ url('/blogsingle') }}">{{$blog->title}}</a>
    </h4>
    <div class="blog-item-meta">
    <ul>
    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
    <li><a href="#"><i class="far fa-comments"></i> 2.5k Comments</a></li>
    </ul>
    </div>
    <p>
    {{$blog->content}}
    </p>
    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary">
        <i class="fas fa-edit"></i> Edit
    </a>
      <!-- Delete Button -->
      <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this blog?');">
            <i class="far fa-trash-alt"></i> Delete
        </button>
    </form>
    </div>
    </div>
    </div>
    @endforeach

    
   
   
  
    
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
  
    
    </main>
@endsection
