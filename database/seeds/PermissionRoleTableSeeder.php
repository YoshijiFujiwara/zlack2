<?php

use Illuminate\Database\Seeder;
use App\Model\Permission;
use App\Model\Role;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // オーナーデータ
        $ownerDatas = [];
        // オーナーはすべてのパーミッションを持つので
        foreach (Permission::all() as $permission) {
            $ownerDatas[] = [
                'role_id' => self::getRoleId('PrimaryOwner'),
                'permission_id' => $permission->id
            ];
        }

        // 管理者
        $adminDatas = [];
        $adminDontHave = [
            'ConfigureChannel',
            'ChangeWorkspaceAdminToMember', 'AppointToWorkspaceOwner', 'ChangeWorkspaceOwnerToMember',
            'ConfigureSearchRegistrationInWorkspace', 'ConfigureNameDisplayGuideline', 'ConfigureWorkspaceLanguage', 'ChangeWorkspaceNameOrUrl', 'ResetAllMemberPassword',
            'ChangeWorkspacePlan', 'AddPaymentMethod', 'ReadBillOfParticulars', 'UseCorporateExport', 'AssignPrimaryOwner', 'DeleteWorkspace',
            'TurnOnAppInstallRestriction'
        ];

        // 管理者は一部を除いてパーミッションを持つので
        foreach (Permission::all() as $permission) {
            if (! in_array($permission->name, $adminDontHave)) {
                $ownerDatas[] = [
                    'role_id' => self::getRoleId('WorkspaceAdministrator'),
                    'permission_id' => $permission->id
                ];
            }
        }

        // メンバー
        $memberDatas = [];
        $memberDontHave = $adminDontHave;
        $onlyMemberDontHave = [
            'CreateSharedChannel', 'CreatePrivateSharedChannel', 'ChangePublicChannelToPrivate', 'ChangeChannelName',
            'DeleteChannel', 'InviteGuestToPublicChannel', 'InviteSingleChannelGuestToPrivateChannel', 'DeleteOtherMemberMessage',
            'InviteNewGuest', 'DeleteMemberAccount', 'AppointToWorkspaceAdministrator',
            'ChangeNameAndDisplayName', 'ChangeEmail', 'SelectAuthMethod', 'UseStandardExport'
        ];

        foreach ($onlyMemberDontHave as $permissionName) {
            $memberDontHave[] = "$permissionName";
        }

        // メンバーは一部を除いてパーミッションを持つので
        foreach (Permission::all() as $permission) {
            if (! in_array($permission->name, $memberDontHave)) {
                $memberDatas[] = [
                    'role_id' => self::getRoleId('Member'),
                    'permission_id' => $permission->id
                ];
            }
        }

        // マルチチャンネルゲスト
        $multiGuestDatas = [];
        $multiGuestHave = [
            'SendMessageInChannel', 'UploadFile', 'DeleteMyMessage', 'CreatePrivateChannel', 'announce@Channel@Here', 'InviteMultiChannelGuestToPrivateChannel',
        ];

        // マルチチャンネルゲストは限られたパーミッションを持つ
        foreach (Permission::all() as $permission) {
            if (in_array($permission->name, $multiGuestHave)) {
                $multiGuestDatas[] = [
                    'role_id' => self::getRoleId('MultiChannelGuest'),
                    'permission_id' => $permission->id
                ];
            }
        }

        // シングルチャンネルゲスト
        $singleGuestDatas = [];
        $singleGuestHave = [
            'SendMessageInChannel', 'UploadFile', 'DeleteMyMessage', 'CreatePrivateChannel', 'announce@Channel@Here', 'InviteMultiChannelGuestToPrivateChannel',
        ];

        // シングルチャンネルゲストは限られたパーミッションを持つ
        foreach (Permission::all() as $permission) {
            if (in_array($permission->name, $singleGuestHave)) {
                $singleGuestDatas[] = [
                    'role_id' => self::getRoleId('SingleChannelGuest'),
                    'permission_id' => $permission->id
                ];
            }
        }

        DB::table('permission_role')->insert($ownerDatas);
        DB::table('permission_role')->insert($adminDatas);
        DB::table('permission_role')->insert($memberDatas);
        DB::table('permission_role')->insert($multiGuestDatas);
        DB::table('permission_role')->insert($singleGuestDatas);
    }

    private static function getRoleId($roleName)
    {
        return Role::where('name', $roleName)->first()->id;
    }

    private static function getPermissionId($permissionName)
    {
        return Permission::where('name', $permissionName)->first()->id;
    }
}
