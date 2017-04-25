<?php
namespace Admin\Model;
use Think\Model;
class VideoModel extends Model {
	protected $_validate = array(
		array('title','require','标题必须！'), 
		array('video_url','require','请输入视频地址'), 
		array('photo_url','require','请上传封面图片'),
   );
	protected $_auto = array ( 
		array('update_at','time',3,'function'),
		array('photo_url','GetImgUrl',3,'callback'),
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