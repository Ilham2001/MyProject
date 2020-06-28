<?php

use Illuminate\Support\Facades\Route;
use App\Client;

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

/**
 * Welcome route
 */

Route::get('/', function () {
    return view('welcome');
});

/**
 * Auth routes
 */

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

/**
 * Home route
 */
Route::get('/home', 'HomeController@index')->name('home');

/**
 * Controllers
 */
Route::resource('buildings','BuildingController');
Route::resource('demands','DemandController');
Route::resource('interventions','InterventionController');
Route::resource('quotes','QuoteController');
Route::resource('documents','DocumentController');
Route::resource('clients','ClientController');
Route::resource('building_client','BuildingClientController');

/**
 * Menu routes
 */
Route::get('/demands','DemandController@index');
Route::get('/interventions','InterventionController@index');
Route::get('/quotes','QuoteController@index');
Route::get('/documents','DocumentController@index');

/**
 * Demand Routes
 */
Route::post('/demands','DemandController@store')->name('add_demand');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/demands/{id}','DemandController@show');

/**
 * Intervention Routes
 */
 Route::get('/interventions/{id}', 'InterventionController@show');
 Route::get('/staffs','StaffController@index');