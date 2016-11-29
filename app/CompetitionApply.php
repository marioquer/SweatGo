<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompetitionApply extends Model
{
    //指定表名
    protected $table = 'competition_apply';

    const CREATED_AT = 'createdAt';

    const UPDATED_AT = 'updatedAt';
}
