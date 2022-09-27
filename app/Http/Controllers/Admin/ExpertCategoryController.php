<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ExpertCategoryFormRequest;
use App\Models\ExpertCategory;

class ExpertCategoryController extends Controller
{
    public function index()
    {
        $categories = ExpertCategory::all();
        return view('admin.experts.category.index', compact('categories'));
    }
    public function create()
    {
        return view('admin.experts.category.create');
    }
    public function store(ExpertCategoryFormRequest $request)
    {
        $validatedData = $request->validated();

        $category = new ExpertCategory;
        $category->name = $validatedData['name'];
        $category->slug = $validatedData['slug'];
        $category->description = $validatedData['description'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = 'uploads/expert_category/' . time() . '.' . $ext;

            $file->move('uploads/expert_category/', $filename);
            $category->image = $filename;
        }

        $category->meta_title = $validatedData['meta_title'];
        $category->meta_keyword = $validatedData['meta_keyword'];
        $category->meta_description = $validatedData['meta_description'];
        $category->status = $request->status == true ? '1' : '0';
        $category->save();
        return redirect('admin/expert-category')->with('message', 'category added successfully');
    }

    public function destroy(int $id)
    {
        $expert_category = ExpertCategory::findOrFail($id);
        // if (File::exists($expert_category->image)) {
        //     File::delete($expert_category->image);
        // }
        $expert_category->delete();

        return redirect()->back()->with('message', 'category removed successfully');
    }
}
