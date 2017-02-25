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
Route::group([], function() {
    Route::get('/', ['uses' => 'HomeController@show', 'as' => 'home']);
    Route::get('/contact', ['uses' => 'ContactController@show', 'as' => 'contact']);
});



Route::group(['prefix' => 'service', 'middleware'=>'auth'], function() {
    
    Route::get('/',['uses'=>'ServiceController@show', 'as'=>'all']);
		
    //drop/add
    Route::match(['get','post'],'/add',['uses'=>'ServiceAddController@add','as'=>'add']);
    //drop/edit/2
    Route::match(['get','post','delete'],'/edit/{entrie}',['uses'=>'PagesEditController@edit','as'=>'edit']);
    
    // Auth::routes();
});
// Route::get('/home', 'HomeController@index');


