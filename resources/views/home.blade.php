@extends('layouts.app')
{{--<style>--}}
{{--div {--}}
{{--margin-left: 100px;--}}
{{--width: 400px;--}}
{{--height: 400px;--}}
{{--}--}}
{{--</style>--}}
@section('content')
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-8 col-md-offset-2">--}}
    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-heading">Dashboard</div>--}}

    {{--<div class="panel-body">--}}
    {{--You are logged in!--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    <button class="btn">原始样式</button>
    <br>
    <button class="btn btn-default">默认样式</button>
    <br>
    <button class="btn btn-primary">提交按钮</button>
    <br>
    <button class="btn btn-success">成功按钮</button>
    <br>
    <button class="btn btn-info">信息按钮</button>
    <br>
    <button class="btn btn-warning">警告按钮</button>
    <br>
    <button class="btn btn-link">超链接按钮</button>
    <br>
    <button class="btn btn-lg">大按钮</button>
    <br>
    <button class="btn btn-sm">小按钮</button>
    <br>
    <button class="btn btn-xs">最小按钮</button>
    <br>
    <button class="btn btn-block">宽屏按钮</button>
    <br>
    <button class="btn active">激活状态按钮</button>
    <br>
    <button class="btn disabled">无效按钮</button>
    <br>
    <button class="btn btn-xs btn-danger disabled">红包过期</button>

    <br>
    <p>===========================================================================</p>


    <div class="pp_table_test" style="margin-left: 100px; width: 400px;">
        <h2>bootstrap基本表格设计</h2>
        <table class="table">
            <thead>
            <th>姓名</th>
            <th>岗位</th>
            <th>状态</th>
            </thead>
            <tr>
                <td>张三</td>
                <td>前端开发</td>
                <td>面试中</td>
            </tr>
            <tr>
                <td>李四</td>
                <td>java开发</td>
                <td>待筛选</td>
            </tr>
            <tr>
                <td>冯田</td>
                <td>前端开发</td>
                <td>已回绝</td>
            </tr>
            <tr>
                <td>周舟</td>
                <td>算法工程师</td>
                <td>面试中</td>
            </tr>
            <tr>
                <td>孙大大</td>
                <td>前端开发</td>
                <td>三面</td>
            </tr>
            <tr>
                <td>刘萌</td>
                <td>数据库工程师</td>
                <td>简历待筛选</td>
            </tr>
        </table>

        <h2>带斑马线表格</h2>
        <table class="table table-striped">
            <thead>
            <th>姓名</th>
            <th>岗位</th>
            <th>状态</th>
            </thead>
            <tr>
                <td>张三</td>
                <td>前端开发</td>
                <td>面试中</td>
            </tr>
            <tr>
                <td>李四</td>
                <td>java开发</td>
                <td>待筛选</td>
            </tr>
            <tr>
                <td>冯田</td>
                <td>前端开发</td>
                <td>已回绝</td>
            </tr>
            <tr>
                <td>周舟</td>
                <td>算法工程师</td>
                <td>面试中</td>
            </tr>
            <tr>
                <td>孙大大</td>
                <td>前端开发</td>
                <td>三面</td>
            </tr>
            <tr>
                <td>刘萌</td>
                <td>数据库工程师</td>
                <td>简历待筛选</td>
            </tr>
        </table>

        <h2>带有边框的表格</h2>
        <table class="table table-bordered">
            <thead>
            <th>姓名</th>
            <th>岗位</th>
            <th>状态</th>
            </thead>
            <tr>
                <td>张三</td>
                <td>前端开发</td>
                <td>面试中</td>
            </tr>
            <tr>
                <td>李四</td>
                <td>java开发</td>
                <td>待筛选</td>
            </tr>
            <tr>
                <td>周舟</td>
                <td>算法工程师</td>
                <td>面试中</td>
            </tr>
            <tr>
                <td>孙大大</td>
                <td>前端开发</td>
                <td>三面</td>
            </tr>
        </table>

        <h2>鼠标悬停状态的表格</h2>
        <table class="table table-hover">
            <thead>
            <th>姓名</th>
            <th>岗位</th>
            <th>状态</th>
            </thead>
            <tr>
                <td>张三</td>
                <td>前端开发</td>
                <td>面试中</td>
            </tr>
            <tr>
                <td>李四</td>
                <td>java开发</td>
                <td>待筛选</td>
            </tr>
            <tr>
                <td>周舟</td>
                <td>算法工程师</td>
                <td>面试中</td>
            </tr>
            <tr>
                <td>孙大大</td>
                <td>前端开发</td>
                <td>三面</td>
            </tr>
        </table>

        <h2>多种表格效果整合</h2>
        <table class="table table-bordered table-striped table-hover table-condensed">
            <thead>
            <th>姓名</th>
            <th>岗位</th>
            <th>状态</th>
            </thead>
            <tr>
                <td>张三</td>
                <td>前端开发</td>
                <td>面试中</td>
            </tr>
            <tr class="success">
                <td>李四</td>
                <td>java开发</td>
                <td>待筛选</td>
            </tr>
            <tr class="alert-success">
                <td>周舟</td>
                <td>算法工程师</td>
                <td>面试中</td>
            </tr>
            <tr class="info">
                <td>孙大大</td>
                <td>前端开发</td>
                <td>三面</td>
            </tr>
            <tr class="active">
                <td>张三</td>
                <td>前端开发</td>
                <td>面试中</td>
            </tr>
            <tr class="warning">
                <td>张三</td>
                <td>前端开发</td>
                <td>面试中</td>
            </tr>
        </table>
    </div>


    <div class="pp_image_test" style="margin-left: 100px">
        <h2>圆角：</h2>
        {{--blade模块的写法和原生html不同--}}
        {{--<img src="../../public/upload/kai.jpg" class="img-rounded">--}}
        <img src="{{asset('/upload/kai.jpg')}}" class="img-rounded" style="width: 200px">
        <img src="{{asset('/upload/kai.jpg')}}" class="img-circle" style="width: 200px">
        <img src="{{asset('/upload/kai.jpg')}}" class="img-thumbnail" style="width: 200px">

        {{--img图片属性浮动??--}}
    </div>


    <h2>表单</h2>
    <form action="" style="width: 300px; height: 400px;margin-left: 50px;">
        文本框：<input type="text" class="form-control">
        密码：<input type="password" class="form-control">
        <textarea class="form-control" name="t1" id="t1" cols="30" rows="10" placeholder="个人简介"></textarea>
        {{--select option value等参数？？--}}
        技能:<select class="form-control" name="" id="">
            <option value="">HTML</option>
            <option value="">CSS</option>
            <option value="">JavaScript</option>
            <option value="">jQuery</option>
            <option value="">BootStrap</option>
            <option value="">Node.js</option>
            <option value="">React</option>
        </select>
    </form>



    <h2>文本</h2>
    <div class="text-muted">- 淡灰色文本`text-muted`：常用于说明性文字</div>
    <div class="text-primary">- 强调文本 `text-primary`：强调行文字</div>
    <div class="text-success">- 操作成功文本`text-success`：提示成功行为</div>
    <div class="text-info">- 提示信息文本`text-info`：指导性文字</div>
    <div class="text-warning">- 警告文本`text-warning`：警告文字</div>
    <div class="text-danger">- 危险操作文本`text-danger`危险操作，如删除</div>



    <h2>背景</h2>
    <div class="bg-primary">强调背景</div>
    <div class="bg-success">操作成功背景</div>
    <div class="bg-info">信息提示文字背景</div>
    <div class="bg-warning">警告文字提示背景</div>
    <div class="bg-danger">危险文字提示背景</div>





    <h2>其他</h2>
    <button type="button" class="close" style="color:#Ff0000;">&times;</button>

    <select class="caret" name="" id="">
        <option value="">草莓</option>
        <option value="">芒果</option>
        <option value="">香蕉</option>
        <option value="">蓝莓</option>
    </select>

    <div style="width: 250px; height: 50px;">
        <div class="pull-left"> 左浮动</div>
        <div class="pull-right">右浮动</div>
    </div>
    <div class="show">显示</div>
    <div>0000</div>
    <div class="hidden">隐藏</div>
    <div>3333</div>
    <div class="invisible">444</div>
    <div>5555</div>





    <h2>栅格布局</h2>
    <div class="container">
        <div class="row">
            <div class="col-xs-22">占12列</div>
        </div>
        <div class="row">
            <div class="col-xg-6">占12列</div>
            <div class="col-lg-5"></div>
        </div>
    </div>


    <h2>字体图标</h2>
    <h5>一个字体图标</h5>
    <span class="glyphicon glyphicon-asterisk"></span>
    <span class="glyphicon glyphicon-asterisk text-success"></span>



    <h3>下拉菜单</h3>
    <div style="width: 200px; height: 200px;">
        <div class="dropdown">
            <button type="button" class="btn dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">
                Hello
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li>
                    <a href="#">111</a>
                </li>
                <li role="presentation">
                    <a href="#">222</a>
                </li>
                <li role="presentation">
                    <a href="#">333</a>
                </li>
                <li role="presentation">
                    <a href="#">444</a>
                </li>
            </ul>
        </div>
    </div>

    <div style="width: 200px; height: 200px;">
        <div class="dropdown">
            <button type="button" class="btn dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown">
                Hello
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li class="dropdown-header">
                    <a href="#">111</a>
                </li>
                <li>
                    <a href="#">111</a>
                </li>
                <li class="dropdown-header">
                    3-4标题（不可点击）
                </li>
                <li role="presentation">
                    <a href="#">222</a>
                </li>
                <li role="presentation">
                    <a href="#">333</a>
                </li>
                <li role="presentation">
                    <a href="#">444</a>
                </li>
            </ul>
        </div>
    </div>

    <div style="width: 200px; height: 200px;">
        <div class="dropdown">
            <button type="button" class="btn dropdown-toggle" id="dropdownMenu3" data-toggle="dropdown">
                Hello
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li class="dropdown-header">
                    <a href="#">111</a>
                </li>
                <li>
                    <a href="#">111</a>
                </li>
                <li class="dropdown-header">
                    3-4标题（不可点击）
                </li>
                <li role="presentation">
                    <a href="#">222</a>
                </li>
                <li role="presentation">
                    <a href="#">333</a>
                </li>
                <li role="presentation">
                    <a href="#">444</a>
                </li>
            </ul>
        </div>
    </div>


@endsection
