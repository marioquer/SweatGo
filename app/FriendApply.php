<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FriendApply extends Model
{
    //指定表名
    protected $table = 'friend_apply';

    const CREATED_AT = 'createdAt';

    const UPDATED_AT = 'updatedAt';
}
