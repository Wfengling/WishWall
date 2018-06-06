<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});*/



/**
 * admin
 */
//Route::group(['middleware'=>'web'], function(){
//
//    Route::get('/index', function(){
//        return view('admin.index', ['name'=>'非常君']);
//    });
//
//    Route::group(['namespace'=>'Auth'], function(){
//        Route::any('showLoginForm', 'LoginController@showLoginForm');
//    });
//
//    Route::get('home', 'MailController@getWelcome');
//});
//




Auth::routes(); //Router:995

Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');


Route::get('/test/transport', 'Admin\TestController@dataTransport');
Route::get('/test/form', 'Admin\TestController@showForm');

Route::get('/test/{id}', 'Admin\TestController@show');
Route::get('/user', 'Admin\TestController@getAdmin');

Route::get('/mail', 'Admin\MailController@send');

Route::get('/refle', 'Admin\RefleController@index');


//自定义资源路径
//如果必须要在资源控制器里添加额外的路由，需要在调用 Route::resource 之前去定义它们：
//当产品完善之后， 可以使用路由缓存来减少路由注册有需要的时间。

//wall
Route::get('/wall','HomeController@testIndex'); //message首页
Route::resource('/message', 'Admin\MessageBoardController');






Route::get('/img','HomeController@testImage');
Route::get('/img2','HomeController@testImage2');


//获取获取图片
Route::get('/imgAll','Admin\ImgController@getAllImg');
Route::get('/userAll', 'Admin\UserController@getUserList');
Route::get('/userTest', 'Admin\UserController@testUser');








//workMan
Route::resource('/testOne', 'Workman\TestOneController');


