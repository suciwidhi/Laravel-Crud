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
    return view('home');
});

Auth::routes();
Route::get('/admin', 'AdminController@index');
Route::get('/user', 'UserController@index');
Route::get('/pembinaan', 'PembinaanController@index');
Route::get('/pembinaan/create', 'PembinaanController@create');
Route::get('/pembinaan/edit/{id}', 'PembinaanController@edit');
Route::post('/pembinaan/update/{id}', 'PembinaanController@update');
Route::delete('/pembinaan/delete/{id}', 'PembinaanController@delete');
Route::get('/forum', 'ForumController@index');

Route::get('/home', 'HomeController@index')->name('home');

