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
    Route::post('aaa_do','Login\LoginController@aaa_do');
    //注册
    Route:: get('register', 'Login\RegisterController@index');
    Route:: post('addregister', 'Login\RegisterController@addregister');
    Route:: post('send', 'Login\RegisterController@send');
    //退出
    Route:: get( 'logout', 'Login\LoginController@logout');
});
//客户
Route::prefix('User')->group(function () {
    Route::any('index', 'User\UserController@index');
    Route::any('list', 'User\UserController@list');
    Route::any('checkName', 'User\UserController@checkName');
    Route::any('add_do', 'User\UserController@add_do');
    Route::any('del/{id}', 'User\UserController@del');
    Route::get('update/{id}','User\UserController@update');
    Route::post('update_do/{id}','User\UserController@update_do');

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
<<<<<<< HEAD
    Route::any('list','Supplier\SupplierController@list');
    Route::any('add','Supplier\SupplierController@add');
    Route::any('del/{s_id}','Supplier\SupplierController@del');
    Route::any('edit/{s_id}','Supplier\SupplierController@edit');
    Route::any('checkname','Supplier\SupplierController@checkname');
    Route::post('update/{s_id}','Supplier\SupplierController@update');
    
});
=======
});
>>>>>>> 32707f455b5449d8bccfaaafd30fd3a99e69b7a4
