<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaunchVehicle extends Model
{

	public function launches()
	{
		return $this->hasMany(Launch::class,"launch_vehicle_id","id");
	}
}
