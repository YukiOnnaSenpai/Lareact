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

    Route::get('/{age}', function () {
        return view('welcome');
    })->name('welcome get')->middleware('age');

    Route::post('/', function () {
        return view('welcome');
    })->name('welcome post');

    Route::put('/', function () {
        return view('welcome');
    })->name('welcome put');

    Route::patch('/', function () {
        return view('welcome');
    })->name('welcome patch');

    Route::delete('/', function () {
        return view('welcome');
    })->name('welcome delete');

});