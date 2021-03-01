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
Route::get('/logout', 'App\Http\Controllers\LogoutController@index');





Route::group(['middleware'=> 'sess'], function(){
    Route::get('/home', 'App\Http\Controllers\HomeController@index')->middleware('sess');
Route::get('/home/userlist', 'App\Http\Controllers\HomeController@userlist')->name('home.userlist');

Route::get('/home/create', 'App\Http\Controllers\HomeController@create')->middleware('sess')->name('home.create');
Route::post('/home/create', 'App\Http\Controllers\HomeController@store');

Route::get('/home/edit/{id}', 'App\Http\Controllers\HomeController@edit')->name('home.edit');//edittttt start
Route::post('/home/edit/{id}', 'App\Http\Controllers\HomeController@update');

Route::get('/home/delete/{id}', 'App\Http\Controllers\HomeController@delete');
Route::post('/home/delete/{id}', 'App\Http\Controllers\HomeController@destroy');

Route::get('/home/details/{id}', 'App\Http\Controllers\HomeController@show');


Route::get('/home/registration', 'App\Http\Controllers\HomeController@registrationcreate')->middleware('sess')->name('home.create');
Route::post('/home/registration', 'App\Http\Controllers\HomeController@registrationstore');



});
