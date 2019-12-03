<?php

namespace App\Models;

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

    //Liaison commentaires 
    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'id_place', 'id');
    }
    //Liaison utlisateur
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user', 'id');
    }
    //Liaison catégories
    public function categories()
    {
        return $this->belongsTo('App\Models\Categorie', 'id', 'id_category');
    }
    //Liaison tag lieu
    public function taglieu()
    {
        return $this->hasMany('App\Models\Tag_place', 'id_place', 'id');
    }
    //Liaison régions
    public function regions()
    {
        return $this->belongsTo('App\Models\Region', 'id_region', 'id');
    }
    //Liaison département
    public function departments()
    {
        return $this->belongsTo('App\Models\Department', 'id_department', 'id');
    }
    //Liaison ville
    public function cities()
    {
        return $this->belongsTo('App\Models\Citie', 'id_city', 'id');
    }

}
