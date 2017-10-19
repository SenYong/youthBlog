<?php
  namespace Admin\Controller;
  use Think\Controller;


  /**
  * 栏目
  */
  class TagController extends AuthController
  {
  	
  	 public function index(){
      $this->assign('tag',"open active");
      $this->assign('addtag',"class='active'");
  	 	$this->display();
  	 }
     
     //增加
  	 public function tagAdd(){
  	 	if(!IS_AJAX){
            $this->error('提交方式不正确',0,0);
  	 	}else{
  	 		if(D('Tag')->addH()){
	  	 		$data = array('error'=>0, "msg"=>"添加栏目成功");
	  	 	}else{
	  	 		$data = array('error'=>1,"msg"=>"添加栏目失败");
	  	 	}
  	 	}
  	 	$this->ajaxReturn($data);
  	 }
     
     //列表
  	 public function tagList(){
      $this->assign('tag',"open active");
      $this->assign('addlist',"class='active'");
  	 	$Tag = M('Tag');
        $num = $Tag->count();
        $this->assign('num',$num);
        $Page = new \Think\Page($num,10);
        $show = $Page->show();
        $list = $Tag->order('t_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('page',$show);
        $this->assign('list',$list);
        $this->display();
  	 }

  	 //编辑
  	 public function tagEdit(){
  	 	$info = D('Tag')->where(array("t_id"=>I('get.id')))->find();
  	 	if(!$info){
  	 		$this->error('参数错误',0,0);
  	 	}else{
            $this->assign('info',$info);
            $this->display('index');
  	 	}
  	 }

  	 //修改
  	 public function tagEditH(){
  	 	if(!IS_AJAX){
  	 		$this->error('提交方式不正确',0,0);
  	 	}else{
  	 		if(D('Tag')->EditH()){
  	 			$data = array('error'=>0, 'msg'=>'修改成功');
  	 		}else{
  	 			$data = array('error'=>1, 'msg'=>'修改时发生错误');
  	 		}
  	 	}
  	 	$this->ajaxReturn($data);
  	 }

     //删除
     public function tagDel(){
        if(!IS_AJAX){
          $this->error("提交方式不正确",0,0);
        }else{
          if(M('tag')->where(array("t_id"=>I('post.id')))->delete()){
            $data = array("error"=>0, "msg"=>"删除成功");
          }else{
            $data = array("error"=>1, "msg"=>"删除失败");
          }
        }
        $this->ajaxReturn($data);
     }
  }
?>

