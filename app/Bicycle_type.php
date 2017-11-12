<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bicycle_type extends Model
{
    protected $table = 'bicycle_types';

	protected $fillable = [
		'id_bt', 'desc_bt',
	];

	public $timestamps = false;
    

  	public function bicycles()
    {
        return $this->hasMany('App\Bicycle');
    }

}

