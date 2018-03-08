<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWallTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     * 留言板直接@人楼层，
     *
     */
    public function up()
    {
        Schema::create('wall_test', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('topic_id'); //主题id
            $table->text('content'); //回复

            $table->integer('to_master_id'); //回复 人，可以为空
            $table->string('to_master_name'); //回复 人名字
            $table->integer('user_id');//提交人

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wall_test');
    }
}
