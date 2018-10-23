<?php

namespace App;

use App\Model\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;
use Tymon\JWTAuth\Contracts\JWTSubject;
use

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * JWT用である
     */

    // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     *  Setup model event hooks
     */
    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->id = (string) Str::orderedUuid();
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * パスワードをハッシュ化して格納
     * @param $value
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    /**
     * ワークスペース
     * Many to Many
     */
    public function workspaces()
    {
        return $this->belongsToMany(Workspace::class, 'user_workspace', 'user_id', 'workspace_id');
    }

    /**
     * チャンネル
     * Many to Many
     */
    public function channels()
    {
        return $this->belongsToMany(Channel::class, 'channel_user', 'user_id', 'channel_id');
    }

    /**
     * ユーザーが書いたメッセージ
     * one to many
     */
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    /**
     * ユーザーとメッセージの中間テーブル的な位置にstarsテーブルがある
     */
    public function stars()
    {
        return $this->belongsToMany(Message::class)->using(Star::class);
    }

    /**
     * ユーザーとメッセージの中間テーブル的な位置にreactionsテーブルがある
     */
    public function reactions()
    {
        return $this->belongsToMany(Message::class, 'reactions', 'user_id', 'message_id');
    }

    /**
     * ユーザーとロールのmany to many 関係
     * workspaceごとにロールを持つ
     */
    public function roles()
    {
        // workspace_idも持つことをwithPivotで
        return $this->belongsToMany(Role::class)->withPivot('workspace_id');
    }
}
