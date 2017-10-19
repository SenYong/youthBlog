<?php
 namespace Admin\Model;
 use Think\Model;

 /**
 * 相册模型
 */
 class PictureModel extends Model
 {
 	protected $_auto = array(
       array("p_time","strtotime",3,"function"),
       array("p_img","getImg",3,"function"),
       array("p_thumb","p_img",3,"field"),
       array("p_thumb","getAThumb",3,"function"),
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