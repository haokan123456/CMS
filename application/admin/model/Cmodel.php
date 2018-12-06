<?php
namespace app\admin\model;
use think\Model;

class Cmodel extends Model{	
	// 获取所有模型
	public function sel_m(){
		$res=db('model')->select();
		return $res;
	}
}