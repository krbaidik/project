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

Route::post('/insert','App\Http\Controllers\summernoteController@insert');
Route::get('/view','App\Http\Controllers\summernoteController@view');
Route::get('/viewdetail/{id}','App\Http\Controllers\summernoteController@viewdetail');
