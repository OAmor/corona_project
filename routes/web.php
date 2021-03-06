<?php

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

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::post('/post/case', 'DashboardController@post')->name('postData');

Route::group(['prefix'=> 'backoffice', 'middleware'=>'auth'],function (){
    Route::get('/', 'DashboardController@index')->name('home');
    Route::get('/cases', 'DashboardController@cases')->name('cases');
    Route::get('/destroy', 'DashboardController@destroy')->name('cases_delete');
});
