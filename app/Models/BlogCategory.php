<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;
    protected $table = 'blog_categories';
    protected $fillable = [
        'name',	
        'slug',	
        'description',	
        'image',
        'parent_id',
        'meta_title',	
        'meta_keyword',	
        'meta_description',
        'navbar_status',
        'status',
        'created_by'
    ];

    // Read the relationship as A Category and have many Category (Subcategory) and is associated with parent_id a foreign key. This is a relationship with self-table.
    public function subcategory(){

        return $this->hasMany('App\Models\BlogCategory', 'parent_id');

    }
   
    // public function experts(){
    //     return $this->hasMany(Expert::class, 'category_id', 'id');
    // }
}
