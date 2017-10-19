<?php
  namespace Admin\Model;
  use Think\Model;

  /**
  * 链接模型
  */
 
  class LinkModel extends Model
  {
  	 protected $patchValidate = true;
  	 protected $_auto = array(
        array("l_time","strtotime",3,'function'),
        array('l_rtime',"strtotime",3,'function')
  	 );

  	 public function addH(){
  	 	if(!$this->create()){
  	 		return $this->getError();
  	 	}else{
  	 		$this->add();
  	 		return true;
  	 	}
  	 }

  	 public function editH(){
  	 	if(!$this->create()){
  	 		return $this->getError();
  	 	}else{
  	 		$this->save();
  	 		return true;
  	 	}
  	 }
  }
?>