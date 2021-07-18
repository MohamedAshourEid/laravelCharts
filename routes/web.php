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

Route::get('qr/{id}', function ($id) {
    return view('qrCode',['id'=>$id]);
});



//Route::get('getSessions','AttendanceChart@getSessionsData')->middleware('Cors');
Route::get('getSessions', ['middleware' => 'Cors' , 'uses'=> 'AttendanceChart@getSessionsData']);
Route::get('qrcode', function () {
    return QrCode::size(300)->generate('A basic example of QR code! Nicesnippets.com');
});


Route::namespace("Front") -> group(function(){
    Route::get("usr",function (){
        return view("welcome");
    });
});
//Route::view("qr/{id}","qrCode");

Route::view("login","userForm");
Route::post("UsersController","UsersController@userInfo");

Route::view("sessionForm","sessionForm");
Route::post("SessionController","SessionController@index");
//Route::view("profile","profile");

Route::get("profile",function (){

    return view("profile");
});

//Route::group(['middleware' =>["SessionMiddleware"]],function(){
//    Route::view("profile","profile");
//});
//
//Route::get("dbtest","DBController@index");
//127.0.0.1
