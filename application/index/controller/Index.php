<?php
namespace app\index\controller;
use app\common\controller\Index as commonIndex ;
use think\config;

class Index
{
    public function index()
    {
        echo "this is index index index";
    }

    public function comm(){

        echo "这是index的模块，调用common模块的index";
        echo "<br>";

        $common = new commonIndex();
        echo $common->index();
    }

    public function peizhi(){
        echo "这是index的模块，测试读取的配置文件";
        var_dump(config::get());
    }
}
