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
    return 'fdsafs';
});
Route::get('/sign-up','UserController@SignUpForm');
Route::post('/sign-up-success','UserController@signUpSuccessfully');
Route::get('/index','UserController@index');
Route::get('/user/{id}','UserController@show');
Route::get