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

//laravel8から、ここのrouteをちゃんとしたものにしないと見つけてくれないらしい
Route::get('hello', 'App\Http\Controllers\HelloController@index');

Route::post('hello', 'App\Http\Controllers\HelloController@post');



// Route::get('hello/other', 'App\Http\Controllers\HelloController@other');


