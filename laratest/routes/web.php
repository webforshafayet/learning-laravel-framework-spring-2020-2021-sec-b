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

    //echo "wee";
});

Route::get('/outlogin', function () {
    return view('login');  
});

Route::get('/inlogin', function () {
    return view('login.index');  
});

Route::get('/abc', function () {
    return view('login.test');  
});

//Route::get('/login', 'LoginController@index');
 

Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::post('/login', 'App\Http\Controllers\LoginController@verify');
Route::get('/test', 'App\Http\Controllers\LoginController@test');