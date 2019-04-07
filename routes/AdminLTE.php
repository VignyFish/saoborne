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

Route::get('foo', function () {
    return 'Hello World';
});


// 后台目录
Route::namespace('AdminLTE')->group(function () {

    // 跳转提示页
    Route::resource('prompt', 'PromptController');

    // 登录页
    Route::any('login', 'LoginController@login');

    // 登录
    Route::any('passport', 'LoginController@passport');

    // 后台首页
    Route::any('index', 'IndexController@index');







    // 普擎科技友情链接
    Route::any('pqlink', "IndexController@pqlink");
});