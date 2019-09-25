<?php
//服务器代码
//创建websocket 服务器
$ws = new swoole_websocket_server("0.0.0.0",9501);
$ws->set(['daemonize'=>true]);
// open
$ws->on('open',function($ws,$request){
    echo "新用户 $request->fd 加入。\n";
    $GLOBALS['fd'][$request->fd]['id'] = $request->fd;//设置用户id
});
//message
$ws->on('message',function($ws,$request){
    $msg = $request->data;
    foreach($GLOBALS['fd'] as $i){
        $ws->push($i['id'],$msg);

    }
//    }
});
//close
$ws->on('close',function($ws,$request){
    echo "客户端-{$request} 断开连接\n";
    unset($GLOBALS['fd'][$request]);//清楚连接仓库
});
$ws->start();
