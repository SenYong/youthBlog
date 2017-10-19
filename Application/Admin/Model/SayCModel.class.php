<?php
  namespace Admin\Model;
  use Think\Model;

  /**
  * 说说评论模型
  */
  class SayCModel extends Model
  { 	
  	protected $_auto = array(
		array('sc_img','ac_email',self::MODEL_INSERT,'field'),
		array('sc_img','check_img',self::MODEL_INSERT,'function'),
		array('sc_ip','get_client_ip',self::MODEL_INSERT,'function'),
		array('sc_time','time',self::MODEL_INSERT,'function'),	
		array('sc_from','getOs',self::MODEL_INSERT,'function'),	
		array('sc_rtime','strtotime',self::MODEL_UPDATE,'function'),
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