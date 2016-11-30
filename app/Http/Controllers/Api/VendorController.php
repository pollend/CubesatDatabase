<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models;

class VendorController extends Controller
{

    public function getVendors(Request $request)
    {
        return Models\Vendor::select('*')->get();
    }

}
