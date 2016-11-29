<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MomentComment extends Model
{
    //指定表名
    protected $table = 'moment_comment';

    //指定id
    protected $primaryKey = 'id';

    const CREATED_AT = 'createdAt';
}
