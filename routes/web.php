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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@admin')->name('admin');
Route::get('/publisher', 'HomeController@publisher')->name('publisher');
Route::get('/agent', 'HomeController@agent')->name('agent');
Route::resource('/category','CategoryController');
Route::resource('/region','RegionController');
Route::resource('/publishers','PublisherController');
Route::resource('/media','MediaController');
Route::resource('/agents','AgentController');
Route::resource('/area','AreaController');
Route::resource('/district','DistrictController');
Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);

