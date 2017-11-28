<?php
namespace app\admin\controller;
use app\common\controller\Index as commonIndex ;

class Index
{
    public function index()
    {
        echo " this is admin index index";
    }

    public function comm(){

        echo "这是admin的模块，调用common模块的index";
        echo "<br>";

        $common = new commonIndex();

        echo $common->index();
    }
}
