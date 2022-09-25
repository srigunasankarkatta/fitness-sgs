<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FitmiExpertVideo extends Model
{
    use HasFactory;
    protected $table = 'fitmi_expert_videos';
    protected $fillable = [
        'fitmi_expert_id',
        'video'
    ]; 
}
