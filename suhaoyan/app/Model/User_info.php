<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User_info extends Model
{
    protected $table = 'user_info';
    //该模型是否被自动维护时间戳
	public $timestamps = false;
	//可以被批量赋值的属性。(字段)
	protected $fillable = ['nicheng',"u_pic","s_sex","u_phone","u_email","u_qq","u_weixin","pay_pass","status","status"];
	//运用修改器    get字段Attribute
	/*public function getstatusAttribute($value){
		$arr = ["1"=>'启用',"0"=>'禁用'];
		return $arr[$value];
	}*/
}
