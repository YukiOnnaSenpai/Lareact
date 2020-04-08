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
Route::middleware(['simple'])->group(function () {

    // Route::get('/{age}', function () {
    //     return view('welcome');
    // })->name('welcome get')->middleware('age');

    Route::get('/', 'HomeController@getWelcome')->name('welcome get');

    //Route::get('/{first_name}', 'HomeController@getSimpleView')->name('simple get');

    Route::post('/', 'HomeController@postWelcome')->name('welcome post');

    Route::put('/', 'HomeController@putWelcome')->name('welcome put');

    Route::patch('/', 'HomeController@patchWelcome')->name('welcome patch');

    Route::delete('/', 'HomeController@deleteWelcome')->name('welcome delete');

    Route::resource('resource', 'ResourceController');

});

Route::get('/post', 'PostController@getAllPosts')->name('all posts');
Route::get('/post/{id}', 'PostController@getOnePost')->name('single post');
Route::post('/post', 'PostController@createPost')->name('create post');
Route::delete('/post/{id}', 'PostController@deletePost')->name('delete post');