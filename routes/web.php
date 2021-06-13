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
 

Route::get('/','RedirectController@admin_login')->name('admin_login');
Route::get('/admin','RedirectController@admin_index')->name('admin_index');
Route::get('/admin/add-patient','RedirectController@add_patient')->name('add_patient');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
