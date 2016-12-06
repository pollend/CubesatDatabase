<?php 

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\ImageRepositoryInterface;
use App\Models\Image;

class ImageRepository extends BaseRepository implements ImageRepositoryInterface
{

    function model()
    {
        return Image::class;
    }


}