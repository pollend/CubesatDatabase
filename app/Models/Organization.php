<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
	public function missions()
	{
		return $this->hasMany('App\Mission', 'organization_id','id');
	}

}
