<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;


class DashboardController extends Controller

{

   public function dashboard(Request $request)
   {
   
      $client = resolve('elections.client');
      $responseRequest = $client->request('GET','request/Getrequest');
      
       $statusCoderequest = $responseRequest->getStatusCode();
       $bodyrequest = $responseRequest->getBody()->getContents();
       
       $Datarequest = json_decode($bodyrequest);

      // dd($Datarequest);
       if ($request->session()->has('users')) {
       return view('pages.dashboard')->with('Data',$Datarequest);
       }
       else{
           return view('Auth.login');
       }
     
   }
}
