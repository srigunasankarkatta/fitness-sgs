<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FitnessCenterBannerVideo extends Model
{
    use HasFactory;
    protected $table = 'fitness_center_banner_videos';
    protected $fillable = [
        'fitness_center_id',
        'video'
    ]; 
    
}
