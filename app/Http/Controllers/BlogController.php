<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Display a list of blogs
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    public function showblogs(){
        $blogs = Blog::all();
        return view('blogs.showblogs', compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);

        return view('blogs.blogsingle', compact('blog'));
    }
    // Show the form for creating a new blog
    public function create()
    {
        return view('blogs.create');
    }

    // Store a newly created blog in storage
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'images' =>'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $content= strip_tags($request->content);
        $blog->content = $content;

        if( $request->hasFile('images')){
            $imagepaths = [];

            foreach($request->file('images') as $image){
                $imagepaths[] = $image->store('blogs', 'public');
            }
                
            $blog->images = json_encode($imagepaths);

        }

        $blog->save();

        return redirect()->route('blogs.showblogs')->with('success', 'Blog created successfully!');
    }

    // Show the form for editing the specified blog
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }

    // Update the specified blog in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'images' =>'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

     
        $blog = new Blog();
        $blog->title = $request->title;
        $content= strip_tags($request->content);
        $blog->content = $content;

        if( $request->hasFile('images')){
            $imagepaths = [];

            foreach($request->file('images') as $image){
                $imagepaths[] = $image->store('blogs', 'public');
            }
                
            $blog->images = json_encode($imagepaths);

        }

        $blog->save();

        return redirect()->route('blogs.showblogs')->with('success', 'Blog created successfully!');
    }


    

    // Remove the specified blog from storage
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
    }
}
