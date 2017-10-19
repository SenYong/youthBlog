<?php
  namespace Admin\Model;
  use Think\Model;

  /**
  * 评论文章模型
  */
  class ArticleCModel extends Model
  {
  	
  	protected $_auto = array(

		array('ac_img','ac_email',self::MODEL_INSERT,'field'),
		array('ac_img','check_img',self::MODEL_INSERT,'function'),
		array('ac_ip','get_client_ip',self::MODEL_INSERT,'function'),
		array('ac_time','time',self::MODEL_INSERT,'function'),	
		array('ac_from','getOs',self::MODEL_INSERT,'function'),	
		array('ac_rtime','strtotime',self::MODEL_UPDATE,'function'),
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