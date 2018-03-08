<?php
/**
 * Created by PhpStorm.
 * User: yy
 * Date: 2018/3/7
 * Time: 17:55
 */

namespace App\Http\Controllers\Admin;


use App\Models\User;

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


}