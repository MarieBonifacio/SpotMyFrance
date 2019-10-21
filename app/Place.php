<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'description',
        'id_city',
        'id_department',
        'id_region',
        'average_grade',
        'id_user',
        'id_category'
    ];
}
