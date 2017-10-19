<?php
 namespace Admin\Controller;
 use Think\Controller;

 /**
 * 图片上传
 */
 class PictureController extends AuthController
 {
 	public function index(){
 		$this->assign("picture","open active");
 		$this->assign("addpic","class='active'");
 		$this->pid = M('album')->select();
 		$this->display();
 	}

 	//添加
 	public function pictureAdd(){
 		if(!IS_AJAX){
 			$this->error("提交方式不正确",0,0);
 		}else{
 			if(D('picture')->addH()){
        		$data = array('error'=>0, "msg"=>"添加图片完成");
        	}else{
        		$data = array("error"=>1, "msg"=>"添加图片时发生错误");
        	}
 		}
        $this->ajaxReturn($data);
 	}
    
    //列表
 	public function pictureList(){
 		$this->assign("picture","open active");
 		$this->assign("listpic","class='active'");
 		$this->list = M('picture')->order("p_id desc")->select();
 		$this->display();
 	}

 	//编辑
 	public function pictureEdit(){
 		$this->assign("picture","open active");
 		$this->assign("addpic","class='active'");
 		$this->info = M('picture')->where(array('p_id'=>I('get.id')))->find();
 		$this->pid = M('album')->select();
 		$this->display('index');
 	}

 	//修改
 	public function pictureEditH(){
 		if(!IS_AJAX){
 			$this->error('提交方式不正确',0,0);
 		}else{
 			if(D('picture')->editH()){
 				$data = array("error"=>0, "msg"=>"修改成功");
 			}else{
 				$data = array("error"=>1, "msg"=>"修改失败");
 			}
 		}
 		$this->ajaxReturn($data);
 	}

 	//删除
 	public function pictureDel(){
 		if(!IS_AJAX){
 			$this->error("提交方式不正确",0,0);
 		}else{
 			if(M('picture')->where(array("p_id"=>I('post.id')))->delete()){
 			   $data = array("error"=>0, "msg"=>"删除成功");
	 		}else{
	 		   $data = array("error"=>1, "msg"=>"删除失败");
	 		}
 		}
        $this->ajaxReturn($data);
 	}
 }
?>