<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'region_code',
        'code',
        'name',
        'slug',
    ];

    //liaison régions
    public function regions()
    {
        return $this->belongsTo('App\Region', 'code', 'region_code');
    }
    //Liaison Ville
    public function cities()
    {
        return $this->hasMany('App\Citie', 'department_code', 'code');
    }
    //liaison Lieu
    public function places()
    {
        return $this->hasMany('App\Place', 'id_department', 'id');
    }
}
