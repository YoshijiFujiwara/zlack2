<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Model\Workspace;
use App\Model\Channel;

class UserWorkspaceChannelReactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 全てのユーザーが、2,3個ワークスペースに所属するように
        $allUsers = User::all();
        $allWorkspaces = Workspace::all();

        // インサート用データ
        $insertDatas = array();
        foreach ($allUsers as $key => $user) {
            $workspaceIds = array();
            foreach ($allWorkspaces as $workspaceKey => $workspace) {
                // 33%の確率で登録する
                if (rand(0, 100) % 3 == 0) {
                    $workspaceIds[] = $workspace->id;
                }
            }

            foreach ($workspaceIds as $workspaceId) {
                if (rand(0, 100) % 5 == 0) {
                    $is_inviting = false;
                    $insertDatas[] = [
                        'user_id' => $user->id,
                        'workspace_id' => $workspaceId,
                        'role_id' => '3', // とりあえず全員メンバーでいいや
                        'is_inviting' => $is_inviting
                    ];
                } else {
                    $is_inviting = true;
                    $insertDatas[] = [
                        'user_id' => $user->id,
                        'workspace_id' => $workspaceId,
                        'role_id' => '3', // とりあえず全員メンバーでいいや
                        'is_inviting' => $is_inviting,
                    ];
                }
            }
        }

        DB::table('user_workspace')->insert($insertDatas);
    }
}
