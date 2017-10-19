<?php
  namespace Home\Controller;
  use Think\Controller;

  /**
  * 文章
  */
  class ArticleController extends CommonController
  {
  	 public function _before_index(){
  	 	$id = I('get.id');
  	 	if(!M('article')->where(array("a_id"=>$id))->where('a_show != 0')->find()){
           $this->error("不存在或者不显示的文章!");
  	 	}
  	 }

  	 public function index(){
  	 	$this->assign('class','active');
  	 	$id = I('get.id');
  	 	$tmp = M('article');
  	 	if(!$info = S('article'.$id)){
  	 	   $info = $tmp->join("lt_tag on lt_tag.t_id = lt_article.pid")->where(array('lt_article.a_id'=>$id))->find();
  	 	}
      
      if(!$artcommon = S('artcommon'.$id)){
         $artcommon = M('article_c')->where(array('ac_pid'=>$id))->order('ac_id desc')->limit(5)->select();
         $newIp = new \Org\Util\IP();
         for ($i=0; $i < count($artcommon); $i++) {
            $artcommon[$i]['ip'] = getIp($artcommon[$i]['ac_ip'],$newIp);
         }
         setS('artcommon'.$id,$artcommon); 
      }
  	 	$this->info = $info;
      $this->artcommon = $artcommon;
  	 	$tmp->where(array('a_id'=>$id))->setInc('a_hit'); //点击数自增1
  	 	$this->up = $tmp->where('a_show != 0 and a_id <'.$id)->order('a_id desc')->limit(1)->find();
  	 	$this->down = $tmp->where('a_show != 0 and a_id >'.$id)->order('a_id')->limit(1)->find();
  	 	$this->display();
  	 }

  	 public function addArticleContent(){
  	 	if(!IS_AJAX){
  	 		$this->error("提交方式不正确",0,0);
  	 	}else{
  	 		$very = new \Think\Verify();
  	 		if($very->check(I('post.txt_check')) == false){
  	 			$this->ajaxReturn(array("errcode"=>1, "msg"=>"验证码错误！"));
  	 		}else{
  	 			$data = array(
                  "ac_pid" => I('post.ac_pid'),
                  "ac_name" => I('post.ac_name'),
                  "ac_email" => I('post.ac_email'),
                  "ac_url" => I('post.ac_url'),
                  "ac_content" => I('post.ac_content'),
                  "ac_img" => '/Public/Img/logo/logo.jpg',
                  "ac_ip" => get_client_ip(),
                  "ac_from" => getOs(),
                  "ac_time" => time()
  	 			);
  	 			if(M('article_c')->add($data)){
             M('article')->where(array('a_id'=>I('post.ac_pid')))->setInc('a_num');
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