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


Route::get('/','FrontController@index')->name('home');
Route::get('/shirts','FrontController@shirts')->name('shirts');
Route::get('/shirt','FrontController@shirt')->name('shirt');
Auth::routes();
Route::get('/logout', 'auth\loginController@logout')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin','middleware'=>'auth'], function (){
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');
Route::resource('product','ProductsController');
Route::resource('category','CategoriesController');
});