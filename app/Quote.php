<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'id_quote',
        'id_demand',
        'id_building',
        'quote',
        'title_quote',
        'date_quote',
        'amountHT',
        'amountTTC',
        'status_quote',
        'location_quote'
    ];
    public function demand()
    {
        return $this->belongsTo('App\Demand','id');
    }
}
