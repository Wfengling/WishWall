<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlgorithmController extends Controller
{
    //@todo：次元飞行棋

    /**
     * 算法
     *
     */

    //1约瑟夫环
    /**
     * 模拟法。
     * 此方法简单易懂，但是计算的复杂度较高
     * @param $total 总人数
     * @param $index 被踢序号
     */
    public function JosephusB($total,$index)
    {
        $people = range(1,$total);

        $i = 0;
        while(count($people)>1){
            $i++;
            $head = array_shift($people);
            if ($i%$index != 0 ) {
                array_push($people, $head);
            }
        }

        return $people[0];

    }


    public function JosephusA(){

    }

}
