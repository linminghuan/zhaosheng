<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;
class VideoController extends AdminController{

	public function index(){
		$video = M('video');
		$p = 1;
		$status = $_GET['status'];
		$category = $_GET['category'];
		if($_GET['p']){
			$p = $_GET['p'];
		}
		if($status != null && $status !=" "){
			$map['status'] = array('eq',$status);
		}
		if(!empty($map)){
			$list = $video->where($map)->order('update_at')->page($p.',10')->select();
			$count = $video->where($map)->count();
		}else{
			$list = $video->order('update_at')->page($p.',10')->select();
			$count = $video->count();
		}
		$this->assign('data',$list);// 赋值数据集
		// 查询满足要求的总记录数
		$Page = new \Think\Page($count,10);//实例化分页类 传入总记录数和每页显示的记录数
		$show = $Page->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出
		$category = "video";
		$this->assign('category',$category);
		$this->display("Video/index");
	}

	public function insert(){
		$video = D('video');
		if($video->create()){
			$result = $video->add();
			if($result){
				$this->redirect('Admin/Video/index', '',2, '<meta charset="UTF-8"><font style='.'font-family:"微软雅黑";font-size:35px;color:#555;'.'>视频增加成功</font>');
			}else{
				$this->error('增加文章失败');
			}
		}else{
			$this->error($video->getError());
		}
	}

	public function edit($id){
		$video = M('video');
		if($id == 0){
			$data = $video->select();
		}else{
			$data = $video->find($id);
		}
		if($data){
			//$data->content = htmlentities($data->content);
			$this->assign('data',$data);
			//var_dump($data);
			$category = "video";
			$this->assign('category',$category);
			$this->display('Video/edit');
		}else{
			$this->display('Video/index');
		}
	}

	public function create(){
		$video = M('video');
		$category = "video";
		$this->assign('category',$category);
		$this->display('Video/create');
	}

	public function update($id){
		$video = D('video');
		if($video->create()){
			$result = $video->where('id = '.$id)->save();
			if($result !== false){
				$this->redirect('Admin/Video/index', '',2, '<meta charset="UTF-8"><font style='.'font-family:"微软雅黑";font-size:35px;color:#555;'.'>视频更新成功</font>');
			}else{
				$this->error($video->getError());
			}
		}else{
			$this->error($video->getError());
		}
	}

	public function delete($id){
		$video = M('video');
		$data = $video->find($id);
		$tmp = str_replace("/zhaosheng/","./",$data['photo_url']);
		if(unlink($tmp)){
			$result = $video->delete($id);
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