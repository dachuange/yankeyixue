<?php namespace Common\Model;
use Think\Model;
class Strategy extends Model{
//	指定表名
	protected $tableName="strategy";
//	自动验证 固定写法
	protected $validate=array(
//		array(字段名,验证方法,错误提示,验证条件,验证时间)
		array('title','required','分类名称不能为空',3,3),
		array('title','maxlen:50','分类名称不能超过50个字符',3,3),
		array('sketch','required','分类名称不能为空',3,3),
		array('article','required','分类名称不能为空',3,3),	
	);
//	自定义的store方法
	public function store(){
//		调用框架的create方法 触发自动验证
		if($this->create()){
//			验证通过 返回主键id
			return $this->add();
		}else{
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