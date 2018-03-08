<?php

namespace App\Http\Controllers\Admin;

use App\Res\Admin\Email;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * 1. 页面存在，以及上传数据
     * 2. 功能方面的存在。
     * 3. 带有文本格式
     *
     * 简单的邮件
     * 带有附近的邮件
     * 带有格式的邮件
     */

    /**
     * @return \Illuminate\Http\JsonResponse
     *
     * git bash   and github
     *
     * http://blog.lmlphp.com/archives/7/The_use_tutorial_of_git_bash_and_how_to_start_with_github
     *
     * 问题1：
     * TokenMismatchException in VerifyCsrfToken.php line 68:
     * http://www.cnblogs.com/HD/p/4555369.html
     *
     *
     * laravel 邮件腾讯企业的host和端口的正确填写
     * laravel官方文档上面的各种驱动都是收费项目。
     *
     */

    public function send(){

        $rt = [
            'status' => 200,
            'msg' => '',
            'data' => null,
        ];
        $users = [
            '251852411@qq.com'
        ];

        Email::main($users);


        return response()->json($rt);
    }

    public function getWelcome(){

        return view('welcome');
    }

}
