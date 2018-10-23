<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('user_id');
            $table->string('channel_id');
            $table->string('parent_message_id')->nullable()->comment('返信先のメッセージID');
            $table->integer('type_id')->comment('メッセージのタイプのID(テキスト形式、添付ファイル、、、)');
            $table->text('sentence')->nullable()->comment('文章形式の場合');
            $table->string('file_path')->nullable()->comment('ファイルの添付の場合');
            $table->string('share_message_id')->nullable()->comment('他のメッセージの共有だった場合');
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
        Schema::dropIfExists('messages');
    }
}
