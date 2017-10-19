<?php
  namespace Admin\Model;
  use Think\Model;

  /**
  * 留言模型
  */
  class GustModel extends Model
  {
  	
  	protected $_auto = array(
		array('g_img','g_email',self::MODEL_INSERT,'field'),
		array('g_img','check_img',self::MODEL_INSERT,'function'),
		array('g_ip','get_client_ip',self::MODEL_INSERT,'function'),
		array('g_time','time',self::MODEL_INSERT,'function'),	
		array('g_from','getOs',self::MODEL_INSERT,'function'),	
		array('g_rtime','time',self::MODEL_UPDATE,'function'),
	);

	public function editH(){
		if(!$this->create())
			return $this->getError();
		else{
			$this->save();
			return TRUE;
		}
	}
  }
?>