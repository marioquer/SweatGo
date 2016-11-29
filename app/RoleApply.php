<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleApply extends Model
{
    //指定表名
    protected $table = 'role_apply';

    //指定id
    protected $primaryKey = 'id';

    const CREATED_AT = 'createdAt';

    const UPDATED_AT = 'updatedAt';
}