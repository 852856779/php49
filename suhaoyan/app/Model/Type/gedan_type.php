<?php

namespace App\Model\Type;

use Illuminate\Database\Eloquent\Model;

class gedan_type extends Model
{
   	protected $table = 'gedan_type';
    //该模型是否被自动维护时间戳
	public $timestamps = false;
	//可以被批量赋值的属性。(字段)
	protected $fillable = ['g_id',"t_id"];
	//运用修改器    get字段Attribute
	public function getsexAttribute($value){
			
	}
}
