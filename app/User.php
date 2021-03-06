<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'name','password', 'ut_id', 'status', 'person_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function persons()
    {
        return $this->belongsTo('App\Person');
    }


    public function user_types()
    {
        return $this->belongsTo('App\User_type');
    }

    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }

}
