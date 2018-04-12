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
    return redirect('/login');
});

Route::group(['middleware' => ['sess']], function(){
	Route::get('/home', 'HomeController@index')->name('home.index');

	Route::get('/category', 'CategoryController@index');
	Route::get('/category/create', 'CategoryController@create');
	Route::get('/category/{id}', 'CategoryController@show')->name('category.show');
	Route::get('/category/{id}/edit', 'CategoryController@edit');
	Route::get('/category/{id}/delete', 'CategoryController@delete');
	Route::post('/category', 'CategoryController@store');
	Route::post('/category/search', 'CategoryController@search');
	Route::put('/category/{id}', 'CategoryController@update');
	Route::delete('/category/{id}', 'CategoryController@destroy');
	
	Route::get('/product', 'ProductController@index');
	Route::get('/product/create', 'ProductController@create');
	Route::get('/product/{id}', 'ProductController@show');
	Route::get('/product/{id}/edit', 'ProductController@edit');
	Route::get('/product/{id}/delete', 'ProductController@delete');
	Route::post('/product', 'ProductController@store');
	Route::post('/product/search', 'ProductController@search');
	Route::put('/product/{id}', 'ProductController@update');
	Route::delete('/product/{id}', 'ProductController@destroy');
});

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');

Route::get('/logout', 'LogoutController@index');

//Route::get('/home', 'HomeController@index')->middleware('sess');




//Route::resource('/supplier', 'SupplierController');
//Route::get('/supplier/{id}/delete', 'SupplierController@delete');