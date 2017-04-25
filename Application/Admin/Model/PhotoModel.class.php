<?php

namespace Admin\Model;

use Think\Model;

class PhotoModel extends Model {

	protected $_validate = array(
		array('note','require','描述必须！'), 
    );

	protected $_auto = array ( 
		array('update_at','time',3,'function'),
		array('url','GetImgUrl',3,'callback'),
		array('author','AutoAuthor',1,'callback'),
    );

    public function GetImgUrl($str){
		$str = strchr($str,"/");
		$str = strchr($str,"&quot;",true);
		return $str;
	}

	public function AutoAuthor ($param){
    	if(I('post.author') == ''){
    		$param = $_SESSION['name'];
    	}else{
    		$param = I('post.author');
    	}
    	return $param;
    }
}

?>