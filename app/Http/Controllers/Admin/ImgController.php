<?php

namespace App\Http\Controllers\Admin;

use App\Models\ImgTest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImgController extends Controller
{
    //图片测试
    public function getAllImg(){
        $rt=['status'=>200, 'msg'=>'','data'=>(object)[]];
        $rt['data'] = ImgTest::all();
        return response()->json($rt);
    }


}
