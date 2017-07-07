<?php
namespace Admin\Model;
use Think\Model;
class ArticleModel extends Model {
	protected $_validate = array(
		array('title','require','标题必须！'), 
		// array('author','require','作者必须，若未知填佚名！'), 
		array('content','require','正文必须！'),
    );
	protected $_auto = array ( 
		array('update_at','time',3,'function'),
		array('author','AutoAuthor',1,'callback'),
    );

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