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

Route::get('registro',['uses' => 'RegistryController@index']);
Route::get('gestion',['uses' => 'ManageController@index']);
Route::get('create',['uses' => 'RegistryController@create']);
Route::post('store',['uses' => 'RegistryController@store']);
Route::get('constancias',['uses' => 'ConstController@index']);
Route::get('pagos',['uses' => 'PaymentsController@index']);

/*Route::get('registrarPago',function(){
	return view('pagos.registrar');
});*/

//Route::get('registrarPago',['uses' => 'PaymentsController@create']);

Route::get('registrarPago','PaymentsController@create');
Route::get('listarPago','PaymentsController@listarPagos');
Route::get('listarPagoFinca','PaymentsController@listarPagosFinca');
Route::get('showPagosFinca','PaymentsController@showPagosFinca');
Route::post('storePago',['uses' => 'PaymentsController@store']);
Route::resource('payment','PaymentsController');

Route::get('pdfPagos','PaymentsController@generarPDF');

Auth::routes();

Route::get('/home', 'HomeController@index');
