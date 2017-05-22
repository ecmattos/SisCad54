<?php

namespace SisCad\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use SisCad\Notifications\PasswordReset;
use Zizaco\Entrust\Traits\EntrustUserTrait;

use Illuminate\Database\Eloquent\SoftDeletes;
use Venturecraft\Revisionable\Revisionable;

class User extends Authenticatable
{
    use EntrustUserTrait;
    use Notifiable;

    protected $dates = ['deleted_at'];

    protected $revisionEnabled = true;
    protected $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)
    protected $historyLimit = 9999999; //Maintain a maximum of 500 changes at any point of time, while cleaning up old revisions.
    protected $revisionCreationsEnabled = true;
    protected $dontKeepRevisionOf = [];
    #protected $revisionFormattedFields = array('title'  => 'string:<strong>%s</strong>', 'public' => 'boolean:No|Yes', 'deleted_at' => 'isEmpty:Active|Deleted');
    protected $revisionFormattedFieldNames = [
        'name' => 'Usuário',
        'email' => 'e-mail', 
        'user_status_id' => 'Situacao',
        'deleted_at' => 'Excluído'
    ];
    protected $revisionFormattedFields = [];

    protected $revisionNullString = 'nada';
    protected $revisionUnknownString = 'desconhecido';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','user_status_id' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token) 
    {
        $this->notify(new PasswordReset($token));
    }

    /**
     * Many-To-Many Relationship Method for accessing the User->roles
     *
     * @return QueryBuilder Object
     */
    public function roles()
    {
        return $this->belongsToMany('SisCad\Entities\Role', 'role_user', 'user_id', 'role_id');
    }

    public function user_status()
    {
        return $this->belongsTo('SisCad\Entities\UserStatus');  
    }
}
