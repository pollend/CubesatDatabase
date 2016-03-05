<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;
use Illuminate\Support\Facades\Route;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(Route $route) {
    	$currentRouteaction = Route::currentRouteAction();

    	list($controllerPath,$action) = explode("@", $currentRouteaction);
    	
    	$control = explode("\\", $controllerPath);

    	View::Share("currentController",end($control));
    	View::Share("currentAction",$action);

    }
}
