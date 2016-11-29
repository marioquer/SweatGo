<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SleepData extends Model
{
    //指定表名
    protected $table = 'sleep_data';

    //指定id
    protected $primaryKey = 'id';

    const CREATED_AT = 'createdAt';

    const UPDATED_AT = 'updatedAt';
}
