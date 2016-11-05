<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StreetAddress extends Model
{
    protected $table = 'street_addresses';
	public $timestamps = false;

    public function address()
    {
    	return $this->belongsTo("App\Address","address_id","id");
    }
}
