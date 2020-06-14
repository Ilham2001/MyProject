<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuildingClient extends Model
{
    protected $fillable = [
        'id',
        'id_building',
        'id_client'
    ];
}
