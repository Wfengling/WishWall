@extends('layouts.app')

@section('content')


    {{--图标组件--}}
    {{--<button type="button" class="btn btn-default" aria-label="Left Align">--}}
    {{--<span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>--}}
    {{--</button>--}}
    {{--<button type="button" class="btn btn-default btn-lg">--}}
    {{--<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star--}}
    {{--</button>--}}

    {{--大屏--}}
    <div class="jumbotron">
        <h1>Hello, world!</h1>

        <p>天地不语 劫祸化身 杀伐净世</p>

        <p>.........</p>
        {{--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>--}}

        {{--动态不能显示？？？？--}}
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            message
        </button>
        {{--myModal--}}
        {{--tabindex="-1" => esc可以关闭弹窗--}}
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <p>选择用户(下拉框选择)</p>
                        <select class="form-control" id="user_select" name="" style="width:40%" required>
                            {{--增加用户选择--}}
                        </select>

                        <p>留言内容</p>
                        <textarea class="form-control" name="inputComment" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button data-dismiss="modal" class="btn btn-primary" id="bth_2" type="button">发表</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{--进度条--}}
    {{--<div class="progress">--}}
    {{--<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;">--}}
    {{--0%--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="progress">--}}
    {{--<div class="progress-bar" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 2%;">--}}
    {{--2%--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--留言板列表显示--}}
    {{--留言板提交之后 刷新问题--}}
    <div class="panel panel-primary">
        {{--@foreach($dataList as $data)--}}
        {{--<div class="panel-title">--}}
        {{--{{$data->user->name}}--}}
        {{--</div>--}}
        {{--<div class="panel-body">--}}
        {{--{{$data->topic}}--}}

        {{--</div>--}}
        {{--@endforeach--}}
    </div>


    <nav>
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>


    {{--js引用的位置会对函数产生影响--}}
    <script>
        //        $(document).ready(function () {
        //            //点击隐藏p元素. hide show  toggle作为隐藏显示切换
        //
        //            $("#bth_2").click(function(){
        //                $("p").hide();
        //            });
        //        });

        $(function () {
            //select option 选择框加载
            //设置文本text, 设置表单val
            //option中设置属性，
            $.ajax({
                type: "get",
                url: "/userAll",
                data: {},
                dataType: "json",
                success: function (result) {
                    if (result.status == 200) {
                        for (var i = 0; i < result.data.length; i++) {
                            var opetion1 = document.createElement('option');
                            opetion1.text = result.data[i].name;
                            opetion1.setAttribute("value_id", result.data[i].id);
                            opetion1.setAttribute("value", result.data[i].name);
                            $("select#user_select").append(opetion1);
                        }
                    }
                }
            });
        });


        $("#bth_2").click(function () {
            //上传数据
            //点击发表增加加载select数据等等上传？
            var value = $("select#user_select").val();
            var id = $("select#user_select").find("option:selected").attr("value_id");
            var textarea = $("textarea").val();
            $.ajax({
                type: "post",
                url: "/message",
                data: {"user_id": id, "textarea": textarea},
                dataType: "json",
                success: function (result) {
//                    console.log(result);
//                    window.location.reload(); //页面的整体刷新比较浪费资源
                    wallMessage();
                    return false; //能够防止重复 但是不能清空记录
                }
            });

        });


        var wallMessage = function () {

            //先是直接调用，提交调用会重复出现message信息
            $(".panel-primary").empty();
            $.ajax({
                type: "get",
                url: "/message",
                data: {},
                dataType: "json",
                success: function (result) {
                    if (result.status == 200) {
                        for (var i = 0; i < result.data.length; i++) {
                            var panelTitle = document.createElement('div');
                            var panelBody = document.createElement('div');
                            var button = document.createElement('button');
                            panelTitle.innerHTML = result.data[i].user.name;
                            panelBody.innerHTML = result.data[i].topic;
                            panelTitle.setAttribute('class', 'panel-title');
                            panelBody.setAttribute('class', 'panel-body');
                            panelTitle.setAttribute('value', result.data[i].id);
                            panelBody.setAttribute('value', result.data[i].id);

                            button.innerHTML = '删除';
                            button.setAttribute('data-dismiss', 'modal');
                            button.setAttribute('class', 'btn btn-xs');
                            button.setAttribute('value', result.data[i].id);
                            button.setAttribute('type', 'button');
                            button.setAttribute('onClick', 'messageDelete(this.value)');

                            $(".panel-primary").append(panelTitle);
                            $(".panel-primary").append(panelBody);
                            $(".panel-primary").append(button);

//                            var panelTitle = document.getElementsByName("panel-title"); //会获取所有循环出class的值。
//                            var panelBody = document.getElementsByName("panel-body");
//                            console.log(panelTitle);
//                            panelTitle.text = ;
//                            panelBody.text = result.data[i].topic;
//                            $(".panel-primary").append(panelTitle);
//                            $(".panel-primary").append(panelBody);
                        }
                    }
                }
            });
        };


        var messageDelete = function(id){
            $.ajax({
                type: "delete",
                url: "/message/"+id,
                data: {"id": id},
                dataType: "json",
                success: function (result) {
                    if (result.status == 200) {
                        wallMessage();
                        return false; //防止重复提交
                    }
                }
            });
        };


        //自动加载
        wallMessage();


    </script>





@endsection
