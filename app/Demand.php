<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    protected $fillable = [
        'id_intervention',
        'date_demand',
        'type_demand',
        'content_demand'
    ];

    public function interventions()
    {
        return $this->hasMany('App\Intervention','id');
    }
    public function quotes()
    {
        return $this->hasMany('App\Quote','id');
    }
}
