<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TopicMessage extends Model
{
    use SoftDeletes;

    protected $table='topic_message';


    protected $dates = ['deleted_at'];


    public function user(){
        return $this->belongsTo(User::class);
    }



}
