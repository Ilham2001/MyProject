<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    public $table = "interventions";
    protected $fillable = [
        'id',
        'interventionRef',
        'type_intervention',
        'startDate',
        'startTime',
        'desiredDate',
        'desiredTime',
        'endTime',
        'status_intervention',
        'reason',
        'commentary',
        'id_building',
        'id_demand',
        'date_intervention',
        'breakdown',
        'solution',
        'replaced_hardware'
    ];
    /**
     * Intervention belongs to just one building
     */
    public function building() {
        return $this->belongsTo('App\Building','id_building','id');
    }
    /**
     * Intervention belong to just one demand
     */
    public function demand()
    {
        return $this->belongsTo('App\Demand','id_demand','id');
    }
    /**
     * Intervention has many staffs->technicians
     */
    public function staffs()
    {
        return $this->hasMany('App\Staff','id');
    }
    /**
     * Intervention has one call record
     */
    public function call_record()
    {
        return $this->hasOne('App\CallRecord','id');
    }
}
