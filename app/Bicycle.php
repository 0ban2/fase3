<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bicycle extends Model
{
    protected $table = 'bicycles';

	protected $fillable = [
		'id_bicycle', 'serie_bicycle', 'color_bicycle', 'price_bicycle', 'slug_bicycle', 'model_id', 'bt_id', 'store_id', 'bs_id',
 	];

	public $timestamps = false;
    

     public function stores()
    {
        return $this->belongsToMany('App\Store');
    }


}

