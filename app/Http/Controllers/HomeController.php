<?php

namespace App\Http\Controllers;

use App\Models\TopicMessage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function testIndex(){

        //直接这么传递数据不能进行页面的刷新
//        $data = TopicMessage::with('user')->get();
//        return view('html.wishWall.wall_2')->with('dataList',$data);
        return view('html.wishWall.wall_2');
    }

    public function getWallMessage(){
        $rt  = ['status'=>200, 'msg'=>'', 'data'=>(object)[]];
        $rt['data'] = TopicMessage::with('user')->get();
        return response()->json($rt);
    }


    public function testImage(){
        return view('html.wishWall.image');
    }

    public function testImage2(){
    return view('html.wishWall.image_2');
}

}
