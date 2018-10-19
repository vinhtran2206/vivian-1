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

Route::get('index',[
	'as'=>'index',
	'uses'=>'controllerPage@getIndex'
]);

Route::get('collection_women/',[
	'as'=>'collection_women',
	'uses'=>'controllerPage@getCollectionWomen'
]);

Route::get('listingMenu',[
	'as'=>'listingMenu',
	'uses'=>'controllerPage@getListingMenu'
]);

/*
Route::get('listing',[
	'as'=>'listing',
	'uses'=>'controllerPage@getListing'
]);
*/

Route::get('productTitle/{id}',[
	'as'=>'productTitle',
	'uses'=>'controllerPage@getProductTitle'
]);

Route::get('cart',[
	'as'=>'cart',
	'uses'=>'controllerPage@getCart'
]);

//
//
//
//

// Admin

//
//
//

Route::get('indexAdmin',[
	'as'=>'indexAdmin',
	'uses'=>'PageAdminController@getIndexAdmin'
]);
 

// start small categories
// 
// 
// 
Route::get('smallCategory',[
	'as'=>'smallCategory',
	'uses'=>'ControllerSmallCategories@getSmallCategories'
]);

Route::get('addSmallCategory',[
	'as'=>'getaddSmallCategory',
	'uses'=>'ControllerSmallCategories@getaddSmallCategories'
]);
Route::post('addSmallCategory',[
	'as'=>'postaddSmallCategory',
	'uses'=>'ControllerSmallCategories@postAddSmallCategories'
]);

Route::get('editSmallCategory/{id}',[
	'as'=>'geteditSmallCategory',
	'uses'=>'ControllerSmallCategories@getEditSmallCategory'
]);
Route::post('editSmallCategory/{id}',[
	'as'=>'posteditSmallCategory',
	'uses'=>'ControllerSmallCategories@postEditSmallCategory'
]);
Route::get('deleteSmallCategory/{id}',[
	'as'=>'getdeleteSmallCategory',
	'uses'=>'ControllerSmallCategories@getDeleteSmallCategory'
]);

// end small categories
// 
// 
// 

// Categories
Route::get('categories',[
	'as'=>'categories',
	'uses'=>'ControllerCategories@getCategories'
]);

Route::get('addCategories',[
	'as'=>'getaddCategories',
	'uses'=>'ControllerCategories@getAddCategories'
]);

Route::post('addCategories',[
	'as'=>'postaddCategories',
	'uses'=>'ControllerCategories@postAddCategories'
]);

Route::get('editCategory/{id}',[
	'as'=>'geteditCategory',
	'uses'=>'ControllerCategories@getEditCategory'
]);

Route::post('editCategory/{id}',[
	'as'=>'posteditCategory',
	'uses'=>'ControllerCategories@postEditCategory'
]);

Route::get('deleteCategory/{id}',[
	'as'=>'getdeleteCategory',
	'uses'=>'ControllerCategories@getDeleteCategory'
]);

// end categories

Route::get('imageProduct',[
	'as'=>'imageProduct',
	'uses'=>'PageAdminController@getImageProduct'
]);

Route::get('addImageProduct',[
	'as'=>'addImageProduct',
	'uses'=>'PageAdminController@getAddImageProduct'
]);



Route::get('products',[
	'as'=>'products',
	'uses'=>'PageAdminController@getproduct'
]);

Route::get('addProduct',[
	'as'=>'addProduct',
	'uses'=>'PageAdminController@getAddProduct'
]);

Route::get('editProducts',[
	'as'=>'editProducts',
	'uses'=>'PageAdminController@getEditProduct'
]);


Route::get('demo',[
	'as'=>'demo',
	'uses'=>'ControllerCategories@getdemo'
]);



// end Admin
