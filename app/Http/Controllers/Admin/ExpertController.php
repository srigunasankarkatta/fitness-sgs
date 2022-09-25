<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ExpertFormRequest;
use App\Models\ExpertCategory;
use App\Models\Expert;
use Illuminate\Support\Str;
use App\Models\FitmiExpertImage;
use App\Models\FitmiExpertVideo;
use File;

class ExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experts = Expert::all();
        return view('admin.experts.index', compact('experts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $categories = ExpertCategory::all();
        return view('admin.experts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExpertFormRequest $request)
    {
        // print_r($request->validated());

        $validatedData = $request->validated();
        $category = ExpertCategory::findOrFail($validatedData['category_id']);

        $expert = $category->experts()->create([
            'category_id' => $validatedData['category_id'],
            'name' => $validatedData['name'],
            'slug' => Str::slug($validatedData['slug']),
            'city' => $validatedData['city'],
            'description' => $validatedData['description'],
            'status' => $request->status == false ? 0 : 1,
            'meta_title' => $validatedData['meta_title'],
            'meta_keyword' => $validatedData['meta_keyword'],
            'meta_description' => $validatedData['meta_description'],
        ]);
        // return $expert;
       
        if($request->hasFile('images')){
           
            foreach ($request->file('images') as $key => $file) {
                $ext = $file->getClientOriginalExtension();
                $filename = uniqid().time().'.'.$ext;
                $file->move('uploads/expert_images/', $filename);
                $expert->expertImages()->create([
                    'fitmi_expert_id' => $expert->id,
                    'image' => 'uploads/expert_images/'.$filename,
                ]);
            }
        }

        if($request->hasFile('videos')){
           
            foreach ($request->file('videos') as $key => $file) {
                $ext = $file->getClientOriginalExtension();
                $filename = uniqid().time().'.'.$ext;
                $file->move('uploads/expert_videos/', $filename);
                $expert->expertVideos()->create([
                    'fitmi_expert_id' => $expert->id,
                    'video' => 'uploads/expert_videos/'.$filename,
                ]);
            }
        }
        return redirect('admin/expert')->with('message', 'expert added successfully');

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
    public function edit($id)
    {
        $categories = ExpertCategory::all();
        $expert = Expert::findOrFail($id);
        return view('admin.experts.edit', compact('categories', 'expert'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExpertFormRequest $request, int $id)
    {
        $validatedData = $request->validated();

        $expert = ExpertCategory::findOrFail($validatedData['category_id'])
                                  ->experts()->where('id', $id)->first();

        if($expert){
            $expert->update([
                'category_id' => $validatedData['category_id'],
                'name' => $validatedData['name'],
                'slug' => Str::slug($validatedData['slug']),
                'city' => $validatedData['city'],
                'description' => $validatedData['description'],
                'status' => $request->status == false ? 0 : 1,
                'meta_title' => $validatedData['meta_title'],
                'meta_keyword' => $validatedData['meta_keyword'],
                'meta_description' => $validatedData['meta_description'],
            ]);
            if($request->hasFile('images')){
           
                foreach ($request->file('images') as $key => $file) {
                    // $file = $file;
                    $ext = $file->getClientOriginalExtension();
                    $filename = uniqid().time().'.'.$ext;
                    $file->move('uploads/expert_images/', $filename);
                    // echo $file->getClientOriginalName();
                    $expert->expertImages()->create([
                        'fitmi_expert_id' => $expert->id,
                        'image' => 'uploads/expert_images/'.$filename,
                    ]);
                }
            }
            return redirect('admin/expert/'.$expert->id.'/edit')->with('message', 'changes updated successfully');
        }
        else{
            return redirect('admin/expert')->with('error', 'expert not found');

        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $expert_id)
    {
        $expert = Expert::findOrFail($expert_id);
        if($expert->expertImages){
            foreach ($expert->expertImages as $key => $file) {
                if(File::exists($file->image)){
                    File::delete($file->image);
                }
            }
        }
        $expert->delete();
        return redirect()->back()->with('message', 'expert removed successfully');


    }

    public function destroyImage(int $expert_image_id){
        $expertImage = FitmiExpertImage::findOrFail($expert_image_id);
        if(File::exists($expertImage->image)){
            File::delete($expertImage->image);
        }
        $expertImage->delete();

        return redirect()->back()->with('message', 'image deleted successfully');
    }

    public function destroyVideo(int $expert_image_id){
        $expertVideo = FitmiExpertVideo::findOrFail($expert_image_id);
        if(File::exists($expertVideo->video)){
            File::delete($expertVideo->video);
        }
        $expertVideo->delete();

        return redirect()->back()->with('message', 'video deleted successfully');
    }
}
