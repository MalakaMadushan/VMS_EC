<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Session;


class AgencyController extends Controller
{
    public function agency(Request $request){
        if ($request->session()->has('users')) {
        return view ('pages.agency');
        }
        else{
            return view('Auth.login');
        }
    }

    //post agency added form data to database-------------------------

    public function add_agency(Request $request){

        //dd($request->op_vehi_type,$request->txt_agencyname,);
        // unset($request['_method']);
        // unset($request['_token']);
        // $client = resolve('elections.client');

        // $category = $request->op_vehi_type;
        // $name=$request->txt_agencyname;
        // $address1=$request->txt_agency_address1;
        // $address2=$request->txt_agency_address2;
        // $tp=$request->agency_phone_no;
        // $email=$request->agencyEmail;

        //dd($category,$name,$address2,$address1,$tp,$email);
        // $endpoint = 'Agencies/PostAgencies';
        // $options = [
        //     'headers' => ['Content-Type' => 'application/json','Accept' => 'application/json'],
        //     'json' => [
        //         'category'=>$category,
        //         'name'=>$name,
        //         'address1'=>$address1,
        //         'address2'=>$address2,
        //         'tp'=>$tp,
        //         'email'=>$email
        //         ],
        //      ];

        // $client->post($endpoint, $options);
        
        $client = resolve('elections.client');
        $response = $client->request('POST', 'Agencies/PostAgencies',
        [
            'headers'=>['content-type'=>'application/json'],
            'json'=>[
                'category'=>$request->op_vehi_type,
                'name'=>$request->txt_agencyname,
                'address1'=>$request->txt_agency_address1,
                'address2'=>$request->txt_agency_address2,
                'tp'=>$request->agency_phone_no,
                'email'=>$request->agencyEmail
            ],

        ]
        );
        return response()->json('Successfully added');
    }
}


