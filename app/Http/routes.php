<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::group(['prefix' => 'admin'], function () {

	Route::group(['prefix' => 'document'], function () {
		Route::get('/', [
		   'as' => 'admin/document', 'uses' => 'admin\DocumentController@document'
		]);

		Route::get('/add', [
		   'as' => 'admin/document/add', 'uses' => 'admin\DocumentController@adddocument'
		]);

		Route::match(['get', 'post'], '/add_ajax', [
		   'as' => 'admin/document/add_ajax', 'uses' => 'admin\DocumentController@adddocument_ajax'
		]);
	});

	Route::group(['prefix' => 'category'], function () {
		Route::get('/', [
		   'as' => 'admin/category', 'uses' => 'admin\CategoryController@category'
		]);

		Route::get('/add', [
		   'as' => 'admin/category/add', 'uses' => 'admin\CategoryController@addcategory'
		]);
	});

});
