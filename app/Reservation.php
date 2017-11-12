<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';

	protected $fillable = [
		'id_reservation', 'started_at', 'finalized_at', 'subtotal', 'client_id', 'store_id', 'rs_id',
	];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function stores()
    {
        return $this->belongsTo('App\Store');
    }

    public function reservation_status()
    {
        return $this->belongsTo('App\Reservation_status');
    }


    public function reservation_items()
    {
        return $this->hasMany('App\Reservation_item');
    }

}

