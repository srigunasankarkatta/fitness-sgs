<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpertCategory extends Model
{
    use HasFactory;
    protected $table = 'expert_categories';
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
}
