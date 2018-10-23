<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reactions', function (Blueprint $table) {
            $table->string('user_id');
            $table->string('message_id');
            $table->string('icon_id')->comment('アイコンのID');

//            $table->foreign('user_id')->references('id')->on('users'); // 外部キー
//            $table->foreign('message_id')->references('id')->on('messages'); // 外部キー
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reactions');
    }
}
