<?php
return [
    'host' => 'localhost',                //服务监听ip
    'port' => 9501,                     //监听端口
    'time_zone' => 'Asia/Shanghai',     //时区
    'swoole_setting' => [               //swoole配置
        'worker_num' => 10,              //worker进程数量
        'daemonize' => 0,               //是否开启守护进程
    ]
];