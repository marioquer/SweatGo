<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moment extends Model
{
    //指定表名
    protected $table = 'moment';

    //指定id
    protected $primaryKey = 'id';

    const CREATED_AT = 'createdAt';

}
