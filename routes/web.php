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



Route::get('insert', function () {
    return view('register/register');
});

Route::get('show', function () {
    return view('register/show');
});



Route::post('/cat','RegisterController@store')->name('register');
Route::get('/regist','RegisterController@index')->name('list');
Route::get('/regist/{id}','RegisterController@edit')->name('editer');
Route::put('/registt/{id}','RegisterController@update')->name('update');
Route::get('/delete/{id}','RegisterController@destroy')->name('fdelete');