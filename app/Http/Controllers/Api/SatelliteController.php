<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SatelliteModifyRequest;


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

    public function postEditSatellite(SatelliteModifyRequest $request,$id,$user)
    {
        DB::beginTransaction();

        $satellite = Models\Satellite::select("*")->where('id','=',$id)->firstOrFail();

        //TODO: user logic 

        $satellite->COSPAR = $request->input("COSPAR");
        $satellite->content = $request->input("content");
        $satellite->mass = $request->input("mass");
        $satellite->orbit->orbit = $request->input("orbit");
        $satellite->orbit->tle = $request->input("tle");


        try {
            if($request->input("cubesat_type") != "")
            {
                $satellite_type = Models\SatelliteType::firstOrCreate(["name" => $request->input("cubesat_type")]);;
                $satellite->satellite_type_id = $satellite_type->id;
            }


            $launch = $satellite->launch();        
            $launch->launch_date = $request->input("launch_date");
            
            
            if($request->input("launch_vehicle") != "")
            {
                $launch_vehicle = Models\LaunchVehicle::firstOrCreate(["name" => $request->input("launch_vehicle")]);
                $launch->launch_vehicle_id = $launch_vehicle->id;
            }
            $satellite->save();
            
            
        }
        catch (\Exception $e) {
            DB::rollback();
            // something went wrong

             throw $e;
        }
        DB::commit();
        return response()->json(['result' => "success"]);
    }


    public function getSatellitesByOrganization(Request $request, $id)
    {
       return Models\SatelliteFlat::select("*")->where("organization_id", "=",$id)->paginate(15);
    }

    public function getSatellite(Request $request,$id)
    {
        $satellite = Models\Satellite::select("*")->where('id', '=',$id)->firstOrFail();
        $satellite["mission"] = $satellite->mission()->first();
        if($satellite["mission"] != null)
        {
            $satellite["mission"]["organization"] =  $satellite["mission"]->organization()->first();
        }
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

    

    public function postLaunchVehcile(Request $request)
    {
        $result = [];
        $result["results"] =  Models\LaunchVehicle::select("name")->where('name','LIKE',"%".$request->input("search","")."%")->limit(15)->get();
        return $result;
    }   


    public function postSatelliteType(Request $request)
    {
        $result = [];
        $result["results"] = Models\SatelliteType::select("name")->where('name','LIKE',"%".$request->input("search","")."%")->limit(15)->get();
        return $result;
    }
    
}
