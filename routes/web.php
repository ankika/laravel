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
Route::get('/profile', 'Profilecontroller@profile')->name('profile');
Route::POST('/addprofile', 'Profilecontroller@addprofile')->name('addprofile');

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

 // Route::resource('ajax-crud-list', 'DatatablesController');
 // Route::post('ajax-crud-list/store', 'DatatablesController@store');
 // Route::get('ajax-crud-list/delete/{id}', 'DatatablesController@destroy');
Route::get('users', ['uses'=>'DatatablesController@index', 'as'=>'users.index']);


// Route::resource('ajaxproducts','ProductAjaxController');
// Route::get('ajaxproducts', ['uses'=>'ProductAjaxController@index', 'as'=>'ajaxproducts.index']);


Route::resource('ajax-crud-list', 'UsersController');
 Route::post('ajax-crud-list/store', 'UsersController@store');
 Route::get('ajax-crud-list/delete/{id}', 'UsersController@destroy');


