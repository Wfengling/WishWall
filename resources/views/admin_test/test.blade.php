@extends('layouts.app')

@section('title', 'page title')

@section('sidebar')
    @parent
    <p> this is appended to the master sidebar</p>

@endsection

@section('content')
    <p> 测试输出和输出各种类型 </p>
    <p><b>在输入框中输入一个姓名:</b></p>
    <form>
        姓名: <input type="text" onkeyup="showHint(this.value)">
    </form>
    <p>返回值: <span id="txtHint"></span></p>

@endsection


<script>
    function showHint(str){
        if (str.length==0)
        {
            document.getElementById("txtHint").innerHTML="";
            return;
        }
        if (window.XMLHttpRequest)
        {
            // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行的代码
            xmlhttp=new XMLHttpRequest();
        }
        else
        {
            //IE6, IE5 浏览器执行的代码
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                console.log("xxx=> %O",xmlhttp);

                document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
            }
        }
        xmlhttp.open("get","/test/transport?q="+str,true);
        xmlhttp.send();

//        $.ajax({
//            type: 'POST',
//            url: url,
//            data: data,
//            success: success,
//            dataType: dataType
//        });

//        $("input").keyup(function(){
//            txt=$("input").val();
//            $.post("demo_ajax_gethint.asp",{suggest:txt},function(result){
//                $("span").html(result);
//            });
//        });
    }

</script>


