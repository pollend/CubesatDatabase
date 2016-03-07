<?php

namespace App\Http\Controllers\Api;

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
        $number_entires  =$request->input("num_entires",100);
        $offset  =$request->input("offset",0);
        $response =[];
        $satellites =  \App\Satellite::select('updated_at','created_at','id','name','COSPAR','status','tle','orbit')->limit($number_entires)->offset($offset*$number_entires)->get();
        foreach ($satellites as $satellite) {
           $response[] =
           [
                "id" => $satellite->id,
                "updated_at" => $satellite->updated_at->toDateTimeString(),
                "created_at" => $satellite->created_at->toDateTimeString(),
                "name" => $satellite->name,
                "COSPAR" => $satellite->COSPAR,
                "status" => $satellite->status,
                "tle" => $satellite->tle,
                "orbit" => $satellite->orbit
           ];
        }
        return $response;
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
       return \App\Satellite::where("id","=",$id)->firstOrFail();
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
