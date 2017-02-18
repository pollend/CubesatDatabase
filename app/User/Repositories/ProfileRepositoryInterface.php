<?php 

namespace App\User\Repositories;


use App\Core\Repositories\BaseRepositoryInterface;
use App\Models\Profile;
use App\Models\User;
use Prettus\Repository\Contracts\RepositoryInterface;

interface ProfileRepositoryInterface extends BaseRepositoryInterface {
	public function getProfile(User $user);
	public function saveProfileImage(Profile $profile,$image);
	public function getProfileByUsername($username);
    
}