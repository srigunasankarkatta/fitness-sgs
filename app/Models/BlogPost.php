<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BlogCategory;

class BlogPost extends Model
{
    use HasFactory;
    protected $table = 'blog_posts';
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'image',
        'description',
        'status',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'navbar_status',
        'created_by'
    ];

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id', 'id');
    }
}
