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
use App\Services\ImageServiceInterface;
use App\Repositories\ImageRepositoryInterface;
use App\User\Http\Requests\ChangePasswordRequest;

class ProfileController extends Controller
{

  protected $profileRepository;
  protected $userRepository;
  protected $imageService;

   public function __construct(ProfileRepositoryInterface $profileRepository,UserRepositoryInterface $userRepository, ImageServiceInterface $imageService)
   {
        $this->profileRepository = $profileRepository;
        $this->userRepository = $userRepository;
        $this->imageService = $imageService;
   }

    public function postProfileImage(Request $request,$user)
    {

      $profile = $this->profileRepository->getProfile($user);
      return $this->profileRepository->saveProfileImage($profile,$request->file('file'));
      
    }


    public function getProfileImage(Request $request,$username,$hash)
    {
        $profile = $this->profileRepository->getProfileByUsername($username);
        $image = $profile->image()->where("image_name","=",$hash)->firstOrFail();

        return $this->imageService->getImageResponse($image);
    }

    public function getProfile(Request $request,$username)
    {
      $profile = $this->profileRepository->getProfileByUsername($username);
      return $profile;  
    }

    public function postProfile(Request $request,$user)
    {
       $profile = $this->profileRepository->getProfile($user);
       $profile->update( $request->only(['name','bio','company']));
       $profile->save();
       return $profile;
    }


    public function postUpdatePassword(ChangePasswordRequest $request, $user)
    {


        if($this->userRepository->isPasswordValid($user,$request->input("old_password")))
        {
          $this->userRepository->updatePassword($user,$request->input("password"));

        }
        else
        {
            return response()->json(['error' => ['invalid_credentials']], 401);
        }


        return Response::json();


    }

}
