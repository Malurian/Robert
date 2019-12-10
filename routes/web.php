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

// Auth::routes();
Auth::routes(['verify' => true]);

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
Route::post('update', 'UserController@update');


Route::get('dash', 'DashboardController@index');
Route::get('create-events', 'DashboardController@create');
Route::get('purchase-sponsorship', 'DashboardController@sponsorship');
Route::get('send-artworks', 'DashboardController@artworks');
Route::get('extras', 'DashboardController@extras');
Route::get('boost-social', 'DashboardController@social');
Route::get('boost-form', 'DashboardController@form');
Route::get('boost-featured', 'DashboardController@featured');
Route::get('wallet', 'DashboardController@wallet');
Route::post('pay', 'PaymentController@pay');
Route::post('payment_now', 'PaymentController@store');

Route::get('profile', 'UserController@index');

Route::get('edit-profile', 'UserController@show');



Route::get('/view-events', 'EventController@index');

Route::resource('contact-us', 'ContactController');
