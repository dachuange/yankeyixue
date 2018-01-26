<?php
namespace Admin\Controller;
class ExpertController extends CommonController{
	private $model;
	public function __construct(){
//		调用CommonController里面的构造方法
		parent::__construct();
//		实例化news模型
		$this->model=new \Common\Model\Expert;
	}
	
	public function index(){
		$data=$this->model->order('expert_time desc')->select();
		foreach ($data as $k => $v) {
			$data[$k]['expert_time']=date('Y-m-d',$data[$k]['expert_time']);
		}
//      pre($data);die;
		$this->assign('data',$data);
		$this -> display();
	}

//	添加
	public function add(){
		if(IS_POST){
//			dump($_POST);exit;
			$_POST['expert_time'] = time();
			$_POST['expert_password'] = md5($_POST['expert_password']);
//			$_POST['expert_brief'] = htmlspecialchars_decode($_POST['expert_brief']);
			if($this -> model -> store()){
				$this -> success("添加成功",U('index'));
			}
		}
		$this -> display();
	}
//	编辑
	public function edit(){
		$id = I('get.expert_id');
		if(IS_POST){
			if($this->model->where("expert_id={$id}")->edit())$this->success('修改成功',U('index'));
			$this->error($this->model->getError());
		}
		$oldData = $this -> model -> where("expert_id = {$id}") -> find();
		$oldData['expert_brief'] = htmlspecialchars_decode($oldData['expert_brief']);
		$this -> assign('oldData', $oldData);
		$this -> display();
	}
//	删除
	public function del(){
		$caid=I('get.expert_id');
		$this->model->where("expert_id={$caid}")->delete();
		$this->success('删除成功');
	}
	
}