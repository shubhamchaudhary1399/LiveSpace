<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
	Route::resource('rooms', 'AddroomController');

	Route::get('', function(){
		return view('admin.dashboard');
	});

	Route::get('dashboard', function(){
		return view('admin.dashboard');
	});
});

Auth::routes();

Route::resource('/user/profile', 'ProfileController')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');


Route::any('/search', 'SearchController');

Route::get('/search/room/{id}', 'ShowRoom@index');

Route::get('/search/studyrooms', 'studyrooms');
Route::get('/search/familyrooms', 'familyrooms');
Route::get('/search/officerooms', 'officerooms');

Route::resource('/bookroom/{id}', 'BookRoom')->middleware('auth');
