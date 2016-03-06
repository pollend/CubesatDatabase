<?php

namespace App\Http\Controllers;

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
        return \App\Spaceport::where("id","=",$id)->firstOrFail();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $spaceport = $this->show($id);
        return view('database_view.spaceport',['item'=> $spaceport,'id' => $id]);
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
        $spaceports = $this->index($request);
        return view('database_list.spaceport',['spaceports' => $spaceports,]);
    }

    public function modify($id)
    {
        $sat = $this->show($id);
         return view('database_view.spaceport.modify',['id' =>$id,'item' => $sat]);
    }

    public function single($id)
    {
        
        $spaceport = $this->show($id);
         return view('database_view.spaceport.single',['item'=> $spaceport,'id' => $id]);
    }

    public function history($id)
    {
        $spaceport = $this->show($id);
       return view('database_view.spaceport.history',['item'=> $spaceport,'id' => $id]);
    }

}
