<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    protected $fillable = [
        'id_intervention',
        'date_demand',
        'type_demand',
        'content_demand',
        'id_building'
    ];

    /**
     * Demand has many interventions
     */
    public function interventions()
    {
        return $this->hasMany('App\Intervention','id');
    }
    /**
     * Demand has many quotes
     */
    public function quotes()
    {
        return $this->hasMany('App\Quote','id');
    }
    /**
     * Demand belongs to one building
     */
    public function building() {
        return $this->belongsTo('App\Building','id_building','id');
    }
}
