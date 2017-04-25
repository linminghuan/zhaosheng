<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;
class ArticleController extends AdminController{

	public function insert(){
		$article = D('article');
		if($article->create()){
			$result = $article->add();
			if($result){
				$this->redirect('Admin/Article/index', '',2, '<meta charset="UTF-8"><font style='.'font-family:"微软雅黑";font-size:35px;color:#555;'.'>文章增加成功</font>');
			}else{
				$this->error('增加文章失败');
			}
		}else{
			$this->error($article->getError());
		}
	}

	public function index(){
		$article = M('article');
		$p = 1;
		if($_GET['p']){
			$p = $_GET['p'];
		}
		$category = $_GET['category'];
		$qText = $_GET['qText'];
		$status = $_GET['status'];
		if($category != null && $category !=" "){
			$map['category'] = array('eq',$category);
		}
		if($qText != null && $qText !=" "){
			$map['title'] = array('like','%'.$qText.'%');
		}
		if($status != null && $status !=" "){
			$map['status'] = array('like',$status);
		}
		if(!empty($map)){
			$list = $article->where($map)->order('update_at')->page($p.',10')->select();
			$count = $article->where($map)->count();
		}else{
			$list = $article->order('update_at')->page($p.',10')->select();
			$count = $article->count();
		}
		// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		
		$this->assign('data',$list);// 赋值数据集
		// 查询满足要求的总记录数
		$Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		$show = $Page->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出
		$category = "article";
		$this->assign('category',$category);
		$this->display('Article/index'); // 输出模板
	}

	public function create(){
		$category = "article";
		$this->assign('category',$category);
		$this->display('Article/create');
	}

	public function edit($id){
		$article = M('article');
		if($id == 0){
			$data = $article->select();
		}else{
			$data = $article->find($id);
		}
		if($data){
			//$data->content = htmlentities($data->content);
			$this->assign('data',$data);
			$category = "article";
			$this->assign('category',$category);
			//var_dump($data);
			$this->display('Article/edit');
		}else{
			$this->display('Article/index');
		}
	}

	public function update($id){
		$article = D('article');
		if($article->create()){
			$result = $article->where('id = '.$id)->save();
			if($result !== false){
				$this->redirect('Admin/Article/index', '',2, '<meta charset="UTF-8"><font style='.'font-family:"微软雅黑";font-size:35px;color:#555;'.'>文章更新成功</font>');
			}else{
				$this->error($article->getError());
			}
		}else{
			$this->error($article->getError());
		}
	}

	public function delete($id){
		$article = M('article');
		$result = $article->delete($id);
		if($result){
			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
	}


}

?>