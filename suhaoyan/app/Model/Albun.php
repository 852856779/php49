<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Albun extends Model
{
    //该model层跟数据库中的哪个表进行关联
    protected $table = 'albun';
    //该模型是否被自动维护时间戳
	public $timestamps = false;
	//可以被批量赋值的属性。(字段)
	protected $fillable = ['a_name',"a_pic","a_time","content","status"];
	//运用修改器    get字段Attribute
	/*public function getstatusAttribute($value){
		$arr = ["1"=>'启用',"0"=>'禁用'];
		return $arr[$value];
	}*/

	// 将admin模型 和admininfo模型建立关联
    public function user_info(){
        // 一对一的关系 hasOne 1.跟那个模型  2.关联的字段是什么
        // return $this->hasOne('App\Model\User_info','u_id');
    }
    // 将admin模型 和 adminadd模型 建立关联
    public function albun_singer(){
        // 一对多的关系 hasMany
        return $this->hasMany('App\Model\albun_singer','a_id');
    }
}
