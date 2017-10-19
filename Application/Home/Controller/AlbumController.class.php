<?php
  namespace Home\Controller;
  use Think\Controller;

  /**
  * 相册
  */
  class AlbumController extends CommonController
  {
  	 public function index(){
  	 	$this->assign('album','active');
  	 	$count = M('album')->where('al_show = 1')->count();
  	 	$Page = new \Think\PageHome($count,5);
  	 	$page = $Page->show();
  	 	$list = M('album')->where('al_show = 1')->order('al_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
  	 	$this->assign('list',$list);
  	 	$this->display();
  	 }

  	 public function _before_look(){   //前置函数,在执行look方法之前会先执行 _before_look方法
  	 	$id = I('get.id');
  	 	if(!M('album')->where(array('al_id'=>$id))->where('al_show != 0')->find()){
  	 		$this->error('不存在或者不显示的相册');
  	 	}
  	 }

  	 public function look(){
  	 	$this->assign('album','active');
  	 	$id = I('get.id');
  	 	if(!$albums=S("albums".$id)){    //相当于 !$a = $b,把$b的值赋给$a, 然后!$a 。等价于 ===  ($b == false)
           $albums = M('album')->where(array('al_id'=>$id))->find();
           setS("albums".$id,$albums);
  	 	}
  	 	$this->albums = $albums;
      
  	 	if(!$pictures = S('pictures'.$id)){
  	 		$pictures = M('picture')->where(array('p_pid'=>$id))->select();
  	 		setS('pictures'.$id,$pictures);
  	 	}
  	 	$this->pictures = $pictures;

      if(!$alcommon = S('albumscommon'.$id)){
         $alcommon = M('album_c')->where(array("alc_pid"=>$id))->order('alc_id desc')->limit(5)->select();
         $newIp = new \Org\Util\IP();
         for ($i=0; $i < count($alcommon); $i++) {
            $alcommon[$i]['ip'] = getIp($alcommon[$i]['alc_ip'],$newIp);
         }
         setS('albumscommon'.$id,$alcommon);
      }
      $this->alcommon = $alcommon;
      $this->display();
  	 }

  	 public function addAlbumContent(){
        if(!IS_AJAX){
        	$this->error('提交方式不正确',0,0);
        }else{
        	$very = new \Think\Verify();
        	if($very->check(I('post.txt_check')) == false){
        		$this->ajaxReturn(array("errcode"=>1,"msg"=>"验证码错误！"));
        	}else{
        	    $data = array(
                   "alc_pid" => I('post.alc_pid'),
                   "alc_name" => I('post.alc_name'),
                   "alc_email" => I('post.alc_email'),
                   "alc_url" => I('post.alc_url'),
                   "alc_content" => I('post.alc_content'),
                   "alc_ip" => get_client_ip(),
                   "alc_time" => time(),
                   "alc_from" => getOS(),
                   "alc_img" => '/Public/Img/logo/logo.jpg'
        	    );
        	    if(M('album_c')->add($data)){
        	       $data = array("errcode"=>0, "msg"=>"评论成功");
        	    }else{
        	       $data = array("errcode"=>1, "msg"=>"评论失败");
        	    }
        	    $this->ajaxReturn($data);
        	}
        }
  	 }


     
  }
?>


