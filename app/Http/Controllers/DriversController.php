<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;


class DriversController extends Controller
{
    public function drivers(Request $request){
        if ($request->session()->has('users')) {
        return view ('pages.drivers');
        }
        else{
            return view('Auth.login');
        }
    }


    public function add_drivers(Request $request){
       
        
        $client = resolve('elections.client');
        $response = $client->request('POST', 'Drivers/PostDrivers',
        
        [
            'headers'=>['content-type'=>'application/json'],
            'json' => [
                'name' => $request->txt_drivername,
                'agency_id'=> '1',
                'mobile'=>$request->driver_mobile,
                'address1'=>$request->txt_address1,
                'address2'=>$request->txt_address2,
                'nic'=>$request->driver_nic,
                'dri_licennce'=>$request->driver_license_no

                 ],
        ]
    
    );
     
        return response()->json('Successfully added');



    }
}
