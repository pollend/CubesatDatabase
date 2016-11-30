<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      return \App\Component::select('id','formal_specification')->where(function($query) use ($request)
        {
            if($request->has("search"))
            {
               $query->where("formal_specification","LIKE","%".$request->input("search")."%");
            }

        })->paginate(15)->appends(["search" => $request->input("search")]);
    }

 
}
