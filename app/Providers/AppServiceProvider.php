<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * 10/17
         * 在这里面注册服务容器是一个依赖注入
         * 要实现控制反转，这里面才没有写入任何代码
         */
//        $this->app->bind('x', function(){
//            return new X();
//        });
    }
}
