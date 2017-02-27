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



Route::group(['prefix' => 'services' , 'middleware'=>'auth'], function() {
    
    Route::get('/',['uses'=>'ServicesController@show', 'as'=>'services']);
		
    //drop/add
    // Route::match(['get','post'],'/add',['uses'=>'ServicesAddController@add','as'=>'add']);
    // //drop/edit/2
    // Route::match(['get','post','delete'],'/edit/{entry}',['uses'=>'ServicesEditController@edit','as'=>'edit']);
    
});
    Auth::routes();
    Route::get('/logout', 'Auth\LoginController@logout');
// Route::get('/home', 'HomeController@index');


