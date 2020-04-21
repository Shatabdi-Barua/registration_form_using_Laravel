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
       'membType','businessNature','specNature','repBy','memberName','image','ComName','Desg','StrNo1','Zipcode1','city1','country1','StrNo2','Zipcode2','city2','country2','PhnOffice','PhnRes','fax','email','skype','web','mobile','password','confpass','proposerName','proposerNo','seconderName','seconderNo','qualification','JoinDate','association',
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
}
