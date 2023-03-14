<?php
use app\ExceptionHandle;
use app\Request;

// 容器Provider定义文件
return [
    'think\Request'          => Request::class,
//    'think\exception\Handle' => ExceptionHandle::class,
    'think\exception\Handle' => \app\exception\ExceptionHandle::class,//自定义异常接管
];
