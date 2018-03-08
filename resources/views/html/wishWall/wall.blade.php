<!DOCTYPE html>
<html>
<head>
    {{--默认url内置函数asset()方法引入js css。默认相对于根目录，也就是public--}}
    <meta charset="utf-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <title>留言板测试</title>
</head>
<body>

{{--<h3>静态留言版</h3>--}}
{{--<div class="modal-dialog">--}}
    {{--<div class="modal-content">--}}
        {{--<div class="modal-header">--}}
            {{--<div data-dismiss="modal" class="close" type="button">--}}
                {{--<span aria-hidden="true">&times;</span>--}}
                {{--<span class="sr-only">Close</span>--}}
            {{--</div>--}}
            {{--<h4 class="modal-title">留言板</h4>--}}
        {{--</div>--}}
        {{--<div class="modal-body">--}}
            {{--<p>留言内容</p>--}}
            {{--<textarea class="form-control"></textarea>--}}
        {{--</div>--}}
        {{--<div class="modal-footer">--}}
            {{--<button data-dismiss="modal" class="btn btn-default" type="button">取消</button>--}}
            {{--<button data-dismiss="modal" class="btn btn-primary" type="button">发表</button>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


{{--<h3>点击弹出框口</h3>--}}
{{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">我要留言</button>--}}
{{--<!--窗口-->--}}
{{--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">--}}
    {{--<div class="modal-dialog">--}}
        {{--<div class="modal-content">--}}
            {{--<!--窗口头部-->--}}
            {{--<div class="modal-header">--}}
                {{--<button data-dismiss="madal" class="close" type="button">--}}
                    {{--<span aria-hidden="true">&times</span>--}}
                    {{--<span class="sr-only">Close</span>--}}
                {{--</button>--}}
                {{--<h4>留言板</h4>--}}
            {{--</div>--}}
            {{--<!--窗口中体-->--}}
            {{--<div class="modal-body">--}}
                {{--<p>留言内容</p>--}}
                {{--<textarea class="form-control"></textarea>--}}
            {{--</div>--}}
            {{--<!--窗口尾部-->--}}
            {{--<div class="modal-footer">--}}
                {{--<button data-dismiss="modal" class="btn btn-default" type="button">取消</button>--}}
                {{--<button class="btn btn-primary" type="button">确定</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

</body>

<script>
    $(function () {
        console.log(1);
    });
</script>

</html>