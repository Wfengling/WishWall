@extends('layouts.app')

@section('content')

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div data-dismiss="modal" class="close" type="button">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </div>
                <h4 class="modal-title">留言板</h4>
            </div>
            <div class="modal-body">
                <p>选择用户(下拉框选择)</p>
                <select class="form-control"  id="user_select"  name="" style="width:40%" required>
                    {{--增加用户选择--}}
                </select>
                <p>留言内容</p>
                <textarea class="form-control" name="inputComment" required></textarea>
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">取消</button>
                <button data-dismiss="modal" class="btn btn-primary" id="bth_2" type="button">发表</button>
            </div>
        </div>
    </div>



    {{--js引用的位置会对函数产生影响--}}
    <script>
        $(function () {

            $.ajax({
                type:"get",
                url:"/userAll",
                data:{},
                dataType:"json",
                success:function(result){



                    console.log(result);
                }
            });



            $("#btn_2").click(function(){
                console.log('1111');
            });
        });
    </script>

@endsection
