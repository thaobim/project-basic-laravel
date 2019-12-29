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
//---------------------FRONTEND-----------------

//index

Route::get('', 'frontend\HomeController@getHome');

//about
Route::get('/about', 'frontend\HomeController@getAbout');

//contact
Route::get('/contact', 'frontend\HomeController@getContact');

//cart
Route::get('/cart', 'frontend\CartController@getCart');

//checkout
Route::group(['prefix' => 'checkout'], function () {
    Route::get('', 'frontend\CheckoutController@getCheckout');

    Route::get('complete', 'frontend\CheckoutController@getComplete');
});


//product
Route::group(['prefix' => 'product'], function () {
    Route::get('shop', 'frontend\ProductController@getProduct');
    Route::get('detail', 'frontend\ProductController@getDetailProduct');
});


//------------------BACKEND-------------------------

//login
Route::get('login', 'backend\LoginController@getLogin');

//
Route::group(['prefix' => 'admin'], function () {
Route::get('', 'backend\IndexController@getIndex');

//category
Route::group(['prefix' => 'category'], function () {
Route::get('', 'backend\CategoryController@getCategory');
Route::get('edit', 'backend\CategoryController@getEditCategory');
});


//order
Route::group(['prefix' => 'order'], function () {

Route::get('', 'backend\OrderController@getOrder');
Route::get('detail', 'backend\OrderController@getDetailOrder');
Route::get('processed', 'backend\OrderController@getProcessedOrder');
});


//product
Route::group(['prefix' => 'product'], function () {
Route::get('', 'backend\ProductController@getProduct');
Route::get('add', 'backend\ProductController@getAddProduct');
Route::get('edit', 'backend\ProductController@getEditProduct');
});


//user
Route::group(['prefix' => 'user'], function () {
    Route::get('', 'backend\UserController@getUser');
    Route::get('add', 'backend\UserController@getAddUser');
    Route::get('edit', 'backend\UserController@getEditUser');
});


});


