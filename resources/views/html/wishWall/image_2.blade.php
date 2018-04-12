@extends('layouts.app')


@section('content')


<style>
    .box {
        width:738px;
        height:300px;
        border:1px solid #ddd;
        margin:20px auto;
        overflow:hidden;
        position:relative;
    }
    .box .scrool {
        width: 1000%;
        height: 300px;
    }
    ul li {
        list-style:none;
    }

    .box .scrool ul li img {
        width: 738px;
        height: 300px;
        float: left;
    }
    .box .btn {
        position:absolute;
        width:24px;
        height:24px;
        background:rgba(0,0,0,0.5);
        top:138px;
        color:#ddd;
        text-align:center;
        line-height:24px;
        text-decoration:none;
    }
    .box .next {
        right:0;
    }
</style>


<!--图片处理-->
<div class="box">
    <div class="scrool">
        <div class="list" id="list">
            <ul>
                <li id="list_li"></li>
            </ul>
        </div>
    </div>
    <a href="javascript:;" class="btn next">&gt;</a>
    <a href="javascript:;" class="btn prev">&lt;</a>
</div>




<script>
    $(function () {

        $.ajax({
            url: '/imgAll',
            type: 'get',
            dataType: 'json',
            data: {},
            success: function (result) {
                if (result.status == 200) {
                    console.log(result);
                    for (var i = 0; i < result.data.length; i++) {
                        var opetion1 = document.createElement('img');
                        opetion1.setAttribute("class", 'img' + [i]);
                        opetion1.setAttribute("src", result.data[0].img);
                        $("#list_li").append(opetion1);
                    }
                }
            }
        });


        var index = 0;
        var timer = null;
        $(".next").click(function() {
            var len = $(".box .scrool ul li img").length;
            console.log(len);
            index++;
            if (index > len - 1) {
                index = 0
            }
            tab()
        });

        function tab() {
            var w = $(".box .scrool ul li img").width();
            console.log(w);
//            $(".nav a").eq(index).addClass("active").siblings().removeClass("active");
            $(".scrool").animate({
                "marginLeft": -w * index
            });
        }

    });


</script>

@endsection
