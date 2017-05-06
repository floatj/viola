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
//$custom_path="demo";
$custom_path="demo";

//首頁
Route::get('/', 'SupplierController@showInfo');
Route::get('/about', 'SupplierController@showInfo');

//---

//公司介紹
Route::get('/'.$custom_path.'/', 'SupplierController@showInfo');

//---

//dm list
Route::get('/'.$custom_path.'/products_list/', 'ProductController@showProductsList'); //list
Route::get('/'.$custom_path.'/products/', 'ProductController@showProductsList2');  //img
//Route::get('/'.$custom_path.'/category/', 'ProductController@showProductsList');

//dm-by-CategoryMember
Route::get('/'.$custom_path.'/category/{class_no?}', 'ProductController@showProductsList');
Route::get('/category/{class_no?}', 'ProductController@showProductsList');
Route::get('/category/{class_no?}/{class_no2?}', 'ProductController@showProductsList');
Route::get('/category/{class_no?}/{class_no2?}/{class_no3?}', 'ProductController@showProductsList');
//---

//dm-product-page
Route::get('/'.$custom_path.'/product/{recno}', 'ProductController@showProduct');
Route::get('/product/{recno}', 'ProductController@showProduct');

//---

//最新消息
Route::get('/news', 'NewsinfoController@showAllNewsinfo');
Route::get('/'.$custom_path.'/news/', 'NewsinfoController@showAllNewsinfo');

//custompage
Route::get('/'.$custom_path.'/custom1/', 'CustomController@showCustomPage');

//contact
Route::get('/'.$custom_path.'/contact/', 'ContactController@showContactPage');
//map
Route::get('/'.$custom_path.'/map/', 'ContactController@showMapPage');
