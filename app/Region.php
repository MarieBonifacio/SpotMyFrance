<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = [
        'code',
        'name',
        'slug',
    ];

//Laison lieux
public function places()
{
    return $this->hasMany('App\Place', 'id_region', 'id');
}
//Liaison départements
public function departments()
{
    return $this->hasMany('App\Department', 'region_code', 'code');
}
}
