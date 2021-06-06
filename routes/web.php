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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MyController@index') -> name('index');

Route::get('/car/{id}/edit', 'CarController@edit') ->middleware('auth') -> name('car.edit');
Route::post('/car/{id}', 'CarController@update') ->middleware('auth') -> name('car.update');

Route::get('/car/{id}', 'CarController@delete') ->middleware('auth') -> name('car.destroy');

Route::get('/createCar', 'CarController@create') ->middleware('auth') -> name('car.create');
Route::post('/car', 'CarController@store') ->middleware('auth') -> name('car.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 