<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channels', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('workspace_id');
            $table->string('name')->comment('チャンネル名');
            $table->string('status')->default('public')->comment('チャンネルの公開設定');
            $table->timestamps();
            $table->softDeletes();


//            $table->foreign('workspace_id')->references('id')->on('workspaces'); // 外部キー
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('channels');
    }
}
