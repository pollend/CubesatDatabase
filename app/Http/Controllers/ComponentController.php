<?php

namespace App\Http\Controllers;

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
        return \App\Component::where("id","=",$id)->firstOrFail();
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
        $components = $this->index($request);
        return view('database_list.component',["components"=>$components]);
    }

    public function single($id)
    {
        $component = $this->show($id);
         return view('database_view.component',['component'=>$component,'controller' => "SpaceportController",'page' => 'single','id' => $id]);
    }
    public function modify($id)
    {
        $component = $this->show($id);
        return view('database_view.component',['component'=>$component,'controller' => "SpaceportController",'page' => 'modify','id' => $id]);
    }
    public function history($id)
    {
        $component = $this->show($id);
       return view('database_view.component',['component'=>$component,'controller' => "SpaceportController",'page' => 'history','id' => $id]);
    }
}
