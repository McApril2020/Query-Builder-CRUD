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

Route::get('/create','PostController@create');

Route::post('/add-post', 'PostController@store')->name('add.post');

Route::get('/post', 'PostController@show');

Route::get('/delete/{id}', 'PostController@destroy');

Route::post('/update', 'PostController@update')->name('update.post');

Route::get('/edit/{id}', 'PostController@edit_form');
