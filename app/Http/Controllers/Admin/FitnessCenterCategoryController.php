<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FintnessCenterCategoryFormRequest;
use App\Models\FitnessCenterCategory;
use File;

class FitnessCenterCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = FitnessCenterCategory::all();
        return view('admin.fitness_centers.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fitness_centers.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FintnessCenterCategoryFormRequest $request)
    {
        $validatedData = $request->validated();

        $category = new FitnessCenterCategory;
        $category->name = $validatedData['name'];
        $category->slug = $validatedData['slug'];
        $category->description = $validatedData['description'];
        $category->image = $request->category_icon;
        // if($request->hasFile('image')){
        //     $file = $request->file('image');
        //     $ext = $file->getClientOriginalExtension();
        //     $filename = 'uploads/fintness_center_category/' . time().'.'.$ext;
        //     $file->move('uploads/fintness_center_category/', $filename);
        //     $category->image = $filename;
        // }
        $category->meta_title = $validatedData['meta_title'];
        $category->meta_keyword = $validatedData['meta_keyword'];
        $category->meta_description = $validatedData['meta_description'];
        $category->status = $request->status == true ? '1':'0';
        $category->save();
        return redirect('admin/fitness-center-category')->with('message', 'category added successfully');
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
    public function edit(int $category_id)
    {
        $category = FitnessCenterCategory::findOrFail($category_id);
        return view('admin.fitness_centers.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FintnessCenterCategoryFormRequest $request, int $category_id)
    {
        $validatedData = $request->validated();
        
        $category = FitnessCenterCategory::findOrFail($category_id);

        $category->name = $validatedData['name'];
        $category->slug = $validatedData['slug'];
        $category->description = $validatedData['description'];

        if($request->hasFile('image')){
            $file_path = app_path($category->image);
            if(File::exists($file_path)){ 
                return $file_path;
                File::delete(public_path($category->image));
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = 'uploads/fintness_center_category/'.time().'.'.$ext;

            $file->move('uploads/fintness_center_category/', $filename);
            $category->image = $filename;
        }

        $category->meta_title = $validatedData['meta_title'];
        $category->meta_keyword = $validatedData['meta_keyword'];
        $category->meta_description = $validatedData['meta_description'];
        $category->status =  $request->status == true ? '1':'0';
        $category->save();
        return redirect('admin/fitness-center-category')->with('message', 'changes updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $fitness_category = FitnessCenterCategory::findOrFail($id);
        if(File::exists($fitness_category->image)){
            File::delete($fitness_category->image);
        }
        $fitness_category->delete();

        return redirect()->back()->with('message', 'category removed successfully');
    }

    
}
