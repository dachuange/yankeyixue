<?php namespace Common\Model;
use Think\Model;
class Facuser extends Model{
//	指定表名
	protected $tableName="facuser";
//	自动验证 固定写法
	protected $validate=array(
//		array(字段名,验证方法,错误提示,验证条件,验证时间)
		array('company','required','分类名称不能为空',3,3),
			
	);
//	模型 编辑方法
	public function edit(){
		if($this->create()){
			$this->save();
			return true;
		}
		return false;
	}	
}