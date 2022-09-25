<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Http\Requests\BlogCategoryFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class BlogCategoryController extends Controller
{
    public function index(){
        $categories = BlogCategory::where('parent_id',0)->get();
        return view('admin.blog.category.index', compact('categories'));
    }

    public function create(){
        return view('admin.blog.category.create');
    }

    public function edit(int $category_id){
        // $categories = BlogCategory::all();
        $category = BlogCategory::find($category_id);
        if($category){
            return view('admin.blog.category.edit', compact('category'));
        }else{
            return redirect('admin/blog-category')->with('error', 'category not found');
        }
    }
    public function store(BlogCategoryFormRequest $request){
        $validatedData = $request->validated();
        $category = new BlogCategory;
        $category->name = $validatedData['name'];	
        $category->slug = Str::slug($validatedData['slug']);
        $category->description = $validatedData['description'];	

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/blog_category/', $filename);
            $category->image = 'uploads/blog_category/'. $validatedData['image'];
        }

        $category->meta_title = $validatedData['meta_title'];	
        $category->meta_keyword = $validatedData['meta_keyword'];	
        $category->meta_description = $validatedData['meta_description'];
        $category->navbar_status = $request->navbar_status == true ? '0' : '1';
        $category->status = $request->status == true ? '0' : '1';
        $category->created_by = Auth::user()->id;
        $category->save();

        return redirect('admin/blog-category')->with('message', 'blog category added successfully');

    }
}
