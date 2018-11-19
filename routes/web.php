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
//Route::get('/', 'SupplierController@showInfo');
//Route::get('/', 'ProductController@showHotProducts');
Route::get('/', 'IndexController@showIndex');
//---

//公司簡介
Route::get('/'.$custom_path.'/', 'SupplierController@showInfo');
Route::get('/about', 'SupplierController@showInfo');
//---

//熱門產品
Route::get('/hot_products/', 'ProductController@showHotProducts');

//dm list
Route::get('/'.$custom_path.'/products_list/', 'ProductController@showProductsList'); //list
Route::get('/'.$custom_path.'/products/', 'ProductController@showProductsList2');  //img
Route::get('/'.$custom_path.'/products/', 'ProductController@showProductsList2');  //img
//產品型錄(img)
Route::get('/products/', 'ProductController@showProductsList2');
Route::get('/category/', 'ProductController@showProductsList2');
//產品型錄(img 分類1-3層)
Route::get('/category/{class_no?}', 'ProductController@showProductsList2');
Route::get('/category/{class_no?}/{class_no2?}', 'ProductController@showProductsList2');
Route::get('/category/{class_no?}/{class_no2?}/{class_no3?}', 'ProductController@showProductsList2');
//Route::get('/'.$custom_path.'/category/', 'ProductController@showProductsList');

//dm-by-CategoryMember
//Route::get('/'.$custom_path.'/category/{class_no?}', 'ProductController@showProductsList');
//Route::get('/category/{class_no?}', 'ProductController@showProductsList');
//Route::get('/category/{class_no?}/{class_no2?}', 'ProductController@showProductsList');
//Route::get('/category/{class_no?}/{class_no2?}/{class_no3?}', 'ProductController@showProductsList');
//---

//搜尋產品
Route::get('/products/search/{product_keyword}', 'ProductController@searchProduct');
Route::get('/product/search/{product_keyword}', 'ProductController@searchProduct');

//dm-product-page
//Route::get('/'.$custom_path.'/product/{recno}', 'ProductController@showProduct');
Route::get('/product/{recno}', 'ProductController@showProduct');

//詢問產品
Route::get('/inquiry/{recno}', 'ProductController@inquiryProduct');
Route::post('/inquiry/', 'ProductController@inquiryProductSubmit');

//---

//最新消息
Route::get('/news', 'NewsinfoController@showAllNewsinfo');
Route::get('/news/{recno?}', 'NewsinfoController@showNews');
//Route::get('/'.$custom_path.'/news/', 'NewsinfoController@showAllNewsinfo');

//認識塑膠
//@todo 這些路由暫時先寫死，以後再修改 = =
Route::get('/plastic', 'CustomController@showCustomPage1');
//產品規格表
Route::get('/spec', 'CustomController@showCustomPage2');
Route::get('/spec/1', 'CustomController@showCustomPage2');

Route::get('/spec2', 'CustomController@showCustomPage3');
Route::get('/spec/2', 'CustomController@showCustomPage3');

//地圖
Route::get('/map', 'MapController@showMap');

//custompage
//Route::get('/'.$custom_path.'/custom1/', 'CustomController@showCustomPage');

//聯絡我們
//Route::get('/'.$custom_path.'/contact/', 'ContactController@showContactPage');
Route::get('/contact/', 'ContactController@showContactPage');
Route::post('/contact/', 'ContactController@contactSubmit');

//map
Route::get('/'.$custom_path.'/map/', 'ContactController@showMapPage');

//訂購單
Route::get('/order/', 'OrderController@showOrderForm');
Route::post('/order/', 'OrderController@OrderFormSubmit');
