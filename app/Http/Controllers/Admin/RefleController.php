<?php

namespace App\Http\Controllers\Admin;

use App\Res\Test\Refle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use ReflectionClass;


class RefleController extends Controller
{
    //调试php反射机制
    public function index(){

        $repo = new Refle();
        $reflector = new ReflectionClass(get_class($repo));
        //@todo: 这种写法需要将文件引用或者在同一个类文件中不会出错
        //@todo: http://www.cnblogs.com/jiqing9006/p/5171327.html
//        $reflector = new ReflectionClass(get_class('Refle'));
        dd($reflector);
        $properties = $reflector->getProperties();

        $i = 1;
        foreach($properties as $property)
        {
            //Populating properties
            $repo->{$property->getName()}=$i;
            //Invoking the method to print what was populated
            $repo->{"echo".ucfirst($property->getName())}()."\n";

            $i++;
        }
    }

}


