<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

	protected $fillable = ['id_category', 'desc_category', 'status_category', 'slug_category'];

	public $timestamps = false;
    

     public function stores()
    {
        return $this->belongsToMany('App\Store');
    }


}

