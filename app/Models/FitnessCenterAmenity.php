<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FitnessCenterAmenity extends Model
{
    use HasFactory;
    protected $table = 'fitness_center_amenities';
    protected $fillable = [
        'fitness_center_id',
        'icon',
        'name'
    ]; 
    
}
