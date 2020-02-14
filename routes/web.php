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

use GuzzleHttp\Middleware;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes();

Route::group(['middleware'=>'auth'],function(){
    
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('spd', 'SpdController');
    Route::resource('users', 'UserController');

    Route::post('spd/{spd}/photos', 'PhotosController@store')->name('spd.photos.store');
    Route::delete('photos/{photo}', 'PhotosController@destroy')->name('photos.destroy');
});


