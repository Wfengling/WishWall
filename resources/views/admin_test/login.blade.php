@extends('layouts.app')

@section('title', 'page title')

@section('sidebar')
    @parent
    <p> this is appended to the master sidebar</p>

@endsection

@section('content')
    <p><label for="name">姓名：</label>
    <input id="name" name="name" type="text" />
    </p>

    <p><label for="password">密码：</label>
        <input id="password" name="password" type="password" />
    </p>

    <span id="backdata"></span>
    <p><input id="subbtn" type="button" value="提交数据" /></p>

@endsection


<script>
    $(function() {
        $("#subbtn").click(function() {
            var params = $("input").serialize();
            var url = "1.php";
            $.ajax({
                type: "post",
                url: url,
                dataType: "json",
                data: params,
                success: function(msg){
                    var backdata = "您提交的姓名为：" + msg.name +
                            "<br /> 您提交的密码为：" + msg.password;
                    $("#backdata").html(backdata);
                    $("#backdata").css({color: "green"});
                }
            });
        });

    });


</script>


