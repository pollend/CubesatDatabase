<?php 

namespace App\User\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\User\Repositories\ProfileRepositoryInterface;
use App\User\Models\Profile;

use App\Services\ImageServiceInterface;
use Intervention\Image\Facades\Image as Image;


class ProfileRepository extends BaseRepository implements ProfileRepositoryInterface
{
	
    private $imageService;

    public function __construct(ImageServiceInterface $imageService)
    {
        $this->imageService = $imageService;
        
    }


    public function getProfile($user)
    {
        return Profile::select("*")->where("user_id",$user->id)->first();
    }

    public function saveProfileImage(Profile $profile,$image)
    {
        $image_result = Image::make($image)->resize(200, 200);        
        
        $model = $this->imageService->saveImage($image_result,"public/profile/img");
        $profile->image_id = $model->id;
        $profile->save();
        return  $profile;
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