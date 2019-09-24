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
Route::any('/test', 'TestController@test');
//网站首页
Route::get('/', 'Index\IndexController@index');//网站首页
Route::any('/session_user_name',function (){
    //判断用户是否登录
    $sess_user_id=session('user_id');
    if(empty($sess_user_id)){
        return 0;
    }else{
        return $sess_user_id;
    }
});
//发布
Route::any('/sw_websocket_redis','Index\IndexController@sw_websocket_redis');
//发布
Route::any('/sw_redis','Index\IndexController@sw_redis');
//消息推送
//登录
Route::any('/login', 'Login\IndexController@index');//登录页面
Route::any('/login/login', 'Login\IndexController@login');//登录验证
Route::any('/login/reset','Login\IndexController@reset');//重置密码
Route::any('/sign_in','Login\IndexController@sign_in');//注册账户
Route::any('/verify',function (){
    //注册验证码
    return '正正真帅';
});


