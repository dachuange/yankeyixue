<?php namespace Common\Model;
use Think\Model;
class Scheme extends Model{
//	指定表名
	protected $tableName="scheme";
//	自动验证 固定写法
	protected $_validate=array(
		array('title','require','名称不能为空'),
		array('article','require','文章内容不能为空'),		
	);
//	自动添加
	protected $_auto=array(
		array('time','time',1,'function'),
	
	);
//	自定义的store方法
	public function store(){
		if($this->create()){
			return $this->add();
		}else{
			return false;
		}
	}
//	编辑
	public function edit(){
		if($this->create()){
			$this->save();
			return true;
		}else{
			return false;
		}
	}
}