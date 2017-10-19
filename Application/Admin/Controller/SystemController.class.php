<?php
  namespace Admin\Controller;
  use Think\Controller;

  /**
  * 系统设置
  */
  class SystemController extends AuthController
  {
  	  public function index(){
  	  	$this->assign('system',"open active");
  	  	$this->assign("basic","class='active'");
  	  	$this->info = M('system')->where("id=1")->find();
  	  	$this->display();
  	  }

  	  public function systemEdit(){
        if(!IS_AJAX){
        	$this->error("提交方式不正确",0,0);
        }else{
        	$data = I('post.');
        	if(M('system')->where('id=1')->save($data)){
        		$data = array("error"=>0, "msg"=>"修改基本信息成功");
        	}else{
        		$data = array("error"=>1, "msg"=>"你没有修改任何信息");
        	}
        }
        $this->ajaxReturn($data);
  	  }

  	  public function email(){
  	  	$this->assign('system',"open active");
  	  	$this->assign("email","class='active'");
  	  	$this->display();
  	  }

  	  public function emailH(){
  	  	$str = "<?php \n return array(\n 'MAIL_HOST'=>'".I('post.host')."',\n 'MAIL_USERNAME'=>'".I('post.emailname')."',\n 'MAIL_PASSWORD'=>'".I('post.emailpwd')."',\n 'defaulthit'=>'".I('post.defaulthit')."',\n 'SORT'=>'".I('post.defaultsort')."' )?>";
  	  	if(file_put_contents('Application/Common/Conf/email.php', $str)){
			$this->ajaxReturn(array("error"=>0,"msg"=>"修改系统高级设置完成！"));
		}else{
			$this->ajaxReturn(array("error"=>1,"msg"=>"修改系统高级失败！"));
		}
  	  }

  	  public function ppt(){
  	  	$this->assign('ppts',"open active");
  	  	$this->assign("addppt","class='active'");
  	  	$this->display();
  	  }

  	  public function pptAdd(){
  	  	$upload = new \Think\Upload();
	    $upload->maxSize = 3145728 ;
	    $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
	    $upload->rootPath = './Public/Img/ppt/';
		$upload->autoSub = false;
	    $upload->saveName =	'time';
	    $info = $upload->upload();
	    $img = '/Public/Img/ppt/' . $info['file']['savename'];
	    $data = array("pp_img"=>$img, "pp_time"=>time(), "pp_from"=>getOs(), "pp_ip"=>get_client_ip(), "pp_root"=>session('uname'));
        if(M('ppt')->add($data)){
        	$this->redirect('pptList');
        }else{
        	$this->redirect('pptAdd');
        }
  	  }

  	  public function pptList(){
  	  	$this->assign('ppts',"open active");
  	  	$this->assign("listppt","class='active'");
  	  	$this->list = M('ppt')->order("pp_id desc")->select();
  	  	$this->display();
  	  } 

  	  public function pptEdit(){
  	  	$this->assign('ppts',"open active");
  	  	$this->assign("listppt","class='active'");
  	  	$this->info = M('ppt')->where(array("pp_id"=>I('get.id')))->find();
  	  	$this->display('ppt');
  	  }

  	  public function pptEditH(){
  	  	$upload = new \Think\Upload();
	    $upload->maxSize = 3145728 ;
	    $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
	    $upload->rootPath = './Public/Img/ppt/';
		$upload->autoSub = false;
	    $upload->saveName =	'time';
	    $info = $upload->upload();
	    $img = '/Public/Img/ppt/' . $info['file']['savename'];
	    var_dump($info);
	    $data = array("pp_id"=>I('get.id'),"pp_img"=>$img, "pp_time"=>time(), "pp_from"=>getOs(), "pp_ip"=>get_client_ip(), "pp_root"=>session('uname'));
	    if(M('ppt')->save($data)){
        	$this->redirect('pptList');
        }else{
        	$this->redirect('pptAdd');
        }
  	  }

  	  public function pptDel(){
  	  	 if(!IS_AJAX){
  	  	 	$this->error("提交方式不正确",0,0);
  	  	 }else{
  	  	 	if(M('ppt')->where(array("pp_id"=>I('post.id')))->delete()){
	  	  	 	$data = array("error"=>0, "msg"=>"删除成功");
	  	  	}else{
	  	  	 	$data = array("error"=>1, "msg"=>"删除失败");
	  	  	}
  	  	 }
  	  	 $this->ajaxReturn($data);
  	  }
  }
?>
