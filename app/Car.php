<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable =[
        'name',
        'model',
        'kW',
        'brand_id'
    ];

    public function brand(){

        return $this -> belongsTo(Brand::class);
    }

    public function pilots(){

        return $this -> belongsToMany(Pilot::class);
    }
}
