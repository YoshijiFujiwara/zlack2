<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * ユーザーとロールのmany to many 関係
     * workspaceごとにロールを持つ
     */
    public function users()
    {
        // workspace_idも持つことをwithPivotで
        return $this->belongsToMany(User::class)->withPivot('workspace_id');
    }
}
