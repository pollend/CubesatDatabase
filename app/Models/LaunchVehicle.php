<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaunchVehicle extends Model
{

	public function launches()
	{
		return $this->hasMany("App\Launch","launch_vehicle_id","id");
	}
}
