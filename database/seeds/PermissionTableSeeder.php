<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            /**
             * メッセージとファイル
             */
            [
                'name' => 'ParticipatePublicChannel',
                'alias' => 'パブリックチャンネルに参加',
                'description' => ''
            ],
            [
                'name' => 'SendMessageInChannel',
                'alias' => 'チャンネルでメッセージを送信する',
                'description' => ''
            ],
            [
                'name' => 'UploadFile',
                'alias' => 'ファイルをアップロード',
                'description' => ''
            ],
            [
                'name' => 'DeleteMyMessage',
                'alias' => '自分のメッセージを削除',
                'description' => ''
            ],

            /**
             * Channel management (チャンネル管理)
             */
            [
                'name' => 'CreatePublicChannel',
                'alias' => 'パブリックチャンネルを作成する',
                'description' => ''
            ],
            [
                'name' => 'CreateSharedChannel',
                'alias' => '共有チャンネルを作成する',
                'description' => ''
            ],
            [
                'name' => 'CreatePrivateSharedChannel',
                'alias' => 'プライベートな共有チャンネルを作成する',
                'description' => ''
            ],
            [
                'name' => 'ArchiveChannel',
                'alias' => 'チャンネルをアーカイブする',
                'description' => ''
            ],
            [
                'name' => 'CreatePrivateChannel',
                'alias' => 'プライベートチャンネルを作成',
                'description' => ''
            ],
            [
                'name' => 'ChangePublicChannelToPrivate',
                'alias' => 'パブリックチャンネルをプライベートに切り替える',
                'description' => ''
            ],
            [
                'name' => 'ChangeChannelName',
                'alias' => 'チャンネル名を変更する',
                'description' => ''
            ],
            [
                'name' => 'DeleteChannel',
                'alias' => 'チャンネルを削除する',
                'description' => ''
            ],
            [
                'name' => 'ConfigureChannelSave',
                'alias' => 'チャンネル保存ポリシーを設定する',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'プライベートチャンネル保存ポリシーを設定する',
                'description' => ''
            ],

            /**
             * 通知
             */
            [
                'name' => '',
                'alias' => '@channel・@here でのチャンネル内アナウンス ',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => '@everyone でのワークスペース内アナウンス ',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'ユーザーグループへの加入',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'ユーザーグループの管理またはメンション',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'チャンネルまたはメンバーのリマインダー設定',
                'description' => ''
            ],

            /**
             * ワークスペースの管理
             */
            [
                'name' => '',
                'alias' => 'チャンネルからメンバーを削除する',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'プライベートチャンネルからメンバーを削除する',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'ゲストをパブリックチャンネルに招待',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'マルチチャンネルゲストをプライベートチャンネルに招待',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'シングルチャンネルゲストをプライベートチャンネルに招待',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => '他のメンバーのメッセージを削除',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => '新しいメンバーの招待',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => '新しいゲストメンバーを招待',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'メンバーのアカウントの解除',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'ワークスペースの管理者に任命する	',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'ワークスペースの管理者を通常メンバーに戻す',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'ワークスペースのオーナーに任命する',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'ワークスペースのオーナーを通常メンバーに戻す',
                'description' => ''
            ],

            /**
             * ワークスペースの設定
             */
            [
                'name' => '',
                'alias' => 'デフォルトのチャンネルを設定',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'ワークスペース検索・新規登録に関する設定',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => '名前の表示ガイドラインの設定',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'ワークスペースの言語を設定する',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'ワークスペースの名前または URL を変更する',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'メンバー全員のパスワードをリセットする',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'ユーザーグループを作成/編集する',
                'description' => ''
            ],

            /**
             * その他の管理項目
             */
            [
                'name' => '',
                'alias' => 'アナリティクスの閲覧と使用',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => '氏名と表示名を変更する*',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'メールアドレスを変更する*',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => '有料プランへアップグレードする',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'ワークスペースのプランを変更する**',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => '支払い方法を追加する**',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => '請求明細書を確認',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => '認証方法を選択',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'Standard Export を利用する',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'Corporate Export を利用する',
                'description' => '(対象ワークスペースの場合)'
            ],
            [
                'name' => '',
                'alias' => 'プライマリーオーナーの権限を譲渡',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'ワークスペースを削除する***',
                'description' => ''
            ],

            /**
             * App & インテグレーション
             */
            [
                'name' => '',
                'alias' => 'アプリのインストール制限機能をオンにする',
                'description' => ''
            ],
            [
                'name' => '',
                'alias' => 'アプリとインテグレーションを追加する',
                'description' => ''
            ],
        ]);
    }
}
