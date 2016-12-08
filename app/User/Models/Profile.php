<?php

namespace App\User\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Image;
use App\User\Models\User;

class Profile extends Model
{


    public function getProfileImageAttribute()
    {
    	$user =  $this->user()->first();
        $image = $this->image()->first();
        if($image)
            return $this->attributes['profile_image'] =  url("/api/v1/profile/". $user->username . "/image/" . $image->image_name);
    
    }

    public function image()
    {
      return $this->hasOne(Image::class,"id","image_id");
    }

    public function user()
    {
        return $this->hasOne(User::class,"id","user_id");
    }

   protected $fillable = [
        'name',
        'bio',
        'company'
    ];


    protected $appends = ['profile_image']; 

}
