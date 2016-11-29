<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExerciseData extends Model
{
    //指定表名
    protected $table = 'exercise_data';

    //指定id
    protected $primaryKey = 'id';

    const CREATED_AT = 'createdAt';

    const UPDATED_AT = 'updatedAt';
}
