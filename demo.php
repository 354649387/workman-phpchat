<?php
session_start();

use Workerman\Worker;

require_once __DIR__ . '/vendor/autoload.php';

// 创建一个Worker监听2345端口，使用http协议通讯
$worker = new Worker("websocket://0.0.0.0:8686");

// 启动1个进程对外提供服务
$worker->count = 1;


//接收到浏览器发送的数据
$worker->onMessage = function ($connection, $data) use ($worker) {

    $dataArr = json_decode($data, true);


    //新用户进入信息
    if ($dataArr['type'] === 1) {

        //新用户信息存入session
        $_SESSION['chat_list'][$dataArr['name']] = $dataArr;

        //总人数
        $count = count($_SESSION['chat_list']);

        $dataArr['count'] = $count;

        $dataArr['live_list'] = $_SESSION['chat_list'] ?: [];

        $json_data = json_encode($dataArr);


        //群发告知有人加入
        foreach ($worker->connections as $c) {

            $c->send($json_data);

        }

        //发送消息
    } else if ($dataArr['type'] === 2) {


        $json_data = json_encode($dataArr);

        //正常将消息群发给所有人
        foreach ($worker->connections as $c) {

            $c->send($json_data);

        }

        //前台用户退出连接
    } else if ($dataArr['type'] === 3) {

        //根据name删除对应的session
        unset($_SESSION['chat_list'][$dataArr['name']]);

        //总人数
        $count = count($_SESSION['chat_list']);

        $dataArr['count'] = $count;

        $dataArr['live_list'] = $_SESSION['chat_list'];

        $json_data = json_encode($dataArr);

        //正常将消息群发给所有人
        foreach ($worker->connections as $c) {

            $c->send($json_data);

        }

    }


};


// 运行worker
Worker::runAll();