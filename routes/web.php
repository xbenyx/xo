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

// Route::get('/', 'HomeController@index')->name('home'); Old route 
Route::get('/edit_profile', 'HomeController@edit_profile')->name('edit_profile');
Route::POST('/update_profile/{id}', 'HomeController@update_profile')->name('update_profile');
Route::get('/password_change/', 'HomeController@update_password')->name('update_password');


Route::resource('customer', 'CustomerController');
Route::resource('invoice', 'InvoiceController');
Route::resource('SLCustomerAccount', 'SLCustomerAccountController');
Route::resource('StockItem', 'StockItemController');

Route::get('/findPrice', 'InvoiceController@findPrice')->name('findPrice');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
