<?php namespace Common\Model;
use Think\Model;
class Product extends Model{
//	指定表名
	protected $tableName="product";
	//	自动验证
	protected $validate=array(
		
		array('pname','required','产品名称不能为空',3,3),
		
		array('pname','maxlen:50','产品名称不能超过50个字符',3,3),
	);
	
//	自定义的store方法
	public function store(){
//		调用框架的create方法 触发自动验证
		if($this->create()){
			$detaModel=new \Common\Model\Productdeta;
			$pid=$this->add();
//		给模型的data属性压入值 那么add添加的时候就可以添加到数据库
			$detaModel->data['pid']=$pid;
			$_POST['pid']=$pid;
			$detaModel->add($_POST);
//			echo $detaModel->getLastSql();
//			 echo $this->getLastSql();exit;
			return true;
		}else{
//			返回假
			return false;
		}
	}
//	模型 编辑方法
	public function edit(){
		if($this->create()){
			$this->save();
			$detaModel=new \Common\Model\Productdeta;
			$pid=I('get.pid');
			$detaModel->where("pid = {$pid}")->save($_POST);
			return true;
		}
		return false;
	}
}
