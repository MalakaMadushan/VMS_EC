<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Session;

class RequestController extends Controller
{
    public function request(Request $request)
    {
        // $tbl=array('id'=>43,'datetime'=>2015-05-14,'user_id'=>153,'branch_id'=>14);
        // $out = array_values($tbl);
        // $ff=json_encode($out);
        // dd($ff);

        $client = resolve('elections.client');
        $responsebranch= $client -> request('GET','branch/GetAll');

        $statuscodebranch=$responsebranch->getStatusCode();
        $bodybranch=$responsebranch->getBody()->getContents();

        $Databranch=json_decode($bodybranch);

        if ($request->session()->has('users')) {
        return view('pages.request')->with('Data',$Databranch);
        }
        else{
            return view('Auth.login');
        }
    }

    public function submitrequest(Request $request){
        //console.log("controll ok");
        // $tbl["id"]=5;
        // $tbl["datetime"]="$request->'dt_apply_date'";
        // $tbl["user_id"]=5;
        // $tbl["branch_id"]="$request->'op_req_branch'";

        //$tbl=array('id'=>1114,'datetime'=>2015-05-18,'user_id'=>1111,'branch_id'=>1111);
        //$out = array_values($tbl);
        //$jason=json_encode($tbl);
    
        $client = resolve('elections.client');
        $response = $client->request('POST', 'request/PostRequest',
        
        [
            'headers'=>['content-type'=>'application/json'],
            'json' => [
                'datetime' => $request->dt_apply_date,
                'user_id' => '101',
                'branch_id' => $request->op_req_branch
                
            ],
        ]
    
    );

    //get max id from request table call for max id end point in api----------------------------

    $responsemaxid=$client->request('GET','request/GetrequestMaxId');
    $statuscodemaxid=$responsemaxid->getStatusCode();
    $bodymaxid=$responsemaxid->getBody()->getContents();

    $Datamaxid=json_decode($bodymaxid);
    
    //call for post requestDetails end point in api to post request details to details table------------------------------------------
    $response2=$client->request('POST','request/PostRequestDetails',
    
            [
                'headers'=>['content-type'=>'application/json'],
                'json'=>[
                    'req_id'=>$Datamaxid[0]->id,
                    'need_datetime'=>$request->dt_req_date,
                    'location'=>$request->txt_destination,
                    'duration'=>$request->op_req_duration,
                    'duty'=>$request->txta_duty,
                ],
            ]
        );


        //send every entered request to response table using tb_request max_id with default pending status-----------------------------
        $response3=$client->request('POST','Responce/PostResponceDefault',
    
            [
                'headers'=>['content-type'=>'application/json'],
                'json'=>[
                    'req_id'=>$Datamaxid[0]->id,
                    'status'=>'Pending',
                    // 'driver_id'=>,
                    // 'vehicle_id'=>,
                    
                ],
            ]
        );

       

        return response()->json('Successfully added');
    }

    



}
