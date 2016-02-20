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
        return view('list.satellite');
    }

    public function single($id)
    {
        # code...
    }
    public function modify($id)
    {
        # code...
    }
    public function history($id)
    {
        # code...
    }
}
