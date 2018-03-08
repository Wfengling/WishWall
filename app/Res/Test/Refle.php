<?php
/**
 * Created by PhpStorm.
 * User: yy
 * Date: 2017/5/26
 * Time: 15:36
 */

namespace App\Res\Test;


class Refle{

    public $one = '';
    public $two = '';

    //Constructor
    public function __construct(){

    }

    //print variable one
    public function echoOne()
    {
        echo $this->one."\n";
    }

    //print variable two
    public function echoTwo()
    {
        echo $this->two."\n";
    }
}

