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
Route::get('/login_user', function () {
    return view('login');
})->name('login.user');
Route::post('/login_user', "\App\Http\Controllers\Auth\LoginController@login")->name('login.user');

// logout
Route::get('/logout', "\App\Http\Controllers\Auth\LoginController@logout")->name('logout');
// register dang ky khach hang
Route::get('/register_user', function () {
    return view('register');
})->name('register.user');
Route::post('/register_user', "\App\Http\Controllers\Auth\LoginController@register")->name('register.create');

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
    // trang doi password admin
    Route::get('/account/{id}/changepass',"\App\Http\Controllers\Admins\AccountController@changepass")->name('account.changepass');
    Route::post('/account/{id}/changepass',"\App\Http\Controllers\Admins\AccountController@updatepass")->name('account.updatepass');
    // trang kindsport
    Route::get('/kindsport',"\App\Http\Controllers\Admins\KindsportController@index")->name('admin.kindsport');
    Route::post('/kindsport/search',"\App\Http\Controllers\Admins\KindsportController@search")->name('kindsport.search');
    Route::get('/kindsport/create',"\App\Http\Controllers\Admins\KindsportController@create")->name('kindsport.create');
    Route::post('/kindsport/create',"\App\Http\Controllers\Admins\KindsportController@store")->name('kindsport.store');
    Route::get('/kindsport/{id}/delete',"\App\Http\Controllers\Admins\KindsportController@destroy")->name('kindsport.delete');
    Route::get('/kindsport/{id}/edit',"\App\Http\Controllers\Admins\KindsportController@edit")->name('kindsport.edit');
    Route::post('/account/{id}/edit',"\App\Http\Controllers\Admins\KindsportController@update")->name('kindsport.update');
    // trang slide
    Route::get('/slide',"\App\Http\Controllers\Admins\SlideController@index")->name('admin.slide');
    Route::post('/slide/search',"\App\Http\Controllers\Admins\SlideController@search")->name('slide.search');
    Route::get('/slide/create',"\App\Http\Controllers\Admins\SlideController@create")->name('slide.create');
    Route::post('/slide/create',"\App\Http\Controllers\Admins\SlideController@store")->name('slide.store');
    Route::get('/slide/{id}/delete',"\App\Http\Controllers\Admins\SlideController@destroy")->name('slide.delete');
    Route::get('/slide/{id}/edit',"\App\Http\Controllers\Admins\SlideController@edit")->name('slide.edit');
    Route::post('/slide/{id}/edit',"\App\Http\Controllers\Admins\SlideController@update")->name('slide.update');
});
Auth::routes();

