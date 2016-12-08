<?php 

namespace App\User\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\User\Repositories\ProfileRepositoryInterface;
use App\User\Models\Profile;

use App\Services\ImageServiceInterface;
use Intervention\Image\Facades\Image as Image;
use App\User\Models\User;


class ProfileRepository extends BaseRepository implements ProfileRepositoryInterface
{
	
    private $imageService;

    public function __construct(ImageServiceInterface $imageService)
    {
        $this->imageService = $imageService;
        
    }

    public function getProfile(User $user)
    {
        return Profile::select("*")->where("user_id",$user->id)->firstOrFail();
    }

    public function saveProfileImage(Profile $profile,$image)
    {
        $image_result = Image::make($image)->resize(200, 200);        
        
        $new_image = $this->imageService->saveImage($image_result,"public/profile/img");
        $old_image = $profile->image()->first();
        $profile->image_id = $new_image->id;
        $profile->save();
        
        //delete old image
        if($old_image != null)
        {
            $this->imageService->removeImage($old_image);
        }
        return  $profile;
    }

    public function getProfileByUsername($username)
    {

        $user = User::select("*")->where("username",$username)->firstOrFail();
        return $user->profile()->firstOrFail();
    }


	 /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Profile::class;
    }


}