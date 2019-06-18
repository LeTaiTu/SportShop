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
// trang chu
Route::get('/', function () {
    return view('home.home');
})->name('home');
// login trang chu -> khach hang
Route::get('/login', function () {
    return view('login');
})->name('login');
// register dang ky khach hang
Route::get('/register', function () {
    return view('register');
})->name('register');
// menu trang khuyen mai
Route::get('/sale', function () {
    return view('sale');
})->name('sale');
// menu trang quan ao
Route::get('/quanao', function () {
    return view('quanao');
})->name('quanao');
// menu trang phuchoi
Route::get('/phuchoi', function () {
    return view('phuchoi');
})->name('phuchoi');
// menu trang bong
Route::get('/bong', function () {
    return view('bong');
})->name('bong');
// menu trang chuc nang
Route::get('/chucnang', function () {
    return view('chucnang');
})->name('chucnang');
// menu trang kinh
Route::get('/kinh', function(){
	return view('kinh');
})->name('kinh');
// menu trang contact
Route::get('/contact', function(){
	return view('contact');
})->name('contact');

// group admin
Route::prefix('admin')->group(function() {
	Route::get('/', "\App\Http\Controllers\Admins\LoginController@index");
	Route::post('/', "\App\Http\Controllers\Admins\LoginController@store")->name('admin');
    // trang chu admin
    Route::get('/home', function(){ 
        return view('admin.home');})->name('admin.home');
    // trang admin/account
	Route::get('/account',"\App\Http\Controllers\Admins\AccountController@index")->name('admin.account');
    Route::post('/account/search',"\App\Http\Controllers\Admins\AccountController@search")->name('account.search');
    Route::get('/account/create',"\App\Http\Controllers\Admins\AccountController@create")->name('account.create');
    Route::post('/account/create',"\App\Http\Controllers\Admins\AccountController@store")->name('account.store');
    Route::get('/account/{id}/delete',"\App\Http\Controllers\Admins\AccountController@destroy")->name('account.delete');
    Route::get('/account/{id}/edit',"\App\Http\Controllers\Admins\AccountController@edit")->name('account.edit');
    Route::post('/account/{id}/edit',"\App\Http\Controllers\Admins\AccountController@update")->name('account.update');
    
});