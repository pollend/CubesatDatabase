<?php
namespace App\Services;

use Intervention\Image\Image as InterventionImage;


use App\Models\Image;
/**
* 
*/
interface ImageServiceInterface
{
	public function saveImage(InterventionImage $image,$path,$filename = null);
	
	public function removeImage(Image $image);
	
	public function getImageResponse(Image $image);
}