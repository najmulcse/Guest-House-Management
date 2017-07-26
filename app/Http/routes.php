<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/', 'UserController@showProfile');

Route::get('login', 'UserController@showlogin');

Route::get('check',['as'=>'check','uses'=> 'UserController@showcheck']);

Route::get('room_booking','UserController@showroom_booking');

Route::post('finalize/{room_id}',['as'=>'finalize','uses'=>'UserController@showfinalize']);

Route::get('details',['as'=>'details','uses'=>'UserController@showdetails']);
// Route::get('teacherInfo/{room_id}/{arrive}/{leave}',['as'=>'teacherInfo','uses'=>'UserController@teacherInfo']);
// Route::post('teacherInfoSubmit',['as'=>'teacherInfoSubmit','uses'=>'UserController@teacherInfoSubmit']);
//Check validity 

Route::get('booking-cancel/{id}',['as'=>'booking.cancel', 'uses'=>'UserController@cancelBooking']);

Route::post('checkValidity',['as' =>'checkValidity' ,'uses' => 'UserController@checkValidity']);

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('auth/logout', 'Auth\AuthController@logout');
