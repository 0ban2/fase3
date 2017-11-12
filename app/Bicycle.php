<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bicycle extends Model
{
    protected $table = 'bicycles';

	protected $fillable = [
		'id_bicycle', 'serie_bicycle', 'color_bicycle', 'price_bicycle', 'slug_bicycle', 'model_id', 'bt_id', 'store_id', 'bs_id',
 	];


 	public function models()
    {
        return $this->belongsTo('App\Model');
    }


    public function bicycle_types()
    {
        return $this->belongsTo('App\Bicycle_type');
    }

    public function stores()
    {
        return $this->belongsTo('App\Store');
    }

    public function bicycle_status()
    {
        return $this->belongsTo('App\Bicycle_status');
    }

    public function reservation_items()
    {
        return $this->hasMany('App\Reservation_item');
    }


}

