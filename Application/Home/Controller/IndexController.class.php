<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$article = M('article');
    	$photo = M('photo');
        $video = M('video');
        $map_1['status'] = array("eq", 1);
        $map_1['category'] = array("eq","notice");
    	$n_article = $article->where($map_1)->order('update_at')->limit(13)->select();
        $map_2['status'] = array("eq", 1);
        $map_2['category'] = array("eq","famous");
        $f_article = $article->where($map_2)->order('update_at')->limit(15)->select();
    	$d_photo = $photo->where('status = 2')->order('update_at')->limit(8)->select();
        $d_video = $video->where('status = 1')->order('update_at')->limit(6)->select();
        //var_dump($n_article);
    	$this->assign('notice',$n_article);
        $this->assign('famous',$f_article);
        $this->assign('photo',$d_photo);
        $this->assign('video',$d_video);
        $nav["category"] = $category;
        $nav["sub_category"] = $sub_category;
        $this->assign('nav',$nav);
    	$this->display('Index/index');
    }

    public function list_H($category){
        if($category == "downfile"){
           $model = M('downfile'); 
        }else if($category == 'photo'){
            $model = M('photo');
        }else if($category == 'video'){
            $model = M('video');
        }else{
            $model = M('article');
        }
        $p = 1;
        if($_GET['p']){
            $p = $_GET['p'];
        }
        $sub_category = $_GET['sub_category'];
        $map['category'] = array('eq',$category);
        $map['status'] = array('eq',1);
        if($sub_category != ""){
            $map['sub_category'] = array('eq',$sub_category);
        }
        if(!empty($map)){
            $list = $model->where($map)->order('update_at')->page($p.',15')->select();
            $count = $model->where($map)->count();
        }
        $this->assign('list',$list);
        $Page = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show();// 分页显示输出
        $this->assign('page',$show);
        $nav["category"] = $category;
        $nav["sub_category"] = $sub_category;
        $this->assign('nav',$nav);
        $this->display('Public/list');
    }

    public function content ($category,$id){
        if($category == "downfile"){
           $model = M('downfile'); 
        }else if($category == 'photo'){
            $model = M('photo');
        }else{
            $model = M('article');
        }
        $data = $model->find($id);
        $this->assign('data',$data);
        $nav["category"] = $category;
        $nav["sub_category"] = $sub_category;
        $this->assign('nav',$nav);
        if($category == 'photo'){
            $this->display('Public/photo');
        }else{
             $this->display('Public/content');
        }
    }

    /*public function list_V(){
        $video = M('video');
        $p = 1;
        if($_GET['p']){
            $p = $_GET['p'];
        }
        $map['status'] = array('eq',1);
        if(!empty($map)){
            $list = $model->where($map)->order('update_at')->page($p.',20')->select();
            $count = $model->where($map)->count();
        }
        this->assign('list',$list);
        $Page = new \Think\Page($count,20);// 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show();// 分页显示输出
        $this->assign('page',$show);
        $nav["category"] = "video";
        $this->assign('nav',$nav);
        $this->display('Public/list_V');
    }*/

    public function downfile($id) {
        $downfile = M('downfile');
        $data = $downfile->find($id);
        $filename = $data['url'];
        $temp = strchr($filename,'.');
        $filename = str_replace("/zhaosheng",".",$filename);
        $showname = $data['name'];
        $showname = $showname.$temp;
        var_dump($temp);
        var_dump($data['name']);
        var_dump($showname);
        $http = new \Org\Net\Http();
        $http->download($filename,$showname);
       /* if (! file_exists ( $filename )) {    
            echo "文件找不到";    
            exit ();    
        } else {    
            //打开文件    
            $file = fopen ( $filename, "r" );    
            //输入文件标签     
            Header ( "Content-type: application/octet-stream" );    
            Header ( "Accept-Ranges: bytes" );    
            Header ( "Accept-Length: " . filesize ( $filename ) );    
            Header ( "Content-Disposition: attachment; filename=" . $showname );    
            //输出文件内容     
            //读取文件内容并直接输出到浏览器    
            echo fread ( $file, filesize ( $filename ) );    
            fclose ( $file );    
            exit ();    
        }*/
    }
}