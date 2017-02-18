<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Launch extends Model
{
	public function launchVehicle()
	{
		 return $this->belongsTo( LaunchVehicle::class,"launch_vehicle_id","id");
	}
}
