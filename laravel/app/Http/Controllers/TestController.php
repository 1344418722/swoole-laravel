<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TestController extends Controller
{

    function index()
    {
        $redis=new \Redis();
        $redis->connect('127.0.0.1',6379);
        dump($redis->keys('*'));
        $db=DB::table('swoole')->get();
        dump($db);
        echo 1;
    }
    function test(){
        phpinfo();
    }
    public function server(){

    }
}
