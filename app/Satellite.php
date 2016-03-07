<?php

namespace App;

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
   		return $this->belongsToMany('App\Component', 'satellite_component');
   	}
    protected $appends = ['url','component'];
}
