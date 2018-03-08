<?php

namespace App\Res\Admin;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class Email {

    public static function main($users){

        $text = '这是一个邮件测试';
//        $view = view('admin.index');
//        $view = view('welcome');

        //@todo:函数未曾找到
//        Mail::send('welcome', [], function(){})->to($toUser);
        $comment = '凡人';
        Log::info($users);
        Mail::send('welcome', [], function($message) use ($users){
            foreach ($users as $toUser) {
                $message->to($toUser, 'hello')->subject('test');
            }
        });
//        Mail::raw($text, function ($message) use ($comment) {
//            $to = [
//                '251852411@qq.com',
//            ];
//
//            foreach ($to as $val) {
//                $message->to($val)->subject($comment);
//            }
//
//        });
    }

}


