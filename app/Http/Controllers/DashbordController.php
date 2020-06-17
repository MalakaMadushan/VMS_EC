<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;


class DashboardController extends Controller

{

   public function dashboard_load()
   {
      
      $value = session()->get('users');
      $value2=$value[0]->id;
     // dd($value2);

      $client = resolve('elections.client');
      $responseRequest = $client->request('GET','request/GetRequestDetailsBySessionUserId/'.$value2);
      
       $statusCoderequest = $responseRequest->getStatusCode();
       $bodyrequest = $responseRequest->getBody()->getContents();
       
       $data = json_decode($bodyrequest);
       return response()->json($data);
     
   }

   public function dashboard()
   {
      
      $value = session()->get('users');
      $value2=$value[0]->id;
     // dd($value2);

      // dd($Datarequest);
       if (session()->has('users')) {
       return view('pages.dashboard');
       }
       else{
           return view('Auth.login');
       }
     
   }

   public function responcedetails_view(Request $request){
      //alert("controller okk");
      //console.log("controller ok");
       $client = resolve('elections.client');
       $resbyid= $client -> request('GET','Responce/GetResponceDetailsById/'.$request->responce_id);

       $statuscode=$resbyid->getStatusCode();
       $bodyres=$resbyid->getBody()->getContents();

       $Datares=json_decode($bodyres);

      // $Databranch="okkkkkkkkkkkkkk";

       return response()->json($Datares);



   }



}
