<?php

// 跑得快的php框架

// 应用入口文件 
namespace run;

// 应用目录为当前目录
define('APP_PATH', __DIR__ . '/../');

// 加载框架文件
require APP_PATH . 'core/Base.php';

(new Base())->start();