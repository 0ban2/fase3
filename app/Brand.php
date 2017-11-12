<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';

	protected $fillable = [
		'id_brand', 'name_brand',
	];

	public $timestamps = false;
    

    public function models()
    {
        return $this->hasMany('App\Model');
    }

}

