<?php
/**
 * Created by PhpStorm.
 * User: 益彩通
 * Date: 2017-11-29
 * Time: 18:51
 */

// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');


//入口文件，绑定模块，控制器和方法都可以，只要绑定一个，以后访问入口文件直接跳到绑定的内容,不可以在进入别的控制器
//http://127.0.0.1/thinkphp5/public/index1.php/comm 入口文件index1.php，直接输入comm，就访问到了admin/index/comm方法了
define("BIND_MODULE",'admin/index');

// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
