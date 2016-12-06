<?php
namespace App\Services;

/**
* 
*/
interface ImageServiceInterface
{
	public function saveImage($image,$path,$filename = null);
}