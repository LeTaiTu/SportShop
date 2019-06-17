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
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/sale', function () {
    return view('sale');
})->name('sale');

Route::get('/quanao', function () {
    return view('quanao');
})->name('quanao');

Route::get('/phuchoi', function () {
    return view('phuchoi');
})->name('phuchoi');

Route::get('/bong', function () {
    return view('bong');
})->name('bong');

Route::get('/chucnang', function () {
    return view('chucnang');
})->name('chucnang');

Route::get('/kinh', function(){
	return view('kinh');
})->name('kinh');
Route::get('/contact', function(){
	return view('contact');
})->name('contact');

Route::prefix('admin')->group(function() {
	Route::get('/', "\App\Http\Controllers\Admins\LoginController@index");
	Route::post('/', "\App\Http\Controllers\Admins\LoginController@store")->name('admin');
	Route::get('/account',"\App\Http\Controllers\Admins\AccountController@index")->name('admin.account');
});