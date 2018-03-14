<?php

namespace App\Http\Controllers\Admin;

use App\Models\TopicMessage;
use App\Models\WallTest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MessageBoardController extends Controller
{

    public function store(Request $request){
        $rt = ['status'=>200, 'msg'=>'', 'data'=>(object)[]];
        DB::beginTrasaction();
        $input = $request->all();
        $topic = new TopicMessage();
        $topic->topic = $input['textarea'];
        $topic->user_id = $input['user_id'];
        $topic->save();
        $model = new WallTest();
        $model->user_id = $input['user_id'];
        $model->topic_id = $topic->id;
        $model->save();
        $rt['data']->id = $model->id;
        DB::commit();
        return response()->json($rt);
    }


}
