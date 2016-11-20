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

        $column = "";
       switch ($request->input("column")) {
            case "organization":
                $column = "name";
            break;
            case "mission":
                $column = "orbit";
            break;
            case "name":
                $column = "tle";
            break;
            case "type":
                $column = "satellite_types.name";
            break;
            case "launchVehicle":
                $column = "satellite_types.name";
            break;
            default:
                $column = "name";
            break;
       }



       // return Models\Satellite::select(
       //  "missions.name as mission_name",
       //  "organizations.id as organization_id",
       //  "organizations.name as organization_name",
       //  "satellite_types.name as satellite_type",
       //  "satellites.created_at",
       //  "satellites.updated_at",
       //  "satellites.name",
       //  "satellites.COSPAR",
       //  "satellites.wiki",
       //  "satellites.mass",
       //  "satellites.id",
       //  "satellites.mission_id",
       //  "satellites.satellite_type_id",
       //  "satellites.orbit_id",
       //  "satellites.launch_id",
       //  "launches.launch_date",
       //  "launch_vehicles.name as launch_vehicle")->
       // leftJoin("missions","satellites.mission_id","=","missions.id")->
       // leftJoin("organizations","missions.organization_id","=","organizations.id")->
       // leftjoin("satellite_types","satellites.satellite_type_id","=","satellite_types.id")->
       // leftJoin("launches","satellites.launch_id", "=","launches.id")->
       // leftJoin("launch_vehicles","launches.launch_vehicle_id", "=","launch_vehicles.id")->
       // where(function($query) use ($request , $column)
       //  {
       //      if($request->has("search"))
       //      {
       //          $query->where($column,"LIKE","%".$request->input("search")."%");
       //      }
       //  })->paginate($request->input("count",15));
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
