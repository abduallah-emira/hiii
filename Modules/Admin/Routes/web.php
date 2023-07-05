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
Route::prefix('admin')->group(function() {

 Route::get('/', 'adminController@index')->name('index');  

});

Route::prefix('departmen')->group(function() {
    Route::get('/form', 'formController@index')->name('form');
    Route::get('/create', 'formController@create')->name('create');
    Route::post('/store','formController@store')->name('store');

});





