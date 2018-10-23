<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insertDatas = [
            /**
             * メッセージとファイル
             */

            /**
             * Channel management (チャンネル管理)
             */

            /**
             * 通知
             */

            /**
             * ワークスペースの管理
             */

            /**
             * ワークスペースの設定
             */

            /**
             * その他管理項目
             */

            /**
             * App & インテグレーション
             */
        ];


        DB::table('permission_role')->insert([
            ['role_id' => '', 'permission_id' => '']
        ]);
    }
}
