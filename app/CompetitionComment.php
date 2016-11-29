<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompetitionComment extends Model
{
    //指定表名
    protected $table = 'competition_comment';

    //指定id
    protected $primaryKey = 'id';

    const CREATED_AT = 'createdAt';

}
