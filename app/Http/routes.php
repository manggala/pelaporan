<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', ['as' => 'home','uses' =>'WelcomeController@dashboard']);

Route::get('/', ['as' => 'login', 'uses' => 'WelcomeController@login']);

Route::get('/dashboard', ['as' => 'home','uses' =>'WelcomeController@dashboard']);

Route::get('/preoperation', ['as' => 'preoperation', 'uses' => 'PreOperationController@index']);

Route::get('/preoperation/grafik', ['as' => 'preoperation.grafik', 'uses' => 'PreOperationController@grafik']);

Route::get('/preoperation/grafik/data/{idPertanyaan}/{head_truck}', 'AjaxController@getData');

Route::get('/preoperation/tolakKonfirmasi/{id}', ['as' => 'preoperation.tolakKonfirmasi', 'uses' => 'PreOperationController@tolakKonfirmasi']);

Route::get('/preoperation/izinkanKonfirmasi/{id}', ['as' => 'preoperation.izinkanKonfirmasi', 'uses' => 'PreOperationController@izinkanKonfirmasi']);

Route::get('/ajax/detail/{tipe}/{id}', 'AjaxController@detail');

Route::get('/ajax/konfirmasi/{tipe}/{id}', 'AjaxController@konfirmasi');

Route::get('/nearmiss', ['as' => 'nearmiss', 'uses' => 'NearmissController@index']);

Route::get("/nearmiss/download/report-nearmiss-{id}.pdf", ["as" => "download.nearmiss", "uses" => "NearmissController@downloadNearmiss"]);

Route::post('/formhse', ['as' => 'formhse', 'uses' => 'NearmissController@formhse']);

Route::get("/previewTable", "NearmissController@previewTable");

Route::post('/login', ['as' => 'doLogin', 'uses' => 'WelcomeController@doLogin']);

Route::get('/logout', ['as' => 'logout', 'uses' => 'WelcomeController@logout']);