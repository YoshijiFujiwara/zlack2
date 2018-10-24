<?php

namespace App\Providers;

use App\Model\Permission;
use App\Model\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // パーミッションの名前に従ったGate名で定義していく
        foreach (Permission::all() as $permission) {
            Gate::define($permission->name, function ($user, $workspace, $permission) {

                /**
                 * ログインユーザーが指定のワークスペースで持っているロールが
                 * 指定のパーミッションを持っているかどうか
                 */

                // todo: あとで綺麗にリレーションを使って作り直す
                $roleId = DB::table('user_workspace')
                            ->select('role_id')
                            ->where([
                                ['user_id', '=', $user->id],
                                ['workspace_id', '=', $workspace->id]
                            ])->first();

                // 取り出したロールが指定のパーミッション
                $result = DB::table('permission_role')
                            ->where([
                                ['role_id', '=', $roleId],
                                ['permission_id', '=', $permission->id]
                            ])->first();

                if(! empty($result)) {
                    return true;
                }
                return false;
            });
        }
    }
}
