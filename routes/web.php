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


Route::post('/books', 'BookController@store');
Route::patch('/books/{book}', 'BookController@update');
Route::delete('/books/{book}', 'BookController@destory');



Route::post('/authors/create', 'AuthorController@store');
Route::get('/authors/create', 'AuthorController@create');

Route::post('/checkout/{book}', 'BookController@checkout');
Route::post('/checkin/{book}', 'BookController@checkin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
