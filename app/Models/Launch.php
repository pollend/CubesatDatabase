<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Launch extends Model
{
	public function launchVehicles()
	{
		 return $this->belongsTo("App\Models\LaunchVehicle","launch_vehicle_id","id");
	}
}
