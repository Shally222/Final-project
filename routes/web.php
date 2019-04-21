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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');


Route::resource('slides', 'SliderController');

Route::resource('products', 'UploadController');

Route::get('/users','UserController@index');

Route::get('/users/necklace', 'UserController@necklace');

Route::get('/users/bracelets', 'UserController@bracelets');

Route::get('/users/accessories', 'UserController@accessories');

Route::get('/shops', function () {
    return view('shops.index');
});

Route::get('/shops/Huddersfield', function () {
    return view('shops.Huddersfield');
});

Route::get('/shops/London', function () {
    return view('shops.London');
});

Route::get('/shops/Shenzhen', function () {
    return view('shops.Shenzhen');
});

Route::get('/users/{product}','UserController@show');

//支付宝支付处理
Route::get('/pay', function () {
    return view('pay');
});
//支付后跳转页面
Route::post('alipay/return','AlipayController@result');
