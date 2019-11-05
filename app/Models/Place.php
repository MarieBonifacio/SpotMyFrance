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
        return $this->hasMany('App\Comment', 'id_place', 'id');
    }
    //Liaison utlisateur
    public function user()
    {
        return $this->belongsTo('App\User', 'id', 'id_user');
    }
    //Liaison catégories
    public function categories()
    {
        return $this->belongsToMany('App\Categorie', 'id', 'id_category');
    }
    //Liaison tag lieu
    public function taglieu()
    {
        return $this->hasMany('App\Tag_place', 'id_place', 'id');
    }
    //Liaison régions
    public function regions()
    {
        return $this->belongsTo('App\Region', 'id', 'id_region');
    }
    //Liaison département
    public function departments()
    {
        return $this->belongsTo('App\Department', 'id', 'id_department');
    }
    //Liaison ville
    public function cities()
    {
        return $this->belongsTo('App\Citie', 'id', 'id_city');
    }

}
