<?php namespace Common\Model;
use Think\Model;
class Apply extends Model{
//	指定表名
	protected $tableName="serverapply";
	//	自动验证
	protected $validate=array(
		
		array('protype','required','案例名称不能为空',3,3),
		
		array('protype','maxlen:50','案例名称不能超过50个字符',3,3),
	);
	
//	自定义的store方法
	public function store(){
//		调用框架的create方法 触发自动验证
		if($this->create()){
//			如果验证通过 调用框架的添加方法 返回自增主键id
//			返回真
//p($_POST);die;
			return $this->add();
		}else{
//			返回假
			return false;
		}
	}
//	模型 编辑方法
	public function edit(){
		if($this->create()){
			$this->save();
			return true;
		}
		return false;
	}
}
