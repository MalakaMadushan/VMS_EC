<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
//use Redirect,Response;
use Session;

class RecievedReqController extends Controller
{
    public function recievedreq(Request $request){
        //$client=new \GuzzleHttp\Client();
        //$responseDist = $client->get('http://192.168.1.110:8081/api/ADdistrict/Get');

       $client = resolve('elections.client');
       $responseDist = $client->request('GET','request/Getrequest');
       
        $statusCodeDist = $responseDist->getStatusCode();
        $bodyDist = $responseDist->getBody()->getContents();
        
        $DataDist = json_decode($bodyDist);
        // dd($DataDist);
        if ($request->session()->has('users')) {
        return view('pages.recievedrequest')->with('Data',$DataDist);
        }
        else{
            return view('Auth.login');
        }
        
        

        
    }

    // public function reqdatatable(){

    // }

    public function view_request(Request $request)
    {
       
        
        // $client = resolve('elections.client');
        // $response = $client->request('GET','ADdistrict/Get');
    	// $statusCode = $response->getStatusCode();
        // $body = $response->getBody()->getContents();
        // $data = json_decode($body);
        // return response()->json($data);
   
    }

     //Data load to the model--------------------------------------------------------
     public function requestdetails_view(Request $request){

        // console.log("controller ok");
         $client = resolve('elections.client');
         $responsebranch= $client -> request('GET','request/GetRequestDetailsByReqId/'.$request->m_id);
         $statuscodebranch=$responsebranch->getStatusCode();
         $bodybranch=$responsebranch->getBody()->getContents();
         $Databranch=json_decode($bodybranch);
 
        // $Databranch="okkkkkkkkkkkkkk";

    
//------------------------------get drivers names to model for approved process---------------------------------
        // $driversname=$client->request('GET','Drivers/GetNameAndID');
        // $statuscode=$driversname->getStatusCode();
        // $bodydriversname=$driversname->getBody()->getContents();
        // $Datadriversname=json_decode($bodydriversname);
         //alert("controller okk");

         return response()->json($Databranch);

        //  return response::json(array(
        //     'reD' => $Databranch,
        //     'dri' => $Datadriversname,
            
        // ));
     }
 
}
