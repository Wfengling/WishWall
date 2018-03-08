<?php
/**
 * Created by PhpStorm.
 * User: yy
 * Date: 2017/5/24
 * Time: 11:58
 */

namespace App\Res\Test;


class Auto {


    //自动加载php的魔术函数
    public function __autoload($class_name){
        $path = str_replace('_', DIRECTORY_SEPARATOR, $class_name);
        require_once $path.'.php';
    }

}