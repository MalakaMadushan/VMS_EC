<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function agency(){
        return view ('pages.agency');
    }
}
