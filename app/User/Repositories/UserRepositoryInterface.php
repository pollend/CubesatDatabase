<?php 

namespace App\User\Repositories;

use App\Core\Repositories\BaseRepositoryInterface;
use App\Models\User;
use Prettus\Repository\Contracts\RepositoryInterface;

interface UserRepositoryInterface extends BaseRepositoryInterface {
 	public function registerUser($name,$email,$password);
	public function login($email,$password);
    public function isPasswordValid(User $user,$password);
    public function updatePassword(User $user, $password);
}