<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FitmiExpertImage extends Model
{
    use HasFactory;
    protected $table = 'fitmi_expert_images';
    protected $fillable = [
        'fitmi_expert_id',
        'image'
    ]; 
}
