<?php

namespace App\Http\Controllers\Admin;

use App\Models\TopicMessage;
use App\Models\WallTest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class MessageBoardController extends Controller
{



    public function index(){

        $rt  = ['status'=>200, 'msg'=>'', 'data'=>(object)[]];
        $rt['data'] = TopicMessage::with('user')
            ->orderBy('id', 'DESC')
            ->get();
        return response()->json($rt);

    }



    public function destroy($id){
        $rt  = ['status'=>200, 'msg'=>'', 'data'=>null];
        TopicMessage::destroy([$id]);
        return response()->json($rt);
    }



    public function store(Request $request){
        $rt = ['status'=>200, 'msg'=>'', 'data'=>(object)[]];
        $input = $request->all();

        DB::beginTransaction();
        $topic = new TopicMessage();
        $topic->topic = $input['textarea'];
        $topic->user_id = $input['user_id'];
        $topic->save();

//        $model = new WallTest();
//        $model->user_id = $input['user_id'];
//        $model->topic_id = $topic->id;
//        $model->content = $input['textarea'];
//        $model->save();
//        $rt['data']->id = $model->id;
        DB::commit();
        return response()->json($rt);
    }


}
