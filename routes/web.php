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

Route::get('/', 'Practice@index')->name('index');
Route::get('/addpost','Practice@addpost')->name('addpost');
Route::get('/edit/{id}','Practice@edit')->name('edit');
Route::get('/delete/{id}','Practice@delete')->name('delete');


Route::post('/postdata','Practice@postdata')->name('postdata');
Route::post('/update/{id}','Practice@update')->name('update');



