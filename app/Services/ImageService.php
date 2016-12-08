<?php

namespace App\Services;

use Illuminate\Foundation\Auth\ThrottlesLogins;

use App\Models\Image;
use App\Services\ImageServiceInterface;

use App\Repositories\ImageRepositoryInterface;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Image as InterventionImage;

use Intervention\Image\Facades\Image as InterventionImageFacade;

/**
* 
*/
class ImageService implements ImageServiceInterface
{
	protected $imageRepository;

	public function __construct(ImageRepositoryInterface $imageRepository){
		$this->imageRepository = $imageRepository;

	}

	public function saveImage(InterventionImage $image,$path,$filename = null)
	{
		
		$name_key = substr(sha1(uniqid()),0,10) . ".png";

		$source = $path  . $name_key;
		if(!Storage::put($source, $image->encode('png')->stream()))
			return null;
		if($filename == null)
			$filename = $name_key;

		$image = $this->imageRepository->create(["source" => $source,"image_name" => $filename]);
		$image->save();
		return $image;
	}

	public function removeImage(Image $image)
	{
		Storage::delete($image->source);
		$image->delete();
	}

	public function getImageResponse(Image $image)
	{
		$image = Storage::get($image->source);
		return InterventionImageFacade::make($image)->response();
	}

}