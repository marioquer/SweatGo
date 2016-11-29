<?php
/**
 * Created by PhpStorm.
 * User: marioquer
 * Date: 2016/11/29
 * Time: 下午3:03
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advice extends Model{


    //指定表名
    protected $table = 'advice';

    //指定id
    protected $primaryKey = 'id';

    const CREATED_AT = 'createdAt';
    
    const UPDATED_AT = 'updatedAt';


}