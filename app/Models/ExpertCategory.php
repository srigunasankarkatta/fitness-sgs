<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Expert;

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
    
    public function experts(){
        return $this->hasMany(Expert::class, 'category_id', 'id');
    }
}
