<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login', 'email', 'password', 'birthday', 'rang',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Relation commentaires
    public function comments()
    {
        return $this->hasMany('App\Comment', 'id', 'id_user');
    }
    //Relation lieux
    public function places()
    {
        return $this->hasMany('App\Place', 'id_user', 'id');
    }
    //Relation note
    public function notes()
    {
        return $this->hasMany('App\Note', 'id_user', 'id');
    }
}
