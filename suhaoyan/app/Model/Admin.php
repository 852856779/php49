<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	//该model层跟数据库中的哪个表进行关联
    protected $table = 'admin';
    //该模型是否被自动维护时间戳
	public $timestamps = false;
	//可以被批量赋值的属性。(字段)
	protected $ﬁllable = ['user',"password","email","phone",'sex',"id"];
	//运用修改器    get字段Attribute
	public function getsexAttribute($value){
		$arr = ["1"=>'男',"0"=>'女'];
		return $arr[$value];
	}
}
