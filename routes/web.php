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
Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')    
    ->name('home')->middleware('verified');
Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');
Route::get('/doctor', 'DoctorController@doctor')    
    ->middleware('is_doctor')    
    ->name('doctor');
Route::post('/profile', 'adminRegisterController@index');
