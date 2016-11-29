<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoMessage extends Model
{
    //指定表名
    protected $table = 'info_message';

    //指定id
    protected $primaryKey = 'id';

    const CREATED_AT = 'createdAt';

    const UPDATED_AT = 'updatedAt';
}
