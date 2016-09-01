<?php
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/login', ['as' => 'login', 'uses' => 'HomeController@login']);
Route::get('/register', ['as' => 'register', 'uses' => 'HomeController@register']);
Route::post('/dologin', ['as' => 'dologin', 'uses' => 'HomeController@dologin']);
Route::post('/doregist', ['as' => 'doregist', 'uses' => 'HomeController@doregist']);
Route::get('/profil', ['as' => 'profil.edit', 'uses' => 'ProfilController@index']);
?>