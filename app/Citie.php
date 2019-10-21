<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citie extends Model
{
    protected $fillable = [
        'department_code',
        'code',
        'zip_code',
        'name',
        'slug',
        'gps_lat',
        'gps_lng',
    ];
}
