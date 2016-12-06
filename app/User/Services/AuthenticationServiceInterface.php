<?php
namespace App\User\Services;

/**
* 
*/
interface AuthenticationServiceInterface
{

	public function getUser($token);
	public function getToken($user);
	public function authenticate();
}