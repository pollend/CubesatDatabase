<?php

namespace App\User\Http\Controllers;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Lang;

use App\User\Repositories\UserRepositoryInterface;
use App\User\Repositories\ProfileRepositoryInterface;


class ProfileController extends Controller
{

  protected $profileRepository;
  protected $userRepository;

   public function __construct(ProfileRepositoryInterface $profileRepository,UserRepositoryInterface $userRepository)
   {
        $this->profileRepository = $profileRepository;
        $this->userRepository = $userRepository;

   }

    public function postProfile(Request $request,$user)
    {
       $profile = $this->profileRepository->getProfile($user);



    }

    public function postProfileImage(Request $request,$user)
    {

      $profile = $this->profileRepository->getProfile($user);
      return $this->profileRepository->saveProfileImage($profile,$request->file('file'));
        
    }


    public function getProfileImage(Request $request,$username)
    {
        
    }

    public function getProfile(Request $request,$username)
    {

    }

}
