<?php
   namespace Admin\Controller;
   use Think\Controller;

   /**
   * 版本
   */
   class VersionController extends AuthController
   {
   	  public function index(){
         $this->assign('add',"active open");
         $this->assign('ver',"class='active'");
   	  	$this->display();
   	  }
      
      //增加
   	  public function verAdd(){
         if(!IS_AJAX){
         	$this->error("提交方式不正确",0,0);
         }else{
         	if(D('version')->addH()){
         		$data = array("error"=>0, "msg"=>"发布成功");
         	}else{
         		$data = array("error"=>1, "msg"=>"发布失败");
         	}
         }
         $this->ajaxReturn($data);
   	  }
      
      //列表
      public function verList(){
          $this->assign('lists',"open active");
          $this->assign('verlist',"class='active'");
      	 $this->list = M('version')->order("v_id desc")->select();
      	 $this->display();
      }
   }
?>