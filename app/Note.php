<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'id_user',
        'id_place',
        'value',
    ];
//liaison utilisateur
    public function user()
    {
        return $this->belongsToMany('App\User', 'id', 'id_user');
    }
//liaison lieu    
    public function place()
    {
        return $this->belongsToMany('App\Place', 'id', 'id_place');
    }


}
