<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExpertCategory;
use App\Models\FitnessCenterCategory;
use App\Models\FitnessCenter;
use App\Http\Requests\FitnessCenterFormRequest;
use App\Models\City;

class FitnessCenterConteroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fitness_centers = FitnessCenter::all();
        return view('admin.fitness_centers.index', compact('fitness_centers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities  = City::all();
        $categories = FitnessCenterCategory::all();
        return view('admin.fitness_centers.create', compact('categories','cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FitnessCenterFormRequest $request)
    {
        $validatedData = $request->validated();
        $city = City::findOrFail($validatedData['city']);
        $availability = implode(',', $validatedData['availability']);
       
        $fitness_center = $city->fitnessCenters()->create([
            'category_id'=> $validatedData['category_id'],
            'name'=> $validatedData['name'],
            'description'=> $validatedData['description'],
            'bussiness_name'=> $validatedData['bussiness_name'],
            'location'=> $validatedData['location'],
            'city_id'=> $validatedData['city'],
            'directions'=> $validatedData['directions'],
            'availability'=> $availability,
            'live_streams'=> $validatedData['live_streams'],
            'status'=> '0',
            'kcal'=> $validatedData['kcal'],
            'duration'=> $validatedData['duration'],
        ]);
        

        if($request->hasFile('slider_images')){
           
            foreach ($request->file('slider_images') as $key => $file) {
                $ext = $file->getClientOriginalExtension();
                $filename = uniqid().time().'.'.$ext;
                $file->move('uploads/fitness_center/slider_images/', $filename);
                $fitness_center->fitnessCenterSliderImages()->create([
                    'fitmi_expert_id' => $fitness_center->id,
                    'image' => 'uploads/fitness_center/slider_images/'.$filename,
                ]);
            }
        }
        if($request->hasFile('banner_videos')){
           
            foreach ($request->file('banner_videos') as $key => $file) {
                $ext = $file->getClientOriginalExtension();
                $filename = uniqid().time().'.'.$ext;
                $file->move('uploads/fitness_center/banner_videos/', $filename);
                $fitness_center->fitnessCenterBannerVideos()->create([
                    'fitmi_expert_id' => $fitness_center->id,
                    'video' => 'uploads/fitness_center/banner_videos/'.$filename,
                ]);
            }
        }

        if($request->has('amenity_icon') || $request->has('amenity_name')){
           for ($i=0; $i < count($request->amenity_icon) ; $i++) { 
                $fitness_center->fitnessCenterAmenities()->create([
                    'fitmi_expert_id' => $fitness_center->id,
                    'icon' => $request->amenity_icon[$i],
                    'name' => $request->amenity_name[$i],
                ]);
           }
            
        }
        if($request->has('service_icon') || $request->has('service_name')){
            for ($i=0; $i < count($request->service_icon) ; $i++) { 
                 $fitness_center->fitnessCenterServices()->create([
                     'fitmi_expert_id' => $fitness_center->id,
                     'icon' => $request->service_icon[$i],
                     'name' => $request->service_name[$i],
                 ]);
            }
             
         }
        return redirect('admin/fitness-center')->with('message', 'fitness center added successfully');
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
    public function edit(int $fitness_center_id)
    {
        $cities  = City::all();
        $categories = FitnessCenterCategory::all();
        $fitness_center = FitnessCenter::findOrFail($fitness_center_id);
        return view('admin.fitness_centers.edit', compact('categories','cities', 'fitness_center'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
