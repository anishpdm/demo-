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

Route::get('/features', function () {
    return view('feature');
});

Route::post('/sub', function () {
   $x=request("uname");
   $y=request("pass");

   echo $x;

   echo "<br>";
   echo $y;
});

Route::get("/view", "UserController@index");
