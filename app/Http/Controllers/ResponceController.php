<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ResponceController extends Controller
{
    public function add_responce(Request $request){

        //dd($request->m_id);

        $client = resolve('elections.client');
        $response = $client->request('PUT', 'Responce/PutStatus',
        
        [
            'headers'=>['content-type'=>'application/json'],
            'json' => [
                'req_id' => $request->m_id,
                'status' => 'Approved',
                'driver_id' => $request->driver,
                'vehicle_id' => $request->vehicle,
                'reason'=>''
            ],
        ]
    
    );

    return response()->json('Successfully added');
    }

public function update_responce_as_notapproved(Request $request){


    $client = resolve('elections.client');
    $response = $client->request('PUT', 'Responce/PutStatus',
    
    [
        'headers'=>['content-type'=>'application/json'],
        'json' => [
            'req_id' => $request->m_id,
            'status' => 'Rejected',
            'reason'=>$request->reason
            
        ],
    ]

);

return response()->json('Successfully added');

}


}
