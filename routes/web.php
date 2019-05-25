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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Customer Routes
Route::get('/customers', 'CustomersController@GetAll');
Route::post('/customers/create', 'SingleCustomerController@AddCustomer');
Route::get('/customers/{id}', 'SingleCustomerController@ShowSingleCustomer');
