<?php
 /**
 * 说说
 */
 namespace Admin\Controller;
 use Think\Controller; 

 class SayController extends AuthController
 {
 	
 	public function index(){
 		$this->assign('add',"active open");
 		$this->assign('say', "class='active'");
 		$this->display();
 	}
    
    //增加
 	public function sayAdd(){
 		//判断是否是ajax提交
 		if(!IS_AJAX){
          $this->error('提交方式不正确',0,0);
 		}else{
 		  if(D('Say')->addH()){
             $data = array('error'=>0, 'msg'=>'添加说说完成');
 		  }else{
 		  	 $data = array('error'=>1, 'msg'=>'添加时发生错误');
 		  }
 		}
 		$data = array('error'=>0, 'msg'=>'添加说说完成');
 		$this->ajaxReturn($data);
 	}
   
    //列表
 	public function sayList(){
 		$this->assign("lists","active open");
		$this->assign("saylist","class='active'");
 		$Say = M('Say');
 		$num = $Say->count();
 		$this->assign('num',$num);
 		$Page = new \Think\Page($num,5);
 		$show = $Page->show();
 		$list = $Say->order("s_id desc")->limit($Page->firstRow.','.$Page->listRows)->select();
 		$this->assign('page',$show);
 		$this->assign('list',$list);
 		$this->display();
 	}

 	//编辑
 	public function sayEdit(){
 		$info = M('Say')->where(array("s_id"=>I('get.id')))->find();
 		if($info){
            $this->assign('info',$info);
            $this->display('index');
 		}else{
 			$this->error('参数错误',0,0);
 		}
 	}

 	//修改
 	public function sayEditH(){
 		if(!IS_AJAX){
 			$this->error("提交方式不正确",0,0);
 		}else{
 			D('Say')->editH() ? $data = array("error"=>0, "msg"=>'修改成功') : $data = array("error"=>1, "msg"=>"修改是发生错误");
 		}
 		$this->ajaxReturn($data);
 	}

 	// 互动管理
 	public function sayContentList(){
 		$this->assign('content','active open');
 		$this->assign('saycontent',"class='active'");
 		$Say_c = M('say_c');
 		$count = $Say_c->count();
 		$Page = new \Think\Page($count,3);
 		$show	= $Page->show();
 		$list = $Say_c->order('sc_id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('num',$count);
        $this->assign('page',$show);
        $this->assign('list',$list);
        $this->display();
 	}

 	public function sayContentEdit(){
 		$this->assign('content','active open');
 		$this->assign('saycontent',"class='active'");
 		$info = M('say_c')->where(array('sc_id'=>I('get.id')))->find();
 		if(!$info){
          $this->error('参数错误',0,0);
 		}else{ 
          $this->assign('info',$info);
          $this->display();
 		}
 	}

 	public function sayContentEditH(){
 		if(!IS_AJAX){
 			$this->error('提交方式不正确',0,0);
 		}else{
 			if(D('say_c')->editH()){
 				$data = array("error"=>0, "msg"=>"回复说说评论完成");
 			}else{
 				$data = array("error"=>1, "msg"=>"回复说说评论失败");
 			}
 		}
 		$this->ajaxReturn($data);
 	}

 	public function sayContentDel(){
 		if(!IS_AJAX){
 			$this->error('提交方式不正确',0,0);
 		}else{
 			if(M('say_c')->where(array('sc_id'=>I('get.id')))->delete()){
 				$data = array("error"=>0, "msg"=>"删除评论说说成功");
 			}else{
 				$data = array("error"=>1, "msg"=>"删除评论说说失败");
 			}
 		}
 		$this->ajaxReturn($data);
 	}
 }
?>





