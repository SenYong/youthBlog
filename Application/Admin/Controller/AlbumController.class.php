<?php
  namespace Admin\Controller;
  use Think\Controller;

  /**
  * 相册管理
  */
  class AlbumController extends AuthController
  {
  	 public function index(){
  	 	$this->assign('album','open active');
  	 	$this->assign('albumadd',"class='active'");
  	 	$this->display();
  	 }

  	 //增加
  	 public function albumAdd(){
        if(!IS_AJAX){
        	$this->error("提交方式不正确",0,0);
        }else{
        	if(D('album')->addH()){
        		$data = array('error'=>0, "msg"=>"添加相册完成");
        	}else{
        		$data = array("error"=>1, "msg"=>"添加相册时发生错误");
        	}
        }
        $this->ajaxReturn($data);
  	 }

  	 //列表
  	 public function albumList(){
  	 	$this->assign('album','open active');
  	 	$this->assign('albumlist',"class='active'");
  	 	$this->count = M('album')->count();
  	 	$Page = new \Think\Page($this->count,5);
  	 	$this->page = $Page->show();
  	 	$list = M('album')->order('al_id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
  	 	$this->assign('list',$list);
  	 	$this->display();
  	 }

  	 //编辑
  	 public function albumEdit(){
  	 	$this->info = M('album')->where(array('al_id'=>I('get.id')))->find();
  	 	$this->display('index');
  	 }
     
     public function albumEditH(){
  	 	if(!IS_AJAX){
  	 		$this->error("提交方式不正确",0,0);
  	 	}else{
  	 		if(D('album')->editH()){
               $data = array("error"=>0,"msg"=>"成功");
  	 		}else{
               $data = array("error"=>1,"msg"=>"失败");
  	 		}
  	 	}
  	 	$this->ajaxReturn($data);
  	 }
    
  	 //删除
  	 public function albumDel(){
  	 	if(!IS_AJAX){
  	 		$this->error("提交方式不正确",0,0);
  	 	}else{
  	 		if(M('album')->where(array("al_id"=>I('post.id')))->delete()){
  	 			$data = array("error"=>0, "msg"=>"删除成功");
  	 		}else{
  	 			$data = array("error"=>1, "msg"=>"删除失败");
  	 		}
  	 	}
  	 	$this->ajaxReturn($data);
  	 }

     //评论相册
     public function albumContentList(){
        $this->assign('content',"open active");
        $this->assign('albumcontent',"class='active'");
        $count = M('album_c')->count();
        $Page = new \Think\Page($count,3);
        $show = $Page->show();
        $list = M('album_c')->order('alc_id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('num',$count);
        $this->assign('page',$show);
        $this->assign('list',$list);
        $this->display();
     }

     public function albumContentEdit(){
        $info = M('album_c')->where(array("alc_id"=>I('get.id')))->join("lt_album ON lt_album.al_id = lt_album_c.alc_pid")->find();
        if(!$info){
          $this->error('参数错误',0,0);
        }else{
          $this->assign('info',$info);
          $this->display();
        }
     }

     public function albumContentEditH(){
        if(!IS_AJAX){
          $this->error("提交方式不正确",0,0);
        }else{
          if(D('album_c')->editH()){
            $data = array("error"=>0, "msg"=>"回复成功");
          }else{
            $data = array("error"=>1, "msg"=>"回复失败");
          }
        }
        $this->ajaxReturn($data);
     }
  }
?>