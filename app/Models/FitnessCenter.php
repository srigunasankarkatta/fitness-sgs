<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FitnessCenter extends Model
{
    use HasFactory;
    protected $table = 'fitness_centers'; 
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'city',
        'description',
        'image',
        'status',
        'meta_title',
        'meta_keyword',
        'meta_description'
    ];
}
