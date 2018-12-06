<?php
namespace app\admin\model;
use think\Model;

class Cate extends Model{	

	public function createtree(){
		$rs=db('category')->order('id desc')->select();		
		$data=$this->sort($rs);
		return $data;
	}

	public function sort($arr,$pid=0,$deep=0){
		static $tree=array();		
		foreach($arr as $k=>$v){
			if($v['pid']==$pid){
				$v['level']=$deep;
				$tree[]=$v;					
				$this->sort($arr,$v['id'],$deep+1);
			}
			
		}		
		return $tree;
	}

	//获取父级栏目名称
	public function getp($pid){
		$res=db('category')->where('id',$pid)->field('id,catename')->find();
		return $res;
	}

	// 获取栏目信息
	public function getcate($tid){
		$res=db('category')->find($tid);
		return $res;
	}
}