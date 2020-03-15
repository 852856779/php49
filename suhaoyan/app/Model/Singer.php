<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    //该model层跟数据库中的哪个表进行关联
    protected $table = 'singer';
    //该模型是否被自动维护时间戳
	public $timestamps = false;
	//可以被批量赋值的属性。(字段)
	protected $fillable = ['s_name',"s_pic","s_sex","content","status"];
	//运用修改器    get字段Attribute
	/*public function getstatusAttribute($value){
		$arr = ["1"=>'启用',"0"=>'禁用'];
		return $arr[$value];
	}*/
}
