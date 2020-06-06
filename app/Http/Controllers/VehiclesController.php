<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    public function vehicle(){
        return view ('pages.vehicles');
    }
}
