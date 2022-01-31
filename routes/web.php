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

Route::get('/', 'HomeController@home') ->name('home');
Route::get('/comic/detail/{id}', 'HomeController@detail') ->name('detail');

Route::get('/comic/create', 'HomeController@create') ->name('create');
Route::post('/comic/store', 'HomeController@store') ->name('store');

Route::get('/comic/edit/{id}', 'HomeController@edit') ->name('edit');
Route::post('/comic/update/{id}', 'HomeController@update') ->name('update');

Route::get('/comic/delete/{id}', 'HomeController@delete') ->name('delete');