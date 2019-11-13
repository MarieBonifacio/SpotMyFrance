<?php

namespace App\Models;
use App\Models\Place;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'name',
        'order',
    ];   
    //Laisison Lieux
    public function places()
    {
        return $this->hasMany('App\Models\Place', 'id_category', 'id');
    }
}
