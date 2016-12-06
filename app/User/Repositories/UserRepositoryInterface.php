<?php 

namespace App\User\Repositories;

use App\Core\Repositories\BaseRepositoryInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

interface UserRepositoryInterface extends BaseRepositoryInterface {
 	public function registerUser($name,$email,$password);
	public function login($email,$password);
}