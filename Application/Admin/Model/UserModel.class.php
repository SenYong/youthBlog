<?php
 /**
 * 用户模型
 */
 namespace Admin\Model;
 use Think\Model;

 class UserModel extends Model
 {
 	protected $_validate = array(
       array('u_name','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证u_name字段是否唯一
 	);

 	protected $_auto = array(
       array('u_password','md5',3,'function') , // 对u_password字段在新增和编辑的时候使md5函数处理
       array('u_time','strtotime',3,'function')
 	);

 	public function in($user,$password){
 		$info = $this->where(array("u_name"=>$user))->find();
 		if($info){
            if($info['u_password'] == md5($password)){
            	session('uid', $info['u_id']);
            	session('uname', $info['u_name']);
            	session('uclass', $info['u_class']);
            	return true;
            }else{
            	return false;
            }

 		}else{
 		    return false;
 		}
 	}

 	//新建用户
  	public function addH(){
		if(!$this->create())
			return $this->getError();
		else{
			$this->add();
			return TRUE;
		}
	}
	
	//密码修改
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