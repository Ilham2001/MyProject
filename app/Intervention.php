<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    protected $fillable = [
        'id_intervnention',
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
}
