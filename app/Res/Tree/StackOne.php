<?php
/**
 * Created by PhpStorm.
 * User: yy
 * Date: 2018/4/23
 * Time: 14:06
 */

namespace App\Res\Tree;


class StackOne
{
    public static $dataInfo = [];
    public static $theMax = 10;
    public static $length = 0;

    public function addData($data){
        if (self::$length >= self::$theMax) {
            return false;
        }
        array_push(self::$dataInfo, $data);
        self::$length ++ ;
    }

    public function outData(){
        if (self::$length <= 0) {
            return false;
        }
        $data = array_pop(self::$dataInfo);
        self::$length -- ;
        return $data;
    }

    public function getAll(){
        if (self::$dataInfo) {
            return self::$dataInfo;
        }
        return false;
    }



}