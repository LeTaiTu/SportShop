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
Auth::routes();
// trang chu
Route::get('/', "\App\Http\Controllers\HomeController@index")->name('home');

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

// thay doi thong tin khach hang
Route::get('/change_info_user/{id}', "\App\Http\Controllers\HomeController@edit")->name('change_user');

Route::post('/change_info_user/{id}', "\App\Http\Controllers\HomeController@update")->name('edit_user');

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

// chi tiet san pham
    Route::get('/{id}/{size}/detail', "\App\Http\Controllers\CartController@detail")->name('detail.product');
// them vao gio hang
    Route::post('/{id}/{size}/detail', "\App\Http\Controllers\CartController@getAddtoCart")->name('detail.product');
// trang dat hang
    Route::get('/order', "\App\Http\Controllers\CartController@getOrder")->name('order.product');
// group admin
Route::prefix('admin')->group(function() {
    // login
	Route::get('/', "\App\Http\Controllers\Admins\LoginController@showLoginForm");
	Route::post('/', "\App\Http\Controllers\Admins\LoginController@store")->name('admin');
    // logout
    Route::get('/logout', "\App\Http\Controllers\Admins\LoginController@logout")->name('admin.logout');
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

    // Sản phẩm
    Route::get('/product', "\App\Http\Controllers\Admins\ProductController@index")->name('admin.product');
    Route::get('/product/create', "\App\Http\Controllers\Admins\ProductController@create")->name('product.create');
    Route::post('/product/create', "\App\Http\Controllers\Admins\ProductController@create")->name('product.create');

    Route::get('/product/createClothes', "\App\Http\Controllers\Admins\ProductController@createClothes")->name('product.createClothes');
    Route::get('/product/createShoes', "\App\Http\Controllers\Admins\ProductController@createShoes")->name('product.createShoes');
    Route::get('/product/createFoods', "\App\Http\Controllers\Admins\ProductController@createFoods")->name('product.createFoods');
    Route::get('/product/createAcces', "\App\Http\Controllers\Admins\ProductController@createAcces")->name('product.createAcces');

    Route::post('/product/createClothes',"\App\Http\Controllers\Admins\ProductController@store")->name('product.store');
    Route::post('/product/createShoes',"\App\Http\Controllers\Admins\ProductController@storeshoes")->name('product.storeshoes');
    Route::post('/product/createFoods',"\App\Http\Controllers\Admins\ProductController@storefoods")->name('product.storefoods');
    Route::post('/product/createAcces',"\App\Http\Controllers\Admins\ProductController@storeacces")->name('product.storeacces');

    Route::get('/product/{id}/edit',"\App\Http\Controllers\Admins\ProductController@edit")->name('product.edit');
    Route::post('/product/{id}/edit',"\App\Http\Controllers\Admins\ProductController@update")->name('product.update');

    // trang kindsport
    Route::get('/kindsport',"\App\Http\Controllers\Admins\KindsportController@index")->name('admin.kindsport');
    Route::post('/kindsport/search',"\App\Http\Controllers\Admins\KindsportController@search")->name('kindsport.search');
    Route::get('/kindsport/create',"\App\Http\Controllers\Admins\KindsportController@create")->name('kindsport.create');
    Route::post('/kindsport/create',"\App\Http\Controllers\Admins\KindsportController@store")->name('kindsport.store');
    Route::get('/kindsport/{id}/delete',"\App\Http\Controllers\Admins\KindsportController@destroy")->name('kindsport.delete');
    Route::get('/kindsport/{id}/edit',"\App\Http\Controllers\Admins\KindsportController@edit")->name('kindsport.edit');
    Route::post('/kindsport/{id}/edit',"\App\Http\Controllers\Admins\KindsportController@update")->name('kindsport.update');
    // trang slide
    Route::get('/slide',"\App\Http\Controllers\Admins\SlideController@index")->name('admin.slide');
    Route::post('/slide/search',"\App\Http\Controllers\Admins\SlideController@search")->name('slide.search');
    Route::get('/slide/create',"\App\Http\Controllers\Admins\SlideController@create")->name('slide.create');
    Route::post('/slide/create',"\App\Http\Controllers\Admins\SlideController@store")->name('slide.store');
    Route::get('/slide/{id}/delete',"\App\Http\Controllers\Admins\SlideController@destroy")->name('slide.delete');
    Route::get('/slide/{id}/edit',"\App\Http\Controllers\Admins\SlideController@edit")->name('slide.edit');
    Route::post('/slide/{id}/edit',"\App\Http\Controllers\Admins\SlideController@update")->name('slide.update');
    
    // trang thanh vien khach hang
    Route::get('/member', "\App\Http\Controllers\Admins\MemberController@index")->name('admin.member');
    Route::post('/member/search', "\App\Http\Controllers\Admins\MemberController@search")->name('member.search');
    Route::get('/member/create',"\App\Http\Controllers\Admins\MemberController@create")->name('member.create');
    Route::post('/member/create',"\App\Http\Controllers\Admins\MemberController@store")->name('member.store');
    Route::get('/member/{id}/delete',"\App\Http\Controllers\Admins\MemberController@destroy")->name('member.delete');
    Route::get('/member/{id}/edit',"\App\Http\Controllers\Admins\MemberController@edit")->name('member.edit');
    Route::post('/member/{id}/edit',"\App\Http\Controllers\Admins\MemberController@update")->name('member.update');

    // trang lien he khach hang
    Route::get('/contact',"\App\Http\Controllers\Admins\ContactController@index")->name('admin.contact');
    Route::post('/contact/search',"\App\Http\Controllers\Admins\ContactController@search")->name('contact.search');
    Route::post('/contact/create',"\App\Http\Controllers\Admins\ContactController@store")->name('contact.store');
    Route::get('/contact/{id}/delete',"\App\Http\Controllers\Admins\ContactController@destroy")->name('contact.delete');

    //trang producer
    Route::get('/producer',"\App\Http\Controllers\Admins\ProducerController@index")->name('admin.producer');
    Route::post('/producer/search',"\App\Http\Controllers\Admins\ProducerController@search")->name('producer.search');
    Route::get('/producer/create',"\App\Http\Controllers\Admins\ProducerController@create")->name('producer.create');
    Route::post('/producer/create',"\App\Http\Controllers\Admins\ProducerController@store")->name('producer.store');
    Route::get('/producer/{id}/delete',"\App\Http\Controllers\Admins\ProducerController@destroy")->name('producer.delete');
    Route::get('/producer/{id}/edit',"\App\Http\Controllers\Admins\ProducerController@edit")->name('producer.edit');
    Route::post('/producer/{id}/edit',"\App\Http\Controllers\Admins\ProducerCo  ntroller@update")->name('producer.update');
});


