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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
        <div class="panel-title"></div>
        <div class="panel-body"></div>
        {{--@foreach($dataList as $data)--}}
            {{--<div class="panel-title">--}}
                {{--{{$data->user->name}}--}}
            {{--</div>--}}
            {{--<div class="panel-body">--}}
                {{--{{$data->topic}}--}}

            {{--</div>--}}
        {{--@endforeach--}}
    </div>


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
                data: {"user_id":id,"textarea":textarea},
                dataType: "json",
                success: function (result) {
                    console.log(result);
//                    window.location.reload(); //页面的整体刷新比较浪费资源
                }
            });
        });


        $(function(){
            $.ajax({
                type : "get",
                url : "/wallMessage",
                data : {},
                dataType : "json",
                success: function (result) {
                    if (result.status == 200) {
//                        var dataArr = json.parse(result.data.json);
//                        console.log(result.data);
                        for (var i=0; i<result.data.length;i++) {
                            console.log(result.data[i].user.name);
                            var panelTitle = document.createElement("panel-title");
                            var panelBody = document.createElement("panel-body");
                            panelTitle.text = result.data[i].user.name;
                            panelBody.text = result.data[i].topic;
//                            $("panel panel-primar").append(panelTitle);
//                            $("panel panel-primar").append(panelBody);
                        }
                    }
                }
            });
        });





    </script>





@endsection
