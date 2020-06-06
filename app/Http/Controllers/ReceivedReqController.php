<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
//use Redirect,Response;
//use Session;

class RecievedReqController extends Controller
{
    public function recievedreq(){
        //$client=new \GuzzleHttp\Client();
        //$responseDist = $client->get('http://192.168.1.110:8081/api/ADdistrict/Get');

       $client = resolve('elections.client');
       $responseDist = $client->request('GET','request/Getrequest');
       
        $statusCodeDist = $responseDist->getStatusCode();
        $bodyDist = $responseDist->getBody()->getContents();
        
        $DataDist = json_decode($bodyDist);
        // dd($DataDist);
        
        return view('pages.recievedrequest')->with('Data',$DataDist);
        
        

        
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
}
