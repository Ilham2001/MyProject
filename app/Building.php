<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    public $table = "buildings";
    protected $fillable = [
        'id',
        'buildingRef',
        'adress',
        'zipcode',
        'city',
        'buildingName'
    ];
    /**
     * Building has many clients
     */
    public function clients()
    {
        return $this->belongsToMany('App\Client');
    }
    /**
     * Building has manny interventions
     */
    public function interventions()
    {
        return $this->hasMany('App\Intervention','id');
    }
    /**
     * Building has many documents
     */
    public function documents()
    {
        return $this->hasMany('App\Document','id');
    }
}
