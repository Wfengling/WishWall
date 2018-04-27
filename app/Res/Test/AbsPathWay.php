<?php
/**
 * Created by PhpStorm.
 * User: yy
 * Date: 2018/4/18
 * Time: 16:25
 */

namespace App\Res\Test;


abstract class AbsPathWay
{


    //初始化矩阵
    public abstract function init();


    //检查点的当前节点的合法性
    public abstract function checkPoint();


    //获取节点
    public abstract function getPath();


    //当前节点是否走过
    public abstract function getValue();


    //寻路
    public abstract function findPath();



}