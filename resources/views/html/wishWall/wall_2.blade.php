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
                <select class="form-control" id="user_select" name="" style="width:40%" required>
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
                            opetion1.setAttribute("id", result.data[i].id);
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
//            var id = $("select#user_select").val();

//            console.log($("select#user_select").val());
        });


    </script>



@endsection
