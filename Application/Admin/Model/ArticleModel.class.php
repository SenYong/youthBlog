<?php
  namespace Admin\Model;
  use Think\Model;

  /**
  * 文章模型
  */
  class ArticleModel extends Model
  {
  	  protected $_auto = array(
         array('a_time','strtotime',3,'function'),
         array('a_content','htmlspecialchars_decode',3,'function'),
         array('a_img','makeImg',3,'function')
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