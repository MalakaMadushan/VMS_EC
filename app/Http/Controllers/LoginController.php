<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Redirect,Response;
use Session;

class LoginController extends Controller
{
    public function login(){
        return view ('Auth.login');
    }

    public function logout()
    {
        Session::forget('users');
        return redirect()->route('login');

    }

    public function vmslogin(Request $request){
        

       
        $this->validate($request, [
            'inputuser' => 'required',
            'inputPassword' => 'required',
        ]);

        $client = resolve('elections.client');
        $response = $client->request('GET','Users/GetByUnamePassword/'.$request->inputuser.'/'.$request->inputPassword);
    	$statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $data = json_decode($body);

       
        if(!empty($data)) {
            if($data[0]->user_name == $request->inputuser)
            {
                Session::put('users', $data);
                return redirect()->route('dashbord');
            }
        }

        else
        {
            return redirect()->route('login')->with('error','User Name And Password Are Wrong.');

        }

    }
}
