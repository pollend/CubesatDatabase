<?php 

namespace App\User\Repositories;

use App\Core\Repositories\BaseRepository;
use App\User\Repositories\UserRepositoryInterface;
use App\User\Models\User;
use App\User\Models\Profile;


use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;



use Illuminate\Support\Facades\Hash;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct()
    {
        
    }


	public function registerUser($name,$email,$password)
	{
        $user = new User();
        $profile = new Profile();

        $user->username = $name;
        $user->email = $email;
        $user->password =  Hash::make($password);
        $user->save();

        $profile->user_id = $user->id;
        $profile->save();
        
        return $user;

	}

    public function login($email,$password)
    {
        $user =  User::select("*")->where('email',$email)->firstOrFail();
        if(Hash::check($password,$user->password))
        {
            return $user;
        }
        return null;
    }

    public function isPasswordValid(User $user,$password)
    {
        if(Hash::check($password,$user->password))
        {
            return true;
        }
        return false;
    }

    public function updatePassword(User $user, $password)
    {
        $user->password = Hash::make($password);
        return $user->save();
    }



	 /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return User::class;
    }
}