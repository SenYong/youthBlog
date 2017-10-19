<?php
  namespace Admin\Model;
  use Think\Model;

  /**
  * 说说模型
  */
  class SayModel extends Model
  {
  	 //自动完成是ThinkPHP提供用来完成数据自动处理和过滤的方法，使用create方法创建数据对象的时候会自动完成数据处理
  	 protected $_auto = array(
       array('s_time','strtotime',3,'function'),  //把时间转化为时间戳
       array('s_content','htmlspecialchars_decode',3,'function'), // 百度编辑器 与 htmlspecialchars_decode,存的时候为了安全把进行了字符转换
     );
     
     //增加
  	 public function addH(){
        if(!$this->create()){
        	return $this->getError();
        }else{
        	$this->add();
        	return true;
        }
  	 }
     
     //修改
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