<?php
/**
 * Created by PhpStorm.
 * User: yy
 * Date: 2018/2/24
 * Time: 14:38
 */

namespace App\Repositories\Pool;


class Worker
{

    /**
     * Worker constructor.
     */
    public function __construct()
    {
    }

    public function run($image, array $callback){
        call_user_func($callback, $this);
    }

}