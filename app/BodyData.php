<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BodyData extends Model
{
    //指定表名
    protected $table = 'body_data';

    //指定id
    protected $primaryKey = 'id';

    const CREATED_AT = 'createdAt';

    const UPDATED_AT = 'updatedAt';
}
