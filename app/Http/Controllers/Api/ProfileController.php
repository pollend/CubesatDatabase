<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.authenticate',['except' => ['postRetrieveProfileImage']]);
    }

	public function postProfileImage(Request $request,$user)
    {
    	return $request->file('file')->store("public/img/avatar");
	}

}