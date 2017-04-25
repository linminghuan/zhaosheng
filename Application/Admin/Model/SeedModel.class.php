<?php

namespace Admin\Model;

use Think\Model;

class SeedModel extends Model {
	/*protected $_validate = array(
		
   );*/
	protected $_auto = array ( 
		array('update_at','time',1,'function'),
    );
}

?>