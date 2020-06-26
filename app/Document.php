<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'id_document',
        'creationDate',
        'documentNature',
        'title_document',
        'location_document',
        'type_document'
    ];
    public function building()
    {
        //return $this->belongsTo('App\Building','id');
    }
}
