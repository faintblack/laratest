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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'ProductsController@index');
Route::get('back', 'ProductsController@back');
Route::get('create', 'ProductsController@create');
Route::post('insert', 'ProductsController@insert');
Route::get('delete/{id}', 'ProductsController@delete');
Route::get('edit/{id}', 'ProductsController@edit');
Route::post('update/{id}', 'ProductsController@update');
Route::get('read/{id}', 'ProductsController@read');

Route::get('beli', 'BeliController@index');
Route::post('beli_product', 'BeliController@beli_product');
Route::get('detail_beli/{id}', 'BeliController@detail');


// Route::get('create', function(){
//     return view('create');
// });
