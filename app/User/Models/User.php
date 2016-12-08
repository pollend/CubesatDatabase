<?php

namespace App\User\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User\Models\Profile;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function profile()
    {
      return $this->hasOne(Profile::class,"user_id","id");
    }
}
