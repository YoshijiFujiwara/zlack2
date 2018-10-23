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
                'name' => 'ConfigureChannel',
                'alias' => 'チャンネル保存ポリシーを設定する',
                'description' => ''
            ],
            [
                'name' => 'ConfigurePrivateChannel',
                'alias' => 'プライベートチャンネル保存ポリシーを設定する',
                'description' => ''
            ],

            /**
             * 通知
             */
            [
                'name' => 'announce@Channel@Here',
                'alias' => '@channel・@here でのチャンネル内アナウンス ',
                'description' => ''
            ],
            [
                'name' => 'announce@Everyone',
                'alias' => '@everyone でのワークスペース内アナウンス ',
                'description' => ''
            ],
            [
                'name' => 'PerticipateInUserGroup',
                'alias' => 'ユーザーグループへの加入',
                'description' => ''
            ],
            [
                'name' => 'ManagementUserGroup',
                'alias' => 'ユーザーグループの管理またはメンション',
                'description' => ''
            ],
            [
                'name' => 'ConfigureReminder',
                'alias' => 'チャンネルまたはメンバーのリマインダー設定',
                'description' => ''
            ],

            /**
             * ワークスペースの管理
             */
            [
                'name' => 'DeleteUserFromWorkspace',
                'alias' => 'チャンネルからメンバーを削除する',
                'description' => ''
            ],
            [
                'name' => 'DeleteUserFromPrivateChannel',
                'alias' => 'プライベートチャンネルからメンバーを削除する',
                'description' => ''
            ],
            [
                'name' => 'InviteGuestToPublicChannel',
                'alias' => 'ゲストをパブリックチャンネルに招待',
                'description' => ''
            ],
            [
                'name' => 'InviteMultiChannelGuestToPrivateChannel',
                'alias' => 'マルチチャンネルゲストをプライベートチャンネルに招待',
                'description' => ''
            ],
            [
                'name' => 'InviteSingleChannelGuestToPrivateChannel',
                'alias' => 'シングルチャンネルゲストをプライベートチャンネルに招待',
                'description' => ''
            ],
            [
                'name' => 'DeleteOtherMemberMessage',
                'alias' => '他のメンバーのメッセージを削除',
                'description' => ''
            ],
            [
                'name' => 'InviteNewMember',
                'alias' => '新しいメンバーの招待',
                'description' => ''
            ],
            [
                'name' => 'InviteNewGuest',
                'alias' => '新しいゲストメンバーを招待',
                'description' => ''
            ],
            [
                'name' => 'DeleteMemberAccount',
                'alias' => 'メンバーのアカウントの解除',
                'description' => ''
            ],
            [
                'name' => 'AppointToWorkspaceAdministrator',
                'alias' => 'ワークスペースの管理者に任命する',
                'description' => ''
            ],
            [
                'name' => 'ChangeWorkspaceAdminToMember',
                'alias' => 'ワークスペースの管理者を通常メンバーに戻す',
                'description' => ''
            ],
            [
                'name' => 'AppointToWorkspaceOwner',
                'alias' => 'ワークスペースのオーナーに任命する',
                'description' => ''
            ],
            [
                'name' => 'ChangeWorkspaceOwnerToMember',
                'alias' => 'ワークスペースのオーナーを通常メンバーに戻す',
                'description' => ''
            ],

            /**
             * ワークスペースの設定
             */
            [
                'name' => 'ConfigureDefultChannelSettings',
                'alias' => 'デフォルトのチャンネルを設定',
                'description' => ''
            ],
            [
                'name' => 'ConfigureSearchRegistrationInWorkspace',
                'alias' => 'ワークスペース検索・新規登録に関する設定',
                'description' => ''
            ],
            [
                'name' => 'ConfigureNameDisplayGuideline',
                'alias' => '名前の表示ガイドラインの設定',
                'description' => ''
            ],
            [
                'name' => 'ConfigureWorkspaceLanguage',
                'alias' => 'ワークスペースの言語を設定する',
                'description' => ''
            ],
            [
                'name' => 'ChangeWorkspaceNameOrUrl',
                'alias' => 'ワークスペースの名前または URL を変更する',
                'description' => ''
            ],
            [
                'name' => 'ResetAllMemberPassword',
                'alias' => 'メンバー全員のパスワードをリセットする',
                'description' => ''
            ],
            [
                'name' => 'CreateUserGroup',
                'alias' => 'ユーザーグループを作成/編集する',
                'description' => ''
            ],

            /**
             * その他の管理項目
             */
            [
                'name' => 'UseAnalytics',
                'alias' => 'アナリティクスの閲覧と使用',
                'description' => ''
            ],
            [
                'name' => 'ChangeNameAndDisplayName',
                'alias' => '氏名と表示名を変更する*',
                'description' => ''
            ],
            [
                'name' => 'ChangeEmail',
                'alias' => 'メールアドレスを変更する*',
                'description' => ''
            ],
            [
                'name' => 'UpgradePayingPlan',
                'alias' => '有料プランへアップグレードする',
                'description' => ''
            ],
            [
                'name' => 'ChangeWorkspacePlan',
                'alias' => 'ワークスペースのプランを変更する**',
                'description' => ''
            ],
            [
                'name' => 'AddPaymentMethod',
                'alias' => '支払い方法を追加する**',
                'description' => ''
            ],
            [
                'name' => 'ReadBillOfParticulars',
                'alias' => '請求明細書を確認',
                'description' => ''
            ],
            [
                'name' => 'SelectAuthMethod',
                'alias' => '認証方法を選択',
                'description' => ''
            ],
            [
                'name' => 'UseStandardExport',
                'alias' => 'Standard Export を利用する',
                'description' => ''
            ],
            [
                'name' => 'UseCorporateExport',
                'alias' => 'Corporate Export を利用する',
                'description' => '(対象ワークスペースの場合)'
            ],
            [
                'name' => 'AssignPrimaryOwner',
                'alias' => 'プライマリーオーナーの権限を譲渡',
                'description' => ''
            ],
            [
                'name' => 'DeleteWorkspace',
                'alias' => 'ワークスペースを削除する***',
                'description' => ''
            ],

            /**
             * App & インテグレーション
             */
            [
                'name' => 'TurnOnAppInstallRestriction',
                'alias' => 'アプリのインストール制限機能をオンにする',
                'description' => ''
            ],
            [
                'name' => 'AddAppAndIntegration',
                'alias' => 'アプリとインテグレーションを追加する',
                'description' => ''
            ],
        ]);
    }
}
