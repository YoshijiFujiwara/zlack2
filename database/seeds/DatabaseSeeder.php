<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Model\Workspace;
use App\Model\Channel;
use App\Model\Message;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // ワークスペースと、それに付随するチャンネルを生成
        factory(Workspace::class, 7)->create();
        factory(Channel::class, 40)->create();
        factory(User::class, 30)->create();

        $this->call([
            ReactionIconsTableSeeder::class, // リアクションのアイコン
            MessageTypesTableSeeder::class, // メッセージタイプ
        ]);

        factory(Message::class, 100)->create();

        $this->call([
            RolesTableSeeder::class, // 権限たち
            PermissionTableSeeder::class, // パーミッション
            PermissionRoleTableSeeder::class, // 権限とパーミッションの関係
            UserWorkspaceChannelReactionsTableSeeder::class, // ユーザーとワークスペースとチャンネル
        ]);
    }
}
