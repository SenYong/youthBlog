<?php
  namespace Admin\Controller;
  use Think\Controller;

  /**
  * 用户
  */
  class UserController extends AuthController
  {
       
      //展示
      public function userAdd(){
        $this->assign('user',"open active");
        $this->assign('useradd',"class='active'");
      	$this->display();
      }
      
      //添加
      public function userAddH(){
      	if(!IS_AJAX){
      		$this->error("提交方式不正确",0,0);
      	}else{
      		if(D('user')->addH()){
               $data = array('error'=>0, "msg"=>"添加成功");
      		}else{
               $data = array('error'=>1, "msg"=>"添加失败");
      		}
      	}
      	$this->ajaxReturn($data);
      }

  	  //列表
  	  public function userList(){
        $this->assign('user',"open active");
        $this->assign('userlist',"class='active'");
  	  	$this->count = M('user')->count();
  	  	$this->list = M('user')->order("u_id desc")->select();
  	  	$this->display();
  	  }

  	  //编辑
  	  public function userEdit(){
  	  	$this->info = M('user')->where(array("u_id"=>I('get.id')))->find();
  	  	$this->display('userAdd');
  	  }
      
      //修改
  	  public function userEditH(){
  	  	if(!IS_AJAX){
  	  		$this->error("提交方式不正确",0,0);
  	  	}else{
  	  		$tmp = D('user')->editH();
  	  		if(is_array($tmp)){
  	  			$data = array("error"=>1, "msg"=>"用户名已存在!");
  	  		}else if($tmp){
  	  			$data = array("error"=>0, "msg"=>"修改成功");
  	  		}else{
  	  			$data = array("error"=>1, "msg"=>"修改是发生错误");
  	  		}
  	  		$this->ajaxReturn($data);
  	  	}
  	  }
      
      //删除
  	  public function userDel(){
  	  	 if(!IS_AJAX){
  	  	 	$this->error('提交方式不正确',0,0);
  	  	 }else{
  	  	 	if(M('user')->where(array('u_id'=>I('post.id')))->delete()){
  	  	 		$data = array("error"=>0, "msg"=>"删除成功");
  	  	 	}else{
  	  	 		$data = array("error"=>1, "msg"=>"删除失败");
  	  	 	}
  	  	 }
  	  	 $this->ajaxReturn($data);
  	  }
  }
?>