<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    public function streetAddresses()
    {
        return $this->hasMany('App\StreetAddress',"address_id","id");
    }
}
