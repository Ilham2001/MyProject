<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CallRecord extends Model
{
    public $table = "call_records";
    protected $fillable = [
        'id',
        'origin'
    ];
    /**
     * CallRecord belongs to one intervention
     */
    public function intervention()
    {
        return $this->belongsTo('App\Intervention','id');
    }
}
