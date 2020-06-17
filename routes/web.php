<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('pages.dashbord');
// });


Route::get('/request', 'RequestController@request');

Route::get('view_request', 'RecievedReqController@view_request');

// Route::get('/', 'DashboardController@dashboard');
Route::get('/dashboard', 'DashboardController@dashboard')->name('dashbord');
Route::get('/dashboard_load', 'DashboardController@dashboard_load')->name('dashboard_load');


Route::get('/recivedrequest', 'RecievedReqController@recievedreq');
Route::post('/submit_request', 'RequestController@submitrequest');
Route::post('/requestdetails_view', 'RecievedReqController@requestdetails_view');


Route::get('/users', 'UsersController@users');
Route::get('/agency', 'AgencyController@agency');
Route::get('/vehicles', 'VehiclesController@vehicle');
Route::get('/drivers', 'DriversController@drivers');


Route::post('/add_drivers', 'DriversController@add_drivers');
// Route::post('/add_vehicles', 'VehiclesController@add_vehicles');


Route::post('/addvehicles', 'VehiclesController@addvehicles');

Route::get('/', 'LoginController@login');
Route::get('/login', 'LoginController@login')->name('login');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::post('/vmsLogin', 'LoginController@vmslogin');

Route::post('/add_agency','AgencyController@add_agency');

Route::put('/update_responce','ResponceController@add_responce');
Route::put('/update_responce_as_notapproved','ResponceController@update_responce_as_notapproved');

Route::post('/add_user', 'UsersController@add_users');
Route::post('/responcedetails_view', 'DashboardController@responcedetails_view');


