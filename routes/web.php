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

// Route::get('/', function () {
//     return view( 'index/index');
// });
//后台index页面
Route::get('/', function () {
    return view('index/index');
});
//登入页面
Route::prefix('Login')->group(function () {
    //登入
    Route::get('login', 'Login\LoginController@index');
    //注册
    Route:: get('register', 'Login\RegisterController@index');
    //退出
    Route:: get( 'logout', 'Login\LoginController@logout');
});
//客户
Route::prefix('User')->group(function () {
    Route::get('index', 'User\UserController@index');
    Route::get('list', 'User\UserController@list');
});
//产品分类
Route::prefix('Goods')->group(function () {
    //产品添加
    Route::get('index', 'Goods\GoodsController@index');
    Route::post('doadd', 'Goods\GoodsController@doadd');
    //删除
    Route::any('del','Goods\GoodsController@del');
    Route::get('list', 'Goods\GoodsController@list');
});
//供应商
Route::prefix('Supplier')->group(function () {
    Route::get('index', 'Supplier\SupplierController@index');
});