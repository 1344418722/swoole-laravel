<?php
namespace App\Http\Controllers\Index;
use App\Http\Controllers\Controller;

class IndexController extends Controller{
    function index()
    {
       return view('index.index');
    }

    function sw_websocket_redis(){
        $redis = new \Redis();
        $redis->connect('127.0.0.1', 6379);
        $message='新年快乐';
        $ret=$redis->publish('中央广播电台',$message);

        return '推送给了'.$ret.'个用户奥';
    }
    function sw_redis(){


    }





}