<?php
namespace app\admin\validate;
use think\Validate;

class Cmodel extends Validate{

	protected $rule=[
		'm_name'=>"require",
		'm_table'=>'require|unique:model'
	];

	protected $message=[
		'm_name.require'=>"模型名称不能为空",
		'm_table.require'=>"附加表不能为空",
		'm_table.unique'=>"附加表名称已存在"
	];
}