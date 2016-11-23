<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models;
use Illuminate\Support\Facades\DB;

class SatelliteController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postSatellites(Request $request)
    {

        if($request->has('search_entry'))
        {
           return Models\SatelliteFlat::select("*")->where(function($query) use ($request )
            {
              foreach ($request->input("search_entry") as $entry) {
                if($entry["search"] && $entry["column"] )
                {
                    if($entry['search_type'] == "Contains")
                    {
                      $query->where($entry["column"],"LIKE","%".$entry["search"]."%");
                    }
                    else
                    {
                      $query->where($entry["column"],"=",$entry["search"]);
                    }
                    
                }
              }
            })->paginate($request->input("count",15));
        }
        else
        {
            return Models\SatelliteFlat::select("*")->where(function($query) use ($request)
            {
                if($request->has("search") &&  $request->has("column"))
                {
                    $query->where($request->input("column"),"LIKE","%".$request->input("search")."%");
                }
            })->paginate($request->input("count",15));
        }
    }

    public function getSatellitesByOrganization(Request $request, $id)
    {
       return Models\SatelliteFlat::select("*")->where("organization_id", "=",$id)->paginate(15);
    }

    public function postSatellite(Request $request,$id)
    {
        $satellite = Models\Satellite::select("*")->where('id', '=',$id)->firstOrFail();
        $satellite["mission"] = $satellite->mission()->first();
        $satellite["type"] = $satellite->type()->first();
        $satellite["orbit"] = $satellite->orbit()->first();
        
        $launch = $satellite->launch()->first();
        if($launch != null)
        {
            $satellite["launch"] = $launch;
            $satellite["launch"]["vehicle"] = $launch->launchVehicle()->first(); 
        }
        return $satellite;
    }

    public function getSatellitesAssignedToMission(Request $request,$mission_id)
    {
      
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
