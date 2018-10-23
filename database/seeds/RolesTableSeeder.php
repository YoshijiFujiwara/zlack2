<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'PrimaryOwner',
                'alias' => 'プライマリオーナー',
                'description' => 'ワークスペースを削除する権限を持つのはワークスペースの プライマリーオーナー (通常はワークスペースの作成者) のみ'
            ],
            [
                'name' => 'WorkspaceAdministrator',
                'alias' => ' ワークスペースの管理者',
                'description' => 'メンバーやパブリックチャンネルの管理、タスクや機能のメンテナンスなどを行うことができます'
            ],
            [
                'name' => 'Member',
                'alias' => 'メンバー ',
                'description' => '参加しているワークスペースのすべてのパブリックチャンネルへアクセスすることができます'
            ],
            [
                'name' => 'MultiChannelGuest',
                'alias' => 'マルチチャンネルゲスト',
                'description' => '使用する権限のあるチャンネルのみにアクセスすることができます'
            ],
            [
                'name' => 'SingleChannelGuest',
                'alias' => 'シングルチャンネルゲスト',
                'description' => '割り当てられた1つのチャンネルのみにアクセスすることができます'
            ],
        ]);
    }
}
