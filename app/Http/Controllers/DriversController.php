<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriversController extends Controller
{
    public function drivers(){
        return view ('pages.drivers');
    }
}
