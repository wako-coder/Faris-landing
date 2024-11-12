@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Blogs</h1>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Create Blog</a>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <!-- Display blog image if it exists -->
                    <td>
                        @if($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" width="100">
                        @else
                            <span>No Image</span>
                        @endif
                    </td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ Str::limit($blog->content, 50) }}</td>
                    <td>
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
