<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FitnessImage extends Model
{
    use HasFactory;
    protected $table = 'fitness_center_images'; 
    protected $fillable = [
        'fitness_center_id',
        'image'
    ];
}
