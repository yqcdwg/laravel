<?php
/**
 * api接口参数
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApiParam extends Model
{
    use SoftDeletes;
    public function menu(){
        return $this->belongsTo('App\Models\Menu');
    }
}
