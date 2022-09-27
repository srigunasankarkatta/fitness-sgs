<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FitnessCenterCategory;
use App\Models\FitnessCenter;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function home(){
        $fitnesscenter_categories = FitnessCenterCategory::all();
        return view('welcome', compact('fitnesscenter_categories'));
    }

    public function fitnessCenter($slug){
        $fitnesscenter_categories = FitnessCenterCategory::all();
        $category = FitnessCenterCategory::where('slug', $slug)->first();
        if($category){
            return view('frontend.fitness_center.index', compact('fitnesscenter_categories','category'));
        }
    }
}
