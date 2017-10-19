<?php
  namespace Admin\Controller;
  use Think\Controller;

  /**
  * 留言
  */
  class GustController extends AuthController
  {
  	  public function gustList(){
  	  	$this->assign('content',"open active");
  	  	$this->assign('gust',"class='active'");
  	  	$count = M('gust')->count();
  	  	$Page = new \Think\Page($count,3);
        $show = $Page->show();
        $list = M('gust')->order('g_id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
  	  	$this->display();
  	  }

  	  public function gustEdit(){
  	  	$this->assign('content',"open active");
  	  	$this->assign('gust',"class='active'");
  	  	$info = M('gust')->where(array('g_id'=>I('get.id')))->find();
  	  	if(!$info){
  	  		$this->error("参数错误",0,0);
  	  	}else{
  	  		$this->assign('info',$info);
            $this->display();
  	  	}
  	  }

  	  public function gustEditH(){
  	  	if(!IS_AJAX){
  	  		$this->error("提交方式不正确",0,0);
  	  	}else{
  	  		if(D('gust')->editH()){
  	  			$data = array("error"=>0, "msg"=>"回复留言成功");
  	  		}else{
  	  			$data = array("error"=>1, "msg"=>"回复留言失败");
  	  		}
  	  	}
  	  	$this->ajaxReturn($data);
  	  }
  }
?>