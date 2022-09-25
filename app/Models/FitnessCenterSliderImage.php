<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FitnessCenterSliderImage extends Model
{
    use HasFactory;
    protected $table = 'fitness_center_slider_images';
    protected $fillable = [
        'fitness_center_id',
        'image'
    ];
}
