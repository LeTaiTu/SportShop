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
    return view('home.home');
});
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::prefix('admin')->group(function() {
	Route::get('/', "\App\Http\Controllers\Admins\LoginController@index");
	Route::post('/', "\App\Http\Controllers\Admins\LoginController@store")->name('admin');
});