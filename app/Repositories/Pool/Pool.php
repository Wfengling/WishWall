<?php
/**
 * Created by PhpStorm.
 * User: yy
 * Date: 2018/2/24
 * Time: 11:30
 */

namespace App\Repositories\Pool;


class Pool
{

    private $instances = [];

    private $class ;

    /**
     * Pool constructor.
     */
    public function __construct($class)
    {
        $this->class = $class;

        /**
         * ctrl shift enter智能完善代码 if……
         */
    }

    public function get(){
        if (count($this->instances) > 0) {
            return array_pop($this->instances);
        }

        return new $this->class();
    }


    public function dispose($instance){
        $this->instances[] = $instance;
    }


}