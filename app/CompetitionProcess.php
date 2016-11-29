<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompetitionProcess extends Model
{
    //指定表名
    protected $table = 'competition_process';

    const CREATED_AT = 'createdAt';

    const UPDATED_AT = 'updatedAt';
}
