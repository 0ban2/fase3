<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'stores';

	protected $fillable = [
		'id_store', 'name_store', 'address_store',
	];

	

 	
 	public function bicycles()
    {
        return $this->hasMany('App\Bicycle');
    }

    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }



}

