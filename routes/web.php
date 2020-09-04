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


Route::get('/', function () {
    return view('welcome');
});


//Customer Routes
/*
Route::get('/customers', 'Customers@ShowCustomersView');
Route::get('/all_customers', 'Customers@GetAll');
Route::post('/customers/create', 'Customers@Create')->name('all_customers');
Route::get('/customers/{id}', 'Customers@ShowSingleCustomer')->name('single_customer');
Route::post('/customers/edit/{id}', 'Customers@EditCustomer')->name('edit_customer');
*/
Route::resource('customers', 'CustomerController');
Route::get('/all_customers', 'CustomerController@get_all');

//Workorder Routes
Route::post('/workorders/{id}/destroy', 'WorkorderController@destroy');
Route::get('/workorders/{id}', 'WorkorderController@show');
Route::get('/workorders/{id}/info_tab', 'WorkorderController@info_tab');
Route::get('/workorders/{id}/customer_info', 'WorkorderController@customer_info');
Route::get('/workorders/{id}/get_single_workorder', 'WorkorderController@get_single_workorder');
Route::get('/workorders/{id}/get_lineitems', 'WorkorderController@get_lineitems');
Route::get('/workorders/{id}/get_appointments', 'WorkorderController@get_appointments');
/*
Route::get('/workorders', 'Workorders@GetAll')->name('create_workorder');
Route::post('/workorders/create', 'Workorders@Create')->name('create_workorder');
Route::post('/workorders/edit/{id}', 'Workorders@Edit')->name('edit_workorder');
*/

//Schedule Routes
Route::resource('schedule', 'ScheduleController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'Users@ShowUsersView');
Route::get('/all_users', 'Users@GetAll');

//Route::post('/lineitems/store', 'LineitemsController@store');
Route::post('/lineitems/add_lineitem_to_doc', 'LineitemsController@add_lineitem_to_doc');
Route::post('/lineitems/update_lineitem_in_doc', 'LineitemsController@update_lineitem_in_doc');
Route::post('/lineitems/delete_lineitem_in_doc', 'LineitemsController@delete_lineitem_in_doc');