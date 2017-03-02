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

Route::get('profile/{username}', 'ProfileController@profile')->name('profile');
//->middleware('auth');

Route::resource('posts', 'PostController');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('upload', 'ProfileController@upload');

Route::get('getimage/{filename}', 'ProfileController@getImage')->name('getimage');

Route::get('getmsg/{username}', 'AjaxController@checkuser');

/*
Route::group(['middleware' => 'auth'], function () {
	Route::get('profile/{username}', 'ProfileController@profile');

	Route::resource('posts', 'PostController');
});
*/