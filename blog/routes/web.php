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
Route::get('/login',function(){
    return '<form action="">
    <input type ="text">
    <button>login</button></form>';
});

Route::get('/linh',function(){
    return view('thu-muc.demo');
});

Route::get('/view' ,'Controller@tralaiView');
Route::get('/view2','Controller@viewDemo');

