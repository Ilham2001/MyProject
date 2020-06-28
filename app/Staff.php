<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public $table = "staffs";
    protected $fillable = [
        'id',
        'delostal_technician',
        'corresponding',
        'id_intervention'
    ];
    public function intervention()
    {
        return $this->belongsTo('App\Intervention','id_intervention','id');
    }
}
