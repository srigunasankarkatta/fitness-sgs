<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Http\Requests\BlogCategoryFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use File;

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
            $filename = 'uploads/blog_category/'.time().'.'.$ext;

            $file->move('uploads/blog_category/', $filename);
            $category->image = $filename;
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

    public function update(Request $request,int $id)
    {
       
        $request->validate([
            'name'=> 'required',
            'description'=> 'required',
            'slug' => 'required|unique:blog_posts,slug,'.$id
         ]);

         $category = BlogCategory::find($id);
         if($category){
            $category->name = $request->name;	
            $category->slug = Str::slug($request->slug);
            $category->description = $request->description;	
    
            if($request->hasFile('image')){
                $file_path = app_path($category->image);
                if(File::exists($file_path)){ 
                    File::delete(public_path($category->image));
                }
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = 'uploads/blog_category/'.time().'.'.$ext;
    
                $file->move('uploads/blog_category/', $filename);
                $category->image = $filename;
            }
    
            $category->meta_title = $request->meta_title;	
            $category->meta_keyword = $request->meta_keyword;	
            $category->meta_description = $request->meta_description;
            $category->navbar_status = $request->navbar_status == true ? '0' : '1';
            $category->status = $request->status == true ? '0' : '1';
            $category->created_by = Auth::user()->id;
            $category->save();
    
            return redirect('admin/blog-category')->with('message', 'blog category updated successfully');
         }else{
            return redirect('admin/blog-post')->with('error', 'category not found');
         }
        
         

    }

    public function destroy(int $id){
        $category = BlogCategory::findOrFail($id);
        if($category){
            $file_path = app_path($category->image);
            if(File::exists($file_path)){ 
                File::delete(public_path($category->image));
            }
        }
        $category->delete();
        return redirect('admin/blog-category')->with('message', 'category removed successfully');
    }
}
