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



Route::resource('customer','CustomerController');
Route::resource('product','ProductController');
Route::resource('employee','EmployeeController');
Route::resource('sale','SaleController');
Route::resource('company','CompanyController');
Route::resource('provider','ProviderController');
Route::resource('purchase','PurchaseController');
Route::resource('purchase_Detail','PurchaseDetailController');
Route::resource('stocktaking','StocktakingController');
Route::resource('sale_detail','SaleDetailController');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
