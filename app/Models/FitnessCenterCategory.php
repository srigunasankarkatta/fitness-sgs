<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FitnessCenter;

class FitnessCenterCategory extends Model
{
    use HasFactory;
    protected $table = 'fitness_center_categories';
    protected $fillable = [
        'name',	
        'slug',	
        'description',	
        'image',	
        'meta_title',	
        'meta_keyword',	
        'meta_description',
        'status',
    ];

    public function fitnessCenters(){
        return $this->hasMany(FitnessCenter::class, 'category_id', 'id');
    }

}
