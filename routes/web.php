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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api/v1'], function (){
    Route::resource('meeting', 'MeetingController');
    Route::resource('meeting/registration', 'RegistrationController');
    Route::post('user', 'AuthController@store');
    Route::post('user/signin', 'AuthController@signin');
});

