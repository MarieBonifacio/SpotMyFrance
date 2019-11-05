<?php

namespace App\Models;

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
    //Liaison Département
    public function departments()
    {
        return $this->belongsTo('App\Department', 'code', 'department_code');
    }
    //Liaison lieu
    public function places()
    {
        return $this->hasMany('App\Place', 'id_city', 'id');
    }
}
