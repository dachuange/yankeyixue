<?php
namespace Admin\Controller;
class CompanyController extends CommonController{
    private $model;
    public function __construct()
    {
        parent::__construct();
        $this -> model = new \Common\Model\Company;

    }
    public function index(){
        $data = $this -> model -> order('company_time desc') -> select();
        foreach ($data as $k => $v){
            $data[$k]['company_time'] = date('Y-m-d',$data[$k]['company_time']);
        }
        $this -> assign('data',$data);
        $this -> display();
    }
    public function add(){
        if(IS_POST){
            $_POST['company_time'] = time();
            $_POST['company_password'] = md5($_POST['company_password']);
            if($this -> model -> store()){
                $this -> success("添加成功",U('index'));
            }
        }
        $this -> display();
    }
    public function edit(){
        $id = I('get.company_id');
        if(IS_POST){
            if($this->model->where("company_id={$id}")->edit())$this->success('修改成功',U('index'));
            $this->error($this->model->getError());
        }
        $oldData = $this -> model -> where("company_id = {$id}") -> find();
        $oldData['company_intro'] = htmlspecialchars_decode($oldData['company_intro']);
        $this -> assign('oldData', $oldData);
        $this -> display();
    }
    public function del(){
        $cid = I('get.company_id');
        $this -> model -> where("company_id = {$cid}") -> delete();
        $this -> success("删除成功");
    }
}