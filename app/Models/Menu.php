<?php
/**
 * 菜单表
 */
namespace App\Models;
use App\BaseModel;
use App\Exceptions\MarginTree\ExcludeTop;
use App\Exceptions\MarginTree\TreeModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends BaseModel
{
    //软删除,树状结构
    use SoftDeletes,TreeModel,ExcludeTop;


    //批量赋值白名单
    protected $fillable = [
        'name','icons', 'description' , 'url','status','parent_id'
    ];

    /* 菜单-角色 */
    public function roles(){
       return $this->belongsToMany('App\Models\Role');
    }

    /* 菜单-用户 */
    public function adminUsers(){

    }

    /* 接口-参数 */
    public function params(){
        return $this->hasMany('App\Models\ApiParam');
    }

    /* 接口-响应说明 */
    public function responses(){
        return $this->hasMany('App\Models\ApiResponse');
    }
}
