<?php 

namespace App\User\Repositories;


use App\Core\Repositories\BaseRepositoryInterface;
use Prettus\Repository\Contracts\RepositoryInterface;
use App\User\Models\Profile;

interface ProfileRepositoryInterface extends BaseRepositoryInterface {
	public function getProfile($user);
	public function saveProfileImage(Profile $profile,$image);
}