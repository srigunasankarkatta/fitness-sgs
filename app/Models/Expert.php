<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FitmiExpertImage;
use App\Models\FitmiExpertVideo;
use App\Models\ExpertCategory;


class Expert extends Model
{
    use HasFactory;
    protected $table = 'fitmi_experts';
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'city',
        'description',
        'status',
        'meta_title',
        'meta_keyword',
        'meta_description'];
        
    public function category(){
        return $this->belongsTo(ExpertCategory::class,'category_id', 'id');
    }

    public function expertImages(){
        return $this->hasMany(FitmiExpertImage::class,'fitmi_expert_id', 'id');
    }

    public function expertVideos(){
        return $this->hasMany(FitmiExpertVideo::class,'fitmi_expert_id', 'id');
    }
}
