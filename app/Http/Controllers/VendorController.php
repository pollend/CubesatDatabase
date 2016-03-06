<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class VendorController extends Controller
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
            case "type":
                $column = "orbit";
            break;
            default:
                $column = "name";
            break;
       }

        return \App\Vendor::select('id','name','vendor_website','contact_info','type')->where(function($query) use ($request,$column)
        {
            if($request->has("search"))
            {
               $query->where($column,"LIKE","%".$request->input("search")."%");
            }

        })->paginate(15)->appends(["column" => $column,"search" => $request->input("search")]);
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
       return \App\Vendor::where("id","=",$id)->firstOrFail();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendor = $this->show($id);
        return view('database_view.vendor',['item'=> $vendor,'id' => $id]);
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
        $vendors = $this->index($request);
        return view('database_list.vendor',["vendors"=>$vendors]);
    }

    public function modify($id)
    {
        $sat = $this->show($id);
         return view('database_view.vendor.modify',['id' =>$id,'item' => $sat]);
    }

    public function single($id)
    {
        
        $vendor = $this->show($id);
         return view('database_view.vendor.single',['item'=> $vendor,'id' => $id]);
    }

    public function history($id)
    {
        $vendor = $this->show($id);
       return view('database_view.vendor.history',['item'=> $vendor,'id' => $id]);
    }
}
