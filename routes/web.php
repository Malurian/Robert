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
Route::resource('subscribe', 'SubscribeController');
Route::resource('subscriber', 'SubscribersController');
Route::resource('event', 'EventController');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/dash', function () {
    return view('dashboard/dash');
});

Route::get('/profile', function () {
    return view('dashboard/profile');
});

Route::get('/edit-profile', function () {
    return view('dashboard/edit-profile');
});


Route::get('/create-events', function () {
    return view('dashboard/create-events');
});

Route::get('/view-events', function () {
    return view('view-events');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});