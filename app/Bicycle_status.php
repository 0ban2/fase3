<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bicycle_status extends Model
{
    protected $table = 'bicycle_status';

	protected $fillable = [
		'id_bs', 'desc_bs',
	];

	public $timestamps = false;
    

    public function bicycles()
    {
        return $this->hasMany('App\Bicycle');
    }


}

