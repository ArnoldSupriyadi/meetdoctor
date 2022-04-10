<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleUser extends Model
{
    use SoftDeletes;

    //declare table
    public $table = 'role_user';

    //declare field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'upated_at',
        'deleted_at',
    ];

    //declare fillable
    protected $fillable = [
        'role_id',
        'user_id',
        'created_at',
        'upated_at',
        'deleted_at',
    ];

    //one to many
    public function user() {

        return $this->belongsTo('App\Models\User', 'user_id','id');

    }

    public function role() {

        return $this->belongsTo('App\Models\ManagementAccess\Role', 'role_id','id');

    }
}
