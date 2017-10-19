<?php
  namespace Admin\Model;
  use Think\Model;

  /**
  * 相册模型
  */
  class AlbumModel extends Model
  {
  	 protected $_auto = array(
         array('al_time','strtotime',3,'function'), 
         array('al_img','getImg',3,'function'),
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