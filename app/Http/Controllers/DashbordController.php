<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;


class DashboardController extends Controller

{

   public function dashboard(Request $request)
   {
   
      if ($request->session()->has('users')) {
         return view('pages.dashboard');
     }
      else {
         return view('Auth.login');
      }
   }
}
