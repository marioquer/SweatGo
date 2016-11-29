<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    //指定id
    protected $primaryKey = 'id';

    const CREATED_AT = 'createdAt';

    const UPDATED_AT = 'updatedAt';
}
