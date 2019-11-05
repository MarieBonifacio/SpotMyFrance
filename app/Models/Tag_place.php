<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag_place extends Model
{
    protected $fillable = [
        'id_tag',
        'id_place',
    ];
    //Relation tag
    public function tags()
    {
        return $this->hasOne('App\Tag', 'id', 'id_tag');
    }
    //Liaison lieux
    public function places()
    {
        return $this->belongsTo('App\Place', 'id', 'id_place');
    }
}
