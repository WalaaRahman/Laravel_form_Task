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

Route::get('Message',function(){
    // echo "Welcome".$name;
    return view('message');
});

Route::get('create','blogController@create');
Route::post('save','blogController@store');

Route::get('form','formController@create');
Route::post('save','formController@getInfo');