@extends('layouts.app')

@section('content')
    <h1>All Blogs</h1>
    <a href="{{ route('admin.blogs.create') }}">Create New Blog</a>
    <ul>
        @foreach ($blogs as $blog)
            <li>
                <a href="{{ route('admin.blogs.edit', $blog->id) }}">{{ $blog->title }}</a>
                <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
