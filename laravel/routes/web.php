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

Route::get('/', 'Index\IndexController@index');//首页
Route::any('/login', 'Login\IndexController@index');//登录页面
Route::any('/login/login', 'Login\IndexController@login');//登录验证
Route::any('/test', 'TestController@test');
Route::any('/verify',function (){
    //注册验证码
    return '正正真帅';
});
Route::any('/sign_in','Login\IndexController@sign_in');
