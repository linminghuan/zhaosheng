<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller{
	public function index(){
		$this->display('User/index');
	}

	public function login(){
		$User = M('Users');
		$Iname = I('name');
		$Ipassword = I('password');
		$map['name'] = $Iname;
		$result1 = $User->where($map)->select();
		if($Ipassword == $result1[0]['password']){
			session('name',$Iname);
			$this->redirect('Admin/Index/index', '',0, '<meta charset="UTF-8"><font style='.'font-family:"微软雅黑";font-size:35px;color:#555;'.'>正在跳转……</font>');
		}else{
			$this->error('密码或用户名错误，请重新登陆');
		}
	}

	public function quit(){
		session('name',null);
		$this->display('User/index');
	}

}