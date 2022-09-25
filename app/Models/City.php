<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FitnessCenter;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';
    protected $fillable = [
        'name'
    ];

    public function fitnessCenters(){
        return $this->hasMany(FitnessCenter::class, 'city_id', 'id');
    }
}
