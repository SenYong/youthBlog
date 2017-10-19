<?php
 namespace Admin\Model;
 use Think\Model;
 /**
 * 栏目模型
 */
 class TagModel extends Model
 {
 	protected $_auto = array(
       array('t_time','strtotime',3,'function')
 	);

 	public function addH(){
 		if(!$this->create()){
 			return $this->getError();
 		}else{
 			$this->add();
 			return true;
 		}
 	}

 	public function EditH(){
 		if(!$this->create()){
 			return $this->getError();
 		}else{
 			$this->save();
 			return true;
 		}
 	}
 }
?>