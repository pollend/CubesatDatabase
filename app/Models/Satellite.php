<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Satellite extends Model
{
	use \Venturecraft\Revisionable\RevisionableTrait;

	protected $revisionEnabled = true;
    protected $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)
    protected $historyLimit = 500; //Maintain a maximum of 500 changes at any point of time, while cleaning up old revisions.

    public function getUrlAttribute()
    {
        return $this->attributes['url'] = url("/api/satellite/".$this->attributes['id']);
    }

    public function getComponentAttribute()
    {
        return $this->attributes['component'] = $this->components;
    }


   	public function components()
   	{
   		return $this->belongsToMany('App\Models\Component');
   	}

    public function type()
    {
      return $this->belongsTo("App\Models\SatelliteType","satellite_type_id","id");
    }

    public function orbit()
    {
      return $this->belongsTo("App\Models\Orbit","orbit_id","id");
    }

    public function mission()
    {
      return $this->belongsTo("App\Models\Mission","mission_id","id");
    }

    public function launch()
    {
      return $this->belongsTo("App\Models\Mission","launch_id","id");
    }


    protected $appends = ['url','component'];
}
