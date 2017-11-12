<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';

	protected $fillable = [
		'id_person', 'rut_person', 'name_person', 'last_name_person', 'birth_date_person', 'phone_person', 'address_person',
	];


     public function users()
    {
        return $this->hasMany('App\User');
    }

}

