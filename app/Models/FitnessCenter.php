<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FitnessCenterCategory;
use App\Models\FitnessCenterBannerVideo;
use App\Models\FitnessCenterSliderImage;
use App\Models\FitnessCenterAmenity;
use App\Models\fitnessCenterService;

class FitnessCenter extends Model
{
    use HasFactory;
    protected $table = 'fitness_centers'; 
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'bussiness_name',
        'location',
        'city_id',
        'directions',
        'availability',
        'live_streams',
        'status',
        'kcal',
        'duration',
    ];

    public function category(){
        return $this->belongsTo(FitnessCenterCategory::class,'category_id', 'id');
    }

    public function fitnessCenterBannerVideos(){
        return $this->hasMany(FitnessCenterBannerVideo::class,'fitness_center_id', 'id');
    }

    public function fitnessCenterSliderImages(){
        return $this->hasMany(FitnessCenterSliderImage::class,'fitness_center_id', 'id');
    }

    public function fitnessCenterAmenities(){
        return $this->hasMany(FitnessCenterAmenity::class,'fitness_center_id', 'id');
    }

    public function fitnessCenterServices(){
        return $this->hasMany(fitnessCenterService::class,'fitness_center_id', 'id');
    }


}
