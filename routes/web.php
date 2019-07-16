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

Route::get('/',[
    'as'  => 'user.list',
    'uses'=>'UserController@index']
);
Route::get('/addUser',[
    'as'  =>'user.create',
    'uses'=>'UserController@create']
);
Route::post('/addUser',[
    'as'  =>'user.store',
    'uses'=>'UserController@store']
);
Route::get('/editUser/{id}',[
    'as'   => 'user.edit',
    'uses' => 'UserController@edit']);
Route::post('/editUser/{id}',[
    'as'   => 'user.update',
    'uses' => 'UserController@update']);
Route::get('/deleteUser/{id}',[
    'as'   => 'user.destroy',
    'uses' => 'UserController@destroy']);
