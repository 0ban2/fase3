<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation_item extends Model
{
    protected $table = 'reservation_items';

	protected $fillable = [
		'id_ri', 'price_ri', 'bicycle_id', 'reservation_id',
	];

    public function reservations()
    {
        return $this->belongsTo('App\Reservation');
    }


    public function bicycles()
    {
        return $this->belongsTo('App\Bicycle');
    }


}

