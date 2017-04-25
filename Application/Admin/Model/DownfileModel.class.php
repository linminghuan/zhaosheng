<?php
namespace Admin\Model;
use Think\Model;
class DownfileModel extends Model {
	protected $_auto = array ( 
		array('update_at','time',3,'function'),
		array('url','GetImgUrl',3,'callback'),
    );

    public function GetImgUrl($str){
        $str = strchr($str,"href=");
		$str = strchr($str,"/");
		$str = strchr($str,"&quot;",true);
		return $str;
	}
    
	/*public function AutoAuthor ($param){
    	if(I('post.author') == ''){
    		$param = $_SESSION['name'];
    	}else{
    		$param = I('post.author');
    	}
    	return $param;
    }*/
}

?>