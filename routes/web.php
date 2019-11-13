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

Route::get('/', 'WelcomeController@index')->name('index');

Auth::routes();

Route::get('/index', 'HomeController@index')->name('index');

Route::get('event-hosts', function () {
    return view('event-host');
});

Route::get('about-us', function () {
    return view('about-us');
});

Route::resource('subscribe', 'SubscribeController');
Route::resource('subscriber', 'SubscribersController');
Route::resource('event', 'EventController');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('dash', 'DashboardController@index');
Route::get('create-events', 'DashboardController@create');

Route::get('profile', 'UserController@index');

Route::get('edit-profile', 'UserController@show');



Route::get('/view-events', 'EventController@index');

Route::resource('contact-us', 'ContactController');