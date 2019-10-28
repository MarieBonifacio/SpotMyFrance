<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'id_user',
        'id_place',
        'text',
    ];
//Relation utilisateur
    public function user()
    {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
//Relation lieux
    public function places()
    {
        return $this->belongsTo('App\Place', 'id', 'id_place');
    }
}
