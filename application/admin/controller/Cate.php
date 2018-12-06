<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
use app\admin\model\Cate as mycate;

class Cate extends Controller{

	public function index(){}

	public function add(){
		return view();
	}

	public function tianjia(){
		$cate=input();		
		$dd=Db::table('tpcms_category')->insert($cate);
		if($dd){
			$this->success('添加栏目成功！','clst');
		}
		else{
			$this->error('添加栏目失败！','clst');
		}

		$this->clst();
	}

	public function clst(){
		$c=new mycate;
		$rs=$c->createtree();
		return view('cate/clst',['data'=>$rs]);
	}

	
	// 删除栏目
	public function del(){
		$tid=input();		
		$res=db('category')->delete($tid);
		if($res){
			$this->success('删除成功！','clst');
		}
		else{
			$this->error('删除失败！');
		}
	}

	public function chghide(){
		$data=input();
		$dd=Db::table('tpcms_category')->where('id',$data['cateid'])->update('ishide',$data['ishide']);
		echo $dd;
	}

	public function addchild(){
		$pcate=input();		
		$c=new mycate;
		$pcname=$c->getp($pcate['pid']);
		$res['data']=db('category')->find();
		$res['pcname']=$pcname;
		// dump($res);die;
		return view('addchild',$res);
	}

	public function edit(){
		$tid=input();
		$c=new mycate;
		$data['data']=$c->getcate($tid);		
		return view('edit',$data);
	}

	public function xiugai(){
		$rs=input();
		$res=db('category')->update($rs);
		if($res){
			$this->success('修改成功！','clst');
		}
		else{
			$this->error('修改失败！');
		}
	}
}