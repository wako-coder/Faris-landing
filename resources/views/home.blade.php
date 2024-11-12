@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Blog</h1>

    <form action="{{ route('admin.blogs.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" required></textarea>
        </div>
        <button type="submit">Create Blog</button>
    </form>
</div>
@endsection
