<?php

namespace App\Services;

use Illuminate\Foundation\Auth\ThrottlesLogins;

use App\Models\Image;
use App\Services\ImageServiceInterface;

use App\Repositories\ImageRepositoryInterface;

use Illuminate\Support\Facades\Storage;

/**
* 
*/
class ImageService implements ImageServiceInterface
{
	protected $imageRepository;

	public function __construct(ImageRepositoryInterface $imageRepository){
		$this->imageRepository = $imageRepository;

	}

	public function saveImage($image,$path,$filename = null)
	{
		
		
		$source = $path  . substr(sha1(uniqid()),0,10) . ".png";
		var_dump($source);
		Storage::put($source, $image->encode('png')->stream());
		
		$image = $this->imageRepository->create(["source" => $source]);
		$image->save();
		return $image;
	}

}