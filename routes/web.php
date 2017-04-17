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
Route::get('/admin', 'DashboardController@showDashboard');
/*
Route::get('/', function () {
    return view('dashboard');
});
*/


/* Demo */
$custom_path="demo";
//首頁
Route::get('/', 'SupplierController@showInfo');
//sup info
Route::get('/'.$custom_path.'/', 'SupplierController@showInfo');
//dm
Route::get('/'.$custom_path.'/products/', 'ProductController@showAllProducts');
//dm-product
Route::get('/'.$custom_path.'/product/{recno}', 'ProductController@showProduct');
//newsinfo
Route::get('/'.$custom_path.'/news/', 'NewsinfoController@showAllNewsinfo');
//custompage
Route::get('/'.$custom_path.'/custom1/', 'CustomController@showCustomPage');
