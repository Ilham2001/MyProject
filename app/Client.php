<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'id',
        'clientName',
        'clientEmail'
    ];

    public function buildings()
    {
        return $this->belongsToMany('App\Building');
    }

    public function user()
    {
        return $this->hasMany('App\User','id');
    }

}