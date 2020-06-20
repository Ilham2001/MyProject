<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    protected $fillable = [
        'id_demand',
        'date_demand',
        'type_demand',
        'content_demand'
    ];

    public function intervention()
    {
        return $this->hasMany('App\Intervention','id_intervention');
    }
}
