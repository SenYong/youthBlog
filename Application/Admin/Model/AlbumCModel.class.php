<?php
  namespace Admin\Model;
  use Think\Model;

  /**
  * 评论相册模型
  */
  class AlbumCModel extends Model
  {
  	 protected $_auto = array(
		array('alc_img','ac_email',self::MODEL_INSERT,'field'),
		array('alc_img','check_img',self::MODEL_INSERT,'function'),
		array('alc_ip','get_client_ip',self::MODEL_INSERT,'function'),
		array('alc_time','time',self::MODEL_INSERT,'function'),	
		array('alc_from','getOs',self::MODEL_INSERT,'function'),
		array('alc_rtime','time',self::MODEL_UPDATE,'function'),		
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