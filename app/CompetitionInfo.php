<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompetitionInfo extends Model
{
    //指定表名
    protected $table = 'competition_info';

    //指定id
    protected $primaryKey = 'id';

    const CREATED_AT = 'createdAt';

    const UPDATED_AT = 'updatedAt';
}
