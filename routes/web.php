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


Route::get('/Name/{name?}','App\Http\Controllers\StudentController@SName');


Route::get('/ddate/{date_birth}','App\Http\Controllers\StudentController@sdata_bith');


Route::get('/dAge/{age}','App\Http\Controllers\StudentController@sAge');
