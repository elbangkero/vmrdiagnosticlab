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
Route::get('/admin/delete-patient/{id}','RedirectController@delete_patient')->name('delete_patient');
Route::get('/admin/edit-patient/{id}','RedirectController@edit_patient')->name('edit_patient');
Route::put('/admin/update-patient/{id}','RedirectController@update_patient')->name('update_patient');
Route::get('/admin/patient-result/{id}','PatientController@patient_result')->name('patient_result');
Route::get('/admin/add-admin','RedirectController@add_admin')->name('add_admin');
Route::get('/admin/mng-admin','RedirectController@mng_admin')->name('mng_admin');
Route::post('/admin/insert-admin','RedirectController@insert_admin')->name('insert_admin');
Route::get('/admin/delete-admin/{id}','RedirectController@delete_admin')->name('delete_admin');
Route::get('/admin/edit_admin/{id}','RedirectController@edit_admin')->name('edit_admin');
Route::put('/admin/update-admin/{id}','RedirectController@update_admin')->name('update_admin');


 

 
 

 