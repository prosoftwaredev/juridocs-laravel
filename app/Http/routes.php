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

		Route::get('/{id}', [
		   'as' => 'admin/category', 'uses' => 'admin\CategoryController@editcategory'
		]);

		Route::match(['get', 'post'], '/edit_ajax', [
		   'as' => 'admin/category/edit_ajax', 'uses' => 'admin\CategoryController@editcategory_ajax'
		]);

		Route::match(['get', 'post'], '/add_ajax', [
		   'as' => 'admin/category/add_ajax', 'uses' => 'admin\CategoryController@addcategory_ajax'
		]);

		Route::match(['get', 'post'], '/delete_ajax/{id}', [
		   'as' => 'admin/category/delete_ajax', 'uses' => 'admin\CategoryController@deletecategory_ajax'
		]);
	});

	Route::group(['prefix' => 'glossary'], function () {
		Route::get('/', [
		   'as' => 'admin/glossary', 'uses' => 'admin\GlossaryController@index'
		]);

		Route::get('/edit/{id}', [
		   'as' => 'admin/category/add', 'uses' => 'admin\GlossaryController@edit'
		]);

		Route::get('/{id}', [
		   'as' => 'admin/category', 'uses' => 'admin\GlossaryController@editcategory'
		]);

		Route::match(['get', 'post'], '/edit_ajax', [
		   'as' => 'admin/category/edit_ajax', 'uses' => 'admin\GlossaryController@editcategory_ajax'
		]);

		Route::match(['get', 'post'], '/add_ajax', [
		   'as' => 'admin/category/add_ajax', 'uses' => 'admin\GlossaryController@addcategory_ajax'
		]);

		Route::match(['get', 'post'], '/delete_ajax/{id}', [
		   'as' => 'admin/category/delete_ajax', 'uses' => 'admin\GlossaryController@deletecategory_ajax'
		]);
	});

});
