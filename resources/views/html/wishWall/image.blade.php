<!DOCTYPE html>
<html>
<head>
    {{--默认url内置函数asset()方法引入js css。默认相对于根目录，也就是public--}}
    <meta charset="utf-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>图片测试</title>

    <style>
        .img1 {
            width: 200px;
            /*height: 200px;*/
        }
    </style>

</head>
<body>
<div class="content" id="div1">
    <h2>image_show.通过接口获取</h2>
    {{--<img class="img1" src="../../upload/kai.jpg">--}}
    {{--<img class="img1" src="../../upload/hei.jpg">--}}
    {{--<img class="img1" src="../../upload/siyue.jpg">--}}
    {{--<img class="img1" src="../../upload/bailang.jpg">--}}
</div>


</body>

<script>

    //2.jquery交换数据
//        $(function(){
//            $.ajax({
//                type:"get",
//                url:"imgAll",
//                data : {},
//                dataType:"json",
//                success:function(result){
//                    console.log(result);
//                }
//            });
//        });



//1.直接ajax交换数据
    var xhr = null;
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xhr = new XMLHttpRequest();
    }
    else {// code for IE6, IE5
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhr.open("get", '/imgAll', true);
    xhr.onreadystatechange = function () {
        //返回数据需要状态判定
       // 0: 请求未初始化
//        1: 服务器连接已建立
//        2: 请求已接收
//        3: 请求处理中
//        4: 请求已完成，且响应已就绪
//        console.log('readyState:%O', xhr.readyState);
//        console.log('status:%O', xhr.status);
//        console.log(xhr);
//        存在数据类型的装换需要?
//        数据在DoM节点中的显示?
        if (xhr.readyState == 4 && xhr.status == 200) {
            var result = JSON.parse(xhr.responseText);
            var ss = result.data;

            //如需向 HTML DOM 添加新元素，您首先必须创建该元素（元素节点），然后把它追加到已有的元素上。
            var div = document.getElementById("div1");
            for (let i=0;i<ss.length;i++) {
                //每个节点都要创建
                var img = document.createElement("img");
                img.setAttribute("class", "img1");
//                console.log(ss[i]);
                img.setAttribute("src", ss[i].img);
                div.appendChild(img);
            }
//            console.log(ss);
        }

    };
    xhr.send(null);


    //3.form表单提交数据，最原始的数据交换




//
//    预备：  生成的过程
//    定义数据： 和轮播图相关的数据
//    图片和点击图片将要跳转的路径
//    数据怎么组织？
//    //一组数据  一组中每一项 图片和跳转的路径
//    [{imgSrc:"01.jpg",targetSrc:"http://www.baidu.com"},{imgSrc:"01.jpg",targetSrc:"http://www.baidu.com"},{imgSrc:"01.jpg",targetSrc:"http://www.baidu.com"}]
//    //JSON
//    第一步：当页面加载完后，获取所要操作的节点对象
//    第二步：根据数据动态生成轮播图以及控制按钮
//    第三步：为每一个控制按钮添加一个鼠标浮动事件onmouseenter
//    当前的按钮样式发生变化（acitve），其他的恢复原来样式
//    对应的轮播图显示出来（active）,其他的隐藏
//    第四步：开启自动轮播
//    开启一个定时器，间接性的自动的切换轮播图
//    第五步：为包含轮播区域容器lunBo添加一个鼠标浮动事件
//    停止定时器（停止自动轮播）
//    为包含轮播区域容器lunBo添加一个鼠标离开事件
//    开启定时器
//  http://blog.csdn.net/zhongguohaoshaonian/article/details/52597022

</script>


</html>