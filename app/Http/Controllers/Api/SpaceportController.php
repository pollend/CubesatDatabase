<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SpaceportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return \App\Spaceport::select('id','latlong','url_website','url_googlemap','address1','address2','name','state','country','city','zip')->where(function($query) use ($request)
        {
            if($request->has("search"))
            {
               $query->where("name","LIKE","%".$request->input("search")."%");
            }

        })->paginate(15)->appends(["search" => $request->input("search")]);

    }

}
