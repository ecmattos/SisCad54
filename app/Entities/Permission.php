<?php 

namespace SisCad\Entities;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'permissions';

    protected $fillable = [
        'name', 
        'display_name',
        'description' 
    ];
    /**
     * many-to-many relationship method
     *
     * @return QueryBuilder
     */
    public function roles()
    {
        return $this->belongsToMany('SisCad\Entities\Role');
    }
}