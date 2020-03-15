<?php

namespace App\Model\Type;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
   	//该model层跟数据库中的哪个表进行关联
    protected $table = 'music';
    //该模型是否被自动维护时间戳
	public $timestamps = false;
	//可以被批量赋值的属性。(字段)
	protected $fillable = ['m_name',"m_pic","m_url","text","m_time","time","m_version","m_mv","lyrics","composing","status"];
	//运用修改器    get字段Attribute
	/*public function getstatusAttribute($value){
		$arr = ["1"=>'启用',"0"=>'禁用'];
		return $arr[$value];
	}*/
/*
		$data = Type::find(3)->gedan_type;
        dd($data);
*/
	// 将admin模型 和admininfo模型建立关联
    public function user_info(){
        // 一对一的关系 hasOne 1.跟那个模型  2.关联的字段是什么
        return $this->hasOne('App\Model\User_info','u_id');
    }
    // 将admin模型 和 adminadd模型 建立关联
    public function gedan_type(){
        // 一对多的关系 hasMany
        return $this->hasMany('App\Model\Type\gedan_type','g_id');
    }
}
