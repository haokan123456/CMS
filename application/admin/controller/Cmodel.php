<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
use app\admin\model\Cmodel as mm;

class Cmodel extends Controller{

	public function mlst(){
		$cmodel=new mm;
		$data=$cmodel->sel_m();
		$rs['data']=$data;		
		return view('mlst',$rs);
	}
	public function add(){
		return view('increase');
	}

	public function del(){
		$rs=input();
		$mod=db('model')->find($rs['id']);
		$sql="DROP table ".$mod['m_table'];		
		$res=db('model')->delete($rs['id']);
		if($res){
			$this->success('删除成功！');
		}
		else{
			$this->error('删除失败！');
		}
	}

	public function upd(){}

	public function act(){
		$res=input();		
		$ues=db('model')->where('id',$res['m_id'])->update(['m_status'=>$res['act']]);
		echo $ues;
	}

	public function edit(){		
			$rs=input();
			$res['data']=db('model')->find($rs);					
			return view('add',$res);
		
	}

	public function tianjia(){
		
		$rs=input();
		
		$validate=validate('Cmodel');
		$n=0;
		foreach($rs as $k=>$v){
			if($k=="act"){
				$j=$n;
			}
			$n++;
		}		
		$ds=array_splice($rs,$j,1);		

		if(!$validate->check($rs)){				
			$this->error($validate->getError());
		}
		else{
			if($ds['act']!='add'){

				if($rs['m_table']!=$rs['old_table']){
					$sql="ALTER TABLE `".$rs['old_table']."` rename `".$rs['m_table']."`";
					Db::query($sql);
				}
				
				$n=0;
				foreach($rs as $k=>$v){
					if($k=="old_table"){
						$j=$n;
					}
					$n++;
				}		
				$ds=array_splice($rs,$j,1);						
				$res=db('model')->update($rs);
				if($res){
					$this->success('更新完成！','mlst');
				}
				else{
					$this->error('更新失败！');
				}
			}
			else{
				$sql="CREATE TABLE `".$rs['m_table']."`(`id` int(8) not null, primary key(`id`))";
				
				Db::query($sql);
				$res=db('model')->insert($rs);
				
				if($res){
					$this->success('添加完成！','mlst');
				}
				else{
					$this->error('添加失败！');
				}
			}
			
		}				
		
	}
}