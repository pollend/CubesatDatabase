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

       $column = "";
       switch ($request->input("column")) {
            case "name":
                $column = "name";
            break;
            case "orbit":
                $column = "orbit";
            break;
            case "tle":
                $column = "tle";
            break;
            default:
                $column = "name";
            break;
       }

       return \App\Satellite::select('id','name','COSPAR','status','tle','orbit')->where(function($query) use ($request , $column)
        {
            if($request->has("search"))
            {
                $query->where($column,"LIKE","%".$request->input("search")."%");
            }
            if($request->has("status"))
            {
                 $query->where("status",$request->input("status"));
            }
        })->paginate(15)->appends(["column" => $column , "search"=> $request->input("search"), "status" => $request->input("status")]);

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
       return \App\Satellite::where("id","=",$id)->firstOrFail();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $satellite = $this->index($request);
        return view('database_list.satellite',["items" => $satellite]);
    }

    public function single($id)
    {
        $sat = $this->show($id);
         return view('database_view.satellite.single',['id' =>$id,'item' => $sat]);
    }

    public function modify($id)
    {
        $sat = $this->show($id);
         return view('database_view.satellite.modify',['id' =>$id,'item' => $sat]);
    }

    public function history($id)
    {
        $sat = $this->show($id);
       return view('database_view.satellite.history',['id' =>$id,'item' => $sat]);
    }

    
}
