<?php

namespace Admin\Controller;

use Admin\Controller\AdminController;

class SeedController extends AdminController{
	public function Article($time = 100){
		$tArticle = M('article');
		$content = $tArticle->find(1)['content'];
		$category = ["academy","famous","teachers","majors","notice","platform","student_organization","for_new","bachelor","master","doctor"];
		$arr=range(0,10);
		//var_dump($arr);
		for($i = 0 ; $i < $time ; $i++){
			shuffle($arr);
			$data['title'] = "土壤环境化学专家翁莉萍研究员受聘我校“丁颖讲座教授”";
			$data['author'] = "文：资源环境学院李永涛、任宗玲；图：任宗玲";
			$data['content'] = $content;
			$tmp = $category[$arr[0]];
			$data['update_at'] = time();
			$data['category'] = $tmp;
			$tmp1 = $i%2;
			$data['status'] = $tmp1;
			$tArticle->add($data);
		}
		echo "OK";
	}

	public function Photo($time = 100){
		$tPhoto = M('photo');
		$url = $tPhoto->find(1)['url'];
		for($i = 0 ; $i < $time ; $i++){
			$data['note'] = "把袖子撸起来！2017学校工作会议聚焦一流大学建设";
			$data['url'] = $url;
			$data['update_at'] = time();
			$data['status'] = $i%2;
			$tPhoto->add($data);
		}
		echo "OK";
	}
}

?>