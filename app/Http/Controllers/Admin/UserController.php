<?php
/**
 * Created by PhpStorm.
 * User: yy
 * Date: 2018/3/7
 * Time: 17:55
 */

namespace App\Http\Controllers\Admin;


use App\Models\User;
use Illuminate\Support\Facades\Redis;

class UserController
{

    /**
     * 获取用户列表
     */
    public function getUserList()
    {
        $rt = ['status' => 200, 'msg' => '', 'data' => (object)[]];

        $rt['data'] = User::all();

        return response()->json($rt);
    }


    public function testUser(){
        $key = 'user:name:6';
        $user = User::find(6);

        if ($user){
            Redis::set($key,$user->name);
        }

        //@todo:redis connectionExceptionError
        //本地测试中 需要安装redis和phpinfo项对应的版本，配置连接服务才能正常使用redis缓存。

        if (Redis::exists($key)) {
            dd(Redis::get($key));
        }

        dd($user);

        return 1;
    }


}