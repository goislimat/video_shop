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
    return view('welcome');
});

Route::group(['prefix' => 'products'], function() {
    Route::get('', ['uses' => 'ProductController@index', 'as' => 'products.index']);
    Route::get('create', ['uses' => 'ProductController@create', 'as' => 'products.create']);
    Route::post('', ['uses' => 'ProductController@store', 'as' => 'products.store']);
    Route::get('{id}', ['uses' => 'ProductController@show', 'as' => 'products.show']);
    Route::get('{id}/edit', ['uses' => 'ProductController@edit', 'as' => 'products.edit']);
    Route::put('{id}', ['uses' => 'ProductController@update', 'as' => 'products.update']);
    Route::delete('{id}', ['uses' => 'ProductController@destroy', 'as' => 'products.destroy']);
});

