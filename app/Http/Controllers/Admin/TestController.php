<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Res\Admin\UserRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    //测试功能1 在controller中使用构造

   /* protected $users;


    public function __construct()
    {
        return $this->users = UserRepo::main();
    }



    public function show($id){
        $user = $this->users->find($id);

        dd($user);
    }*/

    public function showForm(){
        return view('admin.test');
    }



    public function dataTransport(Request $request)
    {
        // 将姓名填充到数组中
        $a[] = "Anna";
        $a[] = "Brittany";
        $a[] = "Cinderella";
        $a[] = "Diana";
        $a[] = "Eva";
        $a[] = "Fiona";
        $a[] = "Gunda";
        $a[] = "Hege";
        $a[] = "Inga";
        $a[] = "Johanna";
        $a[] = "Kitty";
        $a[] = "Linda";
        $a[] = "Nina";
        $a[] = "Ophelia";
        $a[] = "Petunia";
        $a[] = "Amanda";
        $a[] = "Raquel";
        $a[] = "Cindy";
        $a[] = "Doris";
        $a[] = "Eve";
        $a[] = "Evita";
        $a[] = "Sunniva";
        $a[] = "Tove";
        $a[] = "Unni";
        $a[] = "Violet";
        $a[] = "Liza";
        $a[] = "Elizabeth";
        $a[] = "Ellen";
        $a[] = "Wenche";
        $a[] = "Vicky";

        //从请求URL地址中获取 q 参数
//        $q = $_GET["q"];

        $q = $request->get('q');

//        $q = $request->all();
        $hint = "";
        //查找是否由匹配值， 如果 q>0
        if (strlen($q) > 0) {
            for ($i = 0; $i < count($a); $i++) {
                if (strtolower($q) == strtolower(substr($a[$i], 0, strlen($q)))) {
                    $hint .= $a[$i] . ' ,';

//                    if ($hint == "") {
//                        $hint = $a[$i];
//                    } else {
//                        $hint = $hint . " , " . $a[$i];
//                    }
                }
            }
        }

        // 如果没有匹配值设置输出为 "no suggestion"
        if ($hint == "") {
            $response = "no suggestion";
        } else {
            $response = rtrim($hint, ',');
        }

        //输出返回值
//        return $response;
//
        $rt = ['status'=>200, 'msg'=>'', 'data'=>(object)[]];
        $rt['data'] = $response;
        return response()->json($rt);
    }





    public function getAdmin(){
        $rt = ['status'=>200, 'msg'=>'', 'data'=>(object)[]];
//        $rt['data'] = User::where('id','>',1)->get('id','name','email');
        $rt['data'] = User::all();
        return response()->json($rt);
    }




}
