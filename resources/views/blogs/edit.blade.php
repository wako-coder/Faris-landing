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
        <textarea name="content" class="form-control" placeholder="Write your blog content here" rows="5" required>{{ old('content', $blog->content) }}</textarea>
    </div>

    <!-- Blog Image Upload -->
    <div class="form-group">
        <label>Blog Image</label>
        <input type="file" name="image" class="form-control" accept="image/*">
    </div>

    <!-- Show Current Image if Exists -->
    @if($blog->image)
        <div class="form-group">
            <label>Current Image</label>
            <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" class="img-thumbnail" width="150">
        </div>
    @endif

    <!-- Terms Agreement Checkbox (optional for edit) -->
    <div class="form-check form-group">
        <input class="form-check-input" type="checkbox" value="1" id="agree" required>
        <label class="form-check-label" for="agree">
            I agree with the <a href="#">Terms Of Service.</a>
        </label>
    </div>

    <!-- Submit Button -->
    <div class="d-flex align-items-center">
        <button type="submit" class="theme-btn"><i class="far fa-paper-plane"></i> Update Blog</button>
    </div>
</form>
