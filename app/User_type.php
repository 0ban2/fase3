<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_type extends Model
{
    protected $table = 'user_types';

	protected $fillable = [
        'id_ut', 'desc_ut'
    ];

	public $timestamps = false;
    
       
    public function users()
    {
        return $this->hasMany('App\User');
    }

}
