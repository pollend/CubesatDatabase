<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SatelliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       return \App\Satellite::select('id','name','COSPAR','status','tle','orbit')->where(function($query) use ($request)
        {
            if($request->has("search"))
            {
                if($request->has("column"))
                {
                   $query->where($request->input("column"),"LIKE","%".$request->input("search")."%");

                }
                else
                {
                    $query->where("name","LIKE","%".$request->input("search")."%");
                }
            }
            if($request->has("status"))
            {
                 $query->where("status",$request->input("status"));
            }
        })->paginate(15)->toArray();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return \App\Satellite::where("id","=",$id)->firstOrFail()->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function home(Request $request)
    {
        return view('database_list.satellite');
    }

    public function single($id)
    {
         return view('database_view.satellite',['page' => 'single','id' => $id]);
    }
    public function modify($id)
    {
        return view('database_view.satellite',['page' => 'modify','id' => $id]);
    }
    public function history($id)
    {
       return view('database_view.satellite',['page' => 'history','id' => $id]);
    }

    
}
