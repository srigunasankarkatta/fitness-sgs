<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Http\Requests\BlogPostFormRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use File;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = BlogPost::get();

        return view('admin.blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parentCategories = BlogCategory::where('parent_id', 0)->get();
        return view('admin.blog.create', compact('parentCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogPostFormRequest $request)
    {
        $validatedData = $request->validated();
        $post = new BlogPost;
        $post->category_id = $validatedData['category_id'];
        $post->name = $validatedData['name'];
        $post->slug = Str::slug($validatedData['slug']);
        $post->description = $validatedData['blog_description'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = 'uploads/blog_post/'.time() . '.' . $ext;

            $file->move('uploads/blog_post/', $filename);
            $post->image = $filename;
        }

        $post->meta_title = $validatedData['meta_title'];
        $post->meta_keyword = $validatedData['meta_keyword'];
        $post->meta_description = $validatedData['meta_description'];
        $post->navbar_status = $request->navbar_status == true ? '0' : '1';
        $post->status = $request->status == true ? '0' : '1';
        $post->created_by = Auth::user()->id;
        $post->save();

        return redirect('admin/blog-post')->with('message', 'blog post added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $post_id)
    {
        $parentCategories = BlogCategory::where('parent_id', 0)->get();
        $post = BlogPost::find($post_id);
        if ($post) {
            return view('admin.blog.edit', compact('parentCategories', 'post'));
        }
        return redirect('admin/blog-post')->with('error', 'post not found');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,int $post_id)
    {
       
        $request->validate([
            'category_id'=> 'required',
            'name'=> 'required',
            'blog_description'=> 'required',
            'slug' => 'required|unique:blog_posts,slug,'.$post_id
         ]);

        $post = BlogPost::find($post_id);
        if ($post) {
            $post->category_id  = $request->category_id;
            $post->name         =$request->name;
            $post->slug         = Str::slug($request->slug);
            $post->description  =$request->blog_description;

            if ($request->hasFile('image')) {
                $file_path = app_path($post->image);
                if(File::exists($file_path)){ 
                    File::delete(public_path($post->image));
                }
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = 'uploads/blog_post/'.time() . '.' . $ext;

                $file->move('uploads/blog_post/', $filename);
                $post->image = $filename;
            }

            $post->meta_title = $request->meta_title;
            $post->meta_keyword = $request->meta_keyword;
            $post->meta_description = $request->meta_description;
            $post->navbar_status = $request->navbar_status == true ? '0' : '1';
            $post->status = $request->status == true ? '0' : '1';
            $post->created_by = Auth::user()->id;
            $post->save();

            return redirect('admin/blog-post')->with('message', 'blog post updated successfully');
        }
        return redirect('admin/blog-post')->with('error', 'post not found');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $post_id)
    {
        $post = BlogPost::findOrFail($post_id);
        if($post){
            $file_path = app_path($post->image);
            if(File::exists($file_path)){ 
                File::delete(public_path($post->image));
            }
        }
        $post->delete();
        return redirect('admin/blog-post')->with('message', 'post removed successfully');
    }
}
