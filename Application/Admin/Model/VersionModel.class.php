<?php
  namespace Admin\Model;
  use Think\Model;

  /**
  * 版本模型
  */
 
  class VersionModel extends Model
  {
  	  protected $_auto = array(
  	  	  array("v_time", "strtotime",3,"function")
  	  );

  	  public function addH(){
  	  	if(!$this->create()){
           return $this->getError();
  	  	}else{
  	  	   $this->add();
  	  	   return true;
  	  	}
  	  }
  }
?>