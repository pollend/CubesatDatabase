<?php 

namespace App\User\Repositories;


use App\Core\Repositories\BaseRepositoryInterface;
use Prettus\Repository\Contracts\RepositoryInterface;
use App\User\Models\Profile;
use App\User\Models\User;

interface ProfileRepositoryInterface extends BaseRepositoryInterface {
	public function getProfile(User $user);
	public function saveProfileImage(Profile $profile,$image);
	public function getProfileByUsername($username);
    
}