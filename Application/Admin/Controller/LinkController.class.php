<?php
  namespace Admin\Controller;
  use Think\Controller;

  /**
  * 链接
  */
  class LinkController extends AuthController
  {
  	
  	  public function index(){
  	  	$this->assign('link', "open active");
  	  	$this->assign('linkadd', "class='active'");
  	  	$this->display();
  	  }

  	  //增加
  	  public function linkAdd(){
  	  	if(!IS_AJAX){
  	  		$this->error("提交方式不正确",0,0);
  	  	}else{
  	  		$link = D('link')->addH();
  	  		if(is_array($link)){
  	  			$data = array("error"=>1, "msg"=>"链接名称已经存在！");
  	  		}elseif($link){
  	  			$data = array("error"=>0, "msg"=>"添加链接完成");
  	  		}else{
  	  			$data = array("error"=>1, "msg"=>"添加时发生错误");
  	  		}
  	  	}
  	  	$this->ajaxReturn($data);
  	  }

  	  //列表
  	  public function linkList(){
  	  	$this->assign('link', "open active");
  	  	$this->assign('linklist', "class='active'");
  	  	$count = M('link')->count();
  	  	$this->assign('count',$count);
  	  	$Page = new \Think\Page($count,10);
        $show = $Page->show();
  	  	$this->assign('page',$show);
  	  	$list = M('link')->order('l_id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
  	  	$this->assign('list',$list);
  	  	$this->display();
  	  }

  	  //编辑
  	  public function linkEdit(){
  	  	$this->assign('link', "open active");
  	  	$this->assign('linklist', "class='active'");
  	  	$this->info = M('link')->where(array("l_id"=>I('get.id')))->find();
        $this->display('index');
  	  }

  	  //修改
  	  public function linkEditH(){
  	  	if(!IS_AJAX){
  	  		$this->error("提交方式不正确",0,0);
  	  	}else{
  	  		$link = D('link')->editH();
  	  		if(is_array($link)){
  	  			$data = array("error"=>1, "msg"=>"链接名称已经存在！");
  	  		}elseif($link){
  	  			$data = array("error"=>0, "msg"=>"修改链接完成");
  	  		}else{
  	  			$data = array("error"=>1, "msg"=>"添加时发生错误");
  	  		}
  	  	}
  	  	$this->ajaxReturn($data);
  	  }

  	  //删除
  	  public function linkDel(){
  	  	if(!IS_AJAX){
           $this->error("提交方式不正确",0,0);
  	  	}else{
  	  		if(M('link')->where(array("l_id"=>I('post.id')))->delete()){
  	  		    $data = array("error"=>0, "msg"=>"删除链接成功");
  	  		}else{
  	  			$data = array("error"=>1, "msg"=>"删除链接失败");
  	  		}
  	  	}
  	  	$this->ajaxReturn($data);
  	  }
  }
?>