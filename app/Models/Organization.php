<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
	public function missions()
	{
		return $this->hasMany('App\Models\Mission', 'organization_id','id');
	}

}
