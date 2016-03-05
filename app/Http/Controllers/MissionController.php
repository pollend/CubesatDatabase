<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MissionController extends Controller
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
            case "objective":
                $column = "objective";
            break;
            default:
                $column = "name";
            break;
       }

        return \App\Mission::select('id','objective','wiki','name')->where(function($query) use ($request,$column)
        {
            if($request->has("search"))
            {
                $query->where($column,"LIKE","%".$request->input("search")."%");
            }

        })->paginate(15)->appends([]);
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
        return \App\Mission::where("id","=",$id)->firstOrFail();
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
        $missions = $this->index($request);
        return view('database_list.mission',["missions" => $missions]);
    }

    public function single($id)
    {
        $mission = $this->show($id);
         return view('database_view.mission',['id' =>$id,'sat' => $mission]);
    }
    public function modify($id)
    {
        $mission = $this->show($id);
        return view('database_view.mission',['id' =>$id,'sat' => $mission]);
    }
    public function history($id)
    {
        $mission = $this->show($id);
       return view('database_view.mission',['id' =>$id,'sat' => $mission]);
    }

}
