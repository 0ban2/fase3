<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model extends Model
{
    protected $table = 'models';

	protected $fillable = [
		'id_model', 'desc_model', 'brand_id',
	];

	public $timestamps = false;
    

    public function brands()
    {
        return $this->belongsTo('App\Brand');
    }

    public function bicycles()
    {
        return $this->hasMany('App\Bicycle');
    }


}

