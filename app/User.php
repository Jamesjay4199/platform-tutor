<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Nicolaslopezj\Searchable\SearchableTrait;

class User extends Authenticatable
{
    use Notifiable;
    use SearchableTrait;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $searchable = [
        'columns' => [
            'users.username' => 10,
            'users.email' => 5,
            'users.id' => 3,
        ]
    ];
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function teacher(){
        return $this->hasOne('App\Teacher');
    }

    public function client(){
        return $this->hasOne('App\Client');
    }

    public function message() {
        return $this->hasMany()('App\Message');
    }

    // public function subject() {
    //     return $this->hasMany()('App\Subject');
    // }
}
