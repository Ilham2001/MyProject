<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    protected $fillable = [
        'id',
        'id_building',
        'id_demand',
        'interventionRef',
        'type_intervention',
        'startDate',
        'startTime',
        'desiredDate',
        'desiredTime',
        'endTime',
        'status_intervention',
        'reason',
        'commentary'
    ];
    
    public function building() {
        return $this->belongsTo('App\Building','id');
    }
    public function demand()
    {
        return $this->belongsTo('App\Demand','id');
    }
}
