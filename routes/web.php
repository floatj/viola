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

/* admin */
Route::get('/LaOpera', 'DashboardController@showDashboard');
/*
Route::get('/', function () {
    return view('dashboard');
});
*/


/* Demo */

//首頁
Route::get('/', 'SupplierController@showInfo');
//sup info
Route::get('/demo/', 'SupplierController@showInfo');
//dm
Route::get('/demo/product/', 'ProductController@showAllProducts');
//newsinfo
Route::get('/demo/news/', 'NewsinfoController@showAllNewsinfo');
