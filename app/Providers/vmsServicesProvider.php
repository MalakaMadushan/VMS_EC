<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;

class vmsServicesProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('elections.client', function () {
            $config = [
                //'base_uri' => env('VMS_API'),
                'base_uri' => "http://192.168.1.100:8080/api/"
            ];
            return new Client($config);
        });
    }

   
}
