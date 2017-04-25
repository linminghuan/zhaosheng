<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;
class DownfileController extends AdminController{
	public function index(){
		$downfile = M('downfile');
		$p = 1;
		$status = $_GET['status'];
		if($_GET['p']){
			$p = $_GET['p'];
		}
		if($status != null && $status !=" "){
			$map['status'] = array('eq',$status);
		}
		if(!empty($map)){
			$list = $downfile->where($map)->order('update_at')->page($p.',10')->select();
			$count = $downfile->where($map)->count();
		}else{
			$list = $downfile->order('update_at')->page($p.',10')->select();
			$count = $downfile->count();
		}
		$this->assign('data',$list);// 赋值数据集
		// 查询满足要求的总记录数
		$Page = new \Think\Page($count,10);//实例化分页类 传入总记录数和每页显示的记录数
		$show = $Page->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出
		$category = "downfile";
		$this->assign('category',$category);
		$this->display('Downfile/index'); // 输出模板
	}

	public function insert(){
		$downfile = D('downfile');
		//dump($downfile->create()['url']);
		if($downfile->create()){
			$result = $downfile->add();
			if($result){
				$this->redirect('Admin/Downfile/index', '',2, '<meta charset="UTF-8"><font style='.'font-family:"微软雅黑";font-size:35px;color:#555;'.'>附件增加成功</font>');
			}else{
				$this->error('增加文章失败');
			}
		}else{
			$this->error($downfile->getError());
		}
	}

	public function edit($id){
		$downfile = M('downfile');
		if($id == 0){
			$data = $downfile->select();
		}else{
			$data = $downfile->find($id);
		}
		if($data){
			//$data->content = htmlentities($data->content);
			$this->assign('data',$data);
			//var_dump($data);
			$category = "downfile";
			$this->assign('category',$category);
			$this->display('Downfile/edit');
		}else{
			$this->display('Downfile/index');
		}
	}

	public function create(){
		$downfile = M('downfile');
		$category = "downfile";
		$this->assign('category',$category);
		$this->display('Downfile/create');
	}

	public function update($id){
		$downfile = D('downfile');
		if($downfile->create()){
			$result = $downfile->where('id = '.$id)->save();
			if($result !== false){
				$this->redirect('Admin/Downfile/index', '',2, '<meta charset="UTF-8"><font style='.'font-family:"微软雅黑";font-size:35px;color:#555;'.'>附件更新成功</font>');
			}else{
				$this->error($downfile->getError());
			}
		}else{
			$this->error($downfile->getError());
		}
	}

	public function delete($id){
		$downfile = M('downfile');
		$data = $downfile->find($id);
		$tmp = str_replace("/zhaosheng/","./",$data['url']);
		if(unlink($tmp)){
			$result = $downfile->delete($id);
			if($result){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}
		}else{
			$this->error('删除失败');
		}
	}
}
?>