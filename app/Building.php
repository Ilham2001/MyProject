<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = [
        'id_building',
        'buildingRef',
        'adress',
        'zipcode',
        'city',
        'buildingName'
    ];

    public function clients()
    {
        return $this->belongsToMany('App\Client');
    }
}
