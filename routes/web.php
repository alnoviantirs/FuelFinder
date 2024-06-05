<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', [App\Http\Controllers\SPBUDetailController::class, 'show']);

Route::get('/spbu/detail/{id}' , [App\Http\Controllers\SPBUDetailController::class, 'detail'])->name('spbu.detail');

Route::get('/contact', [App\Http\Controllers\SPBUDetailController::class, 'contact'])->name('contact');

Route::get('/', [App\Http\Controllers\SPBUDetailController::class, 'show'])->name('welcome');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

// Route::resource('spbus', 'SpbuController');

// Route::get('spbus/{spbu}/edit', 'SpbuController@edit')->name('spbus.edit');
// Route::delete('spbus/{spbu}', 'SpbuController@destroy')->name('spbus.destroy');

// ... (existing routes) ...

Route::resource('spbus', \App\Http\Controllers\SpbuController::class)->middleware('auth');