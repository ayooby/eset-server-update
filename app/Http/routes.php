<?php


Route::group(['middleware' => ['auth.basic' , 'user.check']], function () {

  get('/down', ['uses' => 'FileController@index']);

  get('/down/{file_name}', ['uses' => 'FileController@getByfile']);

  get('/down/{folder}/{file_name}', ['uses' => 'FileController@getFileByFolder']);

});
Route::group(['middleware' => ['auth' , 'is.admin']], function(){
  Route::resource('/admin', 'AdminController');
});



// Authentication Routes...
Route::group(['prefix' => 'auth'], function(){

  Route::get('login', 'Auth\AuthController@getLogin');
  Route::post('login', ['uses' => 'Auth\AuthController@postLogin' , 'as' => 'auth_login']);
  Route::get('logout',['uses' => 'Auth\AuthController@getLogout' , 'as' => 'auth_logout']);

});
