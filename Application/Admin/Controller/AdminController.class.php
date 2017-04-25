<?php

namespace Admin\Controller;

use Think\Controller;

class AdminController extends Controller {

    public function _initialize() {

        $this->checklogin();

    }



    public function checklogin() { 

        if ((!isset($_SESSION['name']) || !$_SESSION['name'])) {

			$this->redirect('Admin/User/index', '',2, '<meta charset="UTF-8"><span style='.'font-family:"微软雅黑";font-size:35px;color:#555;'.'>禁止访问，请先登录</span>');

        }



    }

}