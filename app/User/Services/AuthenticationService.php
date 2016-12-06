<?php

namespace App\User\Services;

use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\User\Repositories\UserRepositoryInterface;
use App\User\Repositories\ProfileRepositoryInterface;
use App\User\Repositories\Profile;


use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

use App\User\Services\AuthenticationServiceInterface;

/**
* 
*/
class AuthenticationService implements AuthenticationServiceInterface
{

	protected $profileRepsoitory;
	protected $userRepository;

	public function __construct(UserRepositoryInterface $userRepository, ProfileRepositoryInterface $profileRepsoitory)
	{
		$this->profileRepsoitory = $profileRepsoitory; 
		$this->userRepository = $userRepository; 
	}

	public function getUser($token)
	{
		return JWTAuth::toUser($token);
	}

	public function getToken($user)
	{
		return JWTAuth::fromUser($user);
	}

	public function authenticate()
	{
		return JWTAuth::parseToken()->authenticate();
	}


}