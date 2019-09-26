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

Route::view('/', 'welcome');
Route::get('/', 'PatientsInfoController@manage');
Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/patient', 'HomeController@index')    
    ->name('Patient')->middleware('verified');

Route::post('/petientprofile', 'PatientsInfoController@index')    
    ->middleware('verified')    
    ->name('home');

Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');

Route::post('/profile', 'AdminInfoController@index')
    ->middleware('is_admin')    
    ->name('admin');

Route::get('/doctor', 'DoctorController@doctor')    
    ->middleware('is_doctor')    
    ->name('doctor');

Route::post('/doctorprofile', 'DoctorInfoController@index')
    ->middleware('is_doctor')    
    ->name('doctor');
    
Route::get('/autocomplete', 'PatientsInfoController@autocomplete');
Route::post('/autocomplete/fetch', 'PatientsInfoController@fetch')->name('autocomplete.fetch');


