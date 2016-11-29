<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MomentLike extends Model
{
    //指定表名
    protected $table = 'moment_like';

    //指定id
    protected $primaryKey = 'id';

    const CREATED_AT = 'createdAt';

    const UPDATED_AT = 'updatedAt';
}