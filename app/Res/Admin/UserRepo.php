<?php
/**
 * Created by PhpStorm.
 * User: yy
 * Date: 2017/5/18
 * Time: 10:55
 */

namespace App\Res\Admin;



use App\Models\User;

class UserRepo {

    public static function main(){
        return User::all();
    }

}