<?php

namespace App\Models;

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
        return $this->hasMany('App\Place', 'id_category', 'id');
    }
}
