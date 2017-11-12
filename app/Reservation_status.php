<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation_status extends Model
{
    protected $table = 'reservation_status';

	protected $fillable = [
		'id_rs', 'desc_rs',
	];

	public $timestamps = false;
    

 	public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }

}

