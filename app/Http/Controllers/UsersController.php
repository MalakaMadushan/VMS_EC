<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class UsersController extends Controller
{
    public function users(Request $request){
        if ($request->session()->has('users')) {
        return view ('pages.users');
        }
        else{
            return view('Auth.login');
        }
    }
}
