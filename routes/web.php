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

Route::get('/', 'TopController@top');
Route::get('admin/front', 'Admin\ProfileController@front')->name('front')->middleware('auth');
Route::get('admin/profile', 'Admin\ProfileController@add')->name('profile')->middleware('auth');
Route::post('admin/profile', 'Admin\ProfileController@edit')->middleware('auth');
Route::get('admin/restaurant', 'Admin\RestaurantController@add')->name('restaurant')->middleware('auth');
Route::post('admin/restaurant', 'Admin\RestaurantController@create')->middleware('auth');
Route::get('admin/contribution', 'Admin\ContributionController@Contribution')->name('contribution')->middleware('auth');
Route::get('admin/index', 'Admin\RestaurantController@index')->name('index')->middleware('auth');
Route::get('admin/diner', 'Admin\RestaurantController@diner')->name('diner')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
