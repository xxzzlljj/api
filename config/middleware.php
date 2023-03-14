<?php
// 中间件配置
use app\middleware\Api;
use app\middleware\Ip;
use app\middleware\Jwt;
use app\middleware\Rsa;

return [
    // 别名或分组
    'alias'    => [
        'api'  => Api::class,
        'rsa'  => Rsa::class,
        'jwt'  => Jwt::class,
        'ip'   => Ip::class,
    ],
    // 优先级设置，此数组中的中间件会按照数组中的顺序优先执行
    'priority' => [],
];
