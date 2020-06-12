<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function users(){
        $client = resolve('elections.client');
        $responsebranch= $client -> request('GET','branch/GetAll');

        $statuscodebranch=$responsebranch->getStatusCode();
        $bodybranch=$responsebranch->getBody()->getContents();

        $Databranch=json_decode($bodybranch);


        return view('pages.users')->with('Data',$Databranch);
        
    }


    public function add_users(Request $request){
       //alert("controller ok");
        //console.log("okkkk");
        $client = resolve('elections.client');
        $response = $client->request('POST', 'Users/AddUsers',
        [
            'headers'=>['content-type'=>'application/json'],
            'json'=>[
                        'user_name'=>$request->txt_username,
                        'password'=>$request->user_password,
                        'role_id'=>$request->op_user_role,
                        'name'=>$request->txt_fullname,
                        'email'=>$request->InputEmail,
                        'mobile' =>$request->user_mobile,
                        'designation_id'=>$request->user_regid,
                        'nic'=>$request->user_nic,
                        'branch_id'=>$request->op_user_branch
            ],

        ]
        );
        return response()->json('Successfully added');
    }
}
