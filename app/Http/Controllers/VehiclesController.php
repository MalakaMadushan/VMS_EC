<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class VehiclesController extends Controller
{
    public function vehicle(){
        return view ('pages.vehicles');
    }

    public function addvehicles(Request $request){

        // $dddd=$request->vehi_reg_no;
        // dd($dddd);
        // console.log("working");

        $client = resolve('elections.client');
        $response = $client->request('POST', 'Vehicle/PostVehicles',

        [
            'headers'=>['content-type'=>'application/json'],
            'json' => [
                'reg_no' => $request->vehi_reg_no,
                'vehi_type'=>$request->op_vehi_type,
                'fuel_type'=>$request->op_fuel_type,
                'agency_id'=>'1',
                'chassis_no'=>$request->vehi_chassis_no,
                'vehi_model'=>$request->vehi_model,
                'vehi_name'=>$request->vehi_name,
                'manufactutre_year'=>$request->manufac_year,
                'vehi_color'=>$request->vehi_color,
                'condition'=>$request->op_condition,
                'capacity'=>$request->op_capacity
                 ],
        ]
      );
        return response()->json('Successfully added');

    }
}
