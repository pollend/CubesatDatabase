<?php 

namespace App\User\Repositories;

use App\Models\Profile;
use App\Models\User;
use Prettus\Repository\Eloquent\BaseRepository;
use App\User\Repositories\ProfileRepositoryInterface;

use App\Services\ImageServiceInterface;
use Intervention\Image\Facades\Image as Image;

class ProfileRepository extends BaseRepository implements ProfileRepositoryInterface
{
	
    private $imageService;

    /**
     * ProfileRepository constructor.
     * @param ImageServiceInterface $imageService
     */
    public function __construct(ImageServiceInterface $imageService)
    {
        $this->imageService = $imageService;
        
    }

    public function getProfile(User $user)
    {
        $profile = Profile::firstOrCreate(["user_id" => $user->id]);
        $profile->user_id = $user->id;
        return   $profile;
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