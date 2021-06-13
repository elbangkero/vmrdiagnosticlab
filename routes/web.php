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
 

Auth::routes();

Route::get('/','LoginController@admin_login')->name('admin_login');
Route::get('/admin','RedirectController@admin_index')->name('admin_index');
Route::get('/admin/add-patient','RedirectController@add_patient')->name('add_patient');
Route::post('/admin/store-patient','RedirectController@insert_patient')->name('insert_patient');
 

 
 

 