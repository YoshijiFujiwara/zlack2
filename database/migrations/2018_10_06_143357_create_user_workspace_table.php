<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWorkspaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_workspace', function (Blueprint $table) {
            $table->string('user_id');
            $table->string('workspace_id');
            $table->integer('role_id')->comment('ユーザーがこのワークスペースで持つロール');
            $table->boolean('is_inviting')->default(0)->comment('招待中ならtrue');
            $table->timestamps();


//            $table->foreign('user_id')->references('id')->on('users'); // 外部キー
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
        Schema::dropIfExists('user_workspace');
    }
}
