<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    public function streetAddresses()
    {
        return $this->hasMany(StreetAddress::class,"address_id","id");
    }
}
