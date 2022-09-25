<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ExpertCategoryFormRequest;
use App\Models\ExpertCategory;

class ExpertCategoryController extends Controller
{
    public function index(){
        $categories = ExpertCategory::all();
        return view('admin.experts.category.index', compact('categories'));
    }
    public function create(){
        return view('admin.experts.category.create');
    }
    public function store(ExpertCategoryFormRequest $request){
        $validatedData = $request->validated();

        $category = new ExpertCategory;
        $category->name = $validatedData['name'];
        $category->slug = $validatedData['slug'];
        $category->description = $validatedData['description'];

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/expert_category/', $filename);
            $category->image = $validatedData['image'];
        }
        

        $category->meta_title = $validatedData['meta_title'];
        $category->meta_keyword = $validatedData['meta_keyword'];
        $category->meta_description = $validatedData['meta_description'];
        $category->status = $request->status == true ? '1':'0';
        $category->save();
        return redirect('admin/expert-category')->with('message', 'category added successfully');
    }
}
