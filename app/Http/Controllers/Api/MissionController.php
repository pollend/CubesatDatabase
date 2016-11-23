<?php

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models;

class MissionController extends Controller
{


    public function postMissions(Request $request)
    {
        return Models\MissionFlat::select('*')->paginate(15);
    }

    


    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index(Request $request)
    // {

    //     $column = "";
    //    switch ($request->input("column")) {
    //         case "name":
    //             $column = "name";
    //         break;
    //         case "objective":
    //             $column = "objective";
    //         break;
    //         default:
    //             $column = "name";
    //         break;
    //    }

    //     return \App\Mission::select('id','objective','wiki','name')->where(function($query) use ($request,$column)
    //     {
    //         if($request->has("search"))
    //         {
    //             $query->where($column,"LIKE","%".$request->input("search")."%");
    //         }

    //     })->paginate(15)->appends([
    //     "column" => $column , 
    //     "search"=> $request->input("search")]);
    // }


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
       return \App\Mission::where("id","=",$id)->firstOrFail();
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



    
}
