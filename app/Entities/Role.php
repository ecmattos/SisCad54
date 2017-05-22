<?php 

namespace SisCad\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Venturecraft\Revisionable\Revisionable;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $revisionEnabled = true;
    protected $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)
    protected $historyLimit = 9999999; //Maintain a maximum of 500 changes at any point of time, while cleaning up old revisions.
    protected $revisionCreationsEnabled = true;
    protected $dontKeepRevisionOf = [];
    #protected $revisionFormattedFields = array('title'  => 'string:<strong>%s</strong>', 'public' => 'boolean:No|Yes', 'deleted_at' => 'isEmpty:Active|Deleted');
    protected $revisionFormattedFieldNames = [
        'display_name' => 'Grupo de Usuário', 
        'deleted_at' => 'Excluído'
    ];
    protected $revisionNullString = 'nada';
    protected $revisionUnknownString = 'desconhecido';

    public function identifiableName() 
    {
        return $this->display_name;
    }


    /**
     * The database table used by the model.
     *
     * @var string
     */

    protected $fillable = [
        'name', 
        'display_name',
        'description' 
    ];
    
    protected $table = 'roles';

    /*
    |--------------------------------------------------------------------------
    | Relationship Methods
    |--------------------------------------------------------------------------
    */

    /**
     * many-to-many relationship method.
     *
     * @return QueryBuilder
     */
    public function users()
    {  
        return $this->belongsToMany('SisCad\Entities\User', 'role_user', 'user_id', 'role_id');
    }


    /**
     * many-to-many relationship method.
     *
     * @return QueryBuilder
     */
    public function permissions()
    {
        return $this->belongsToMany('SisCad\Entities\Permission')->orderBy('display_name');
    }
}