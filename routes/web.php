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

/** send to home controller */
Route::get('/', 'HomeController@index')->name('home');

/** in case /home is typed in address bar  */
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('orders','OrdersController');

Route::post('/create/order','OrdersController@store');

/** verify admin before routing */
Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');
