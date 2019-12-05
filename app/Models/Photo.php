<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'id_place',
        'name',
    ];

    public function place()
    {
        return $this->belongsTo('App\Models\Place', 'id_place', 'id');
    }
}
