<?php
 namespace Home\Controller;
 use Think\Controller;

 /**
 * 留言板
 */
 class GustController extends CommonController
 {
 	 public function index(){
 	 	$this->assign('gust','active');
 	 	$count = M('gust')->count();
 	 	$Page = new \Think\PageHome($count,5);
 	 	$Page->url = 'gust';
 	 	$show  = $Page->show();
 	 	$content = M('gust')->order('g_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $newIp = new \Org\Util\IP();
        for ($i=0; $i < count($content); $i++) {
          $content[$i]['ip'] = getIp($content[$i]['g_ip'],$newIp);
        }
        $this->assign('contents',$content);
 	 	$this->assign('page',$show);
 	 	$this->display();
 	 }

 	 public function addContent(){
 	 	if(!IS_AJAX){
 	 		$this->error("提交方式不正确",0,0);
 	 	}else{
 	 		$very = new \Think\Verify();
 	 		if($very->check(I('post.txt_check')) == false){
 	 			$this->ajaxReturn(array("errcode"=>1, "msg"=>"验证码错误！"));
 	 		}else{
 	 			$data = array(
                   "g_name" => I('post.g_name'),
                   "g_email" => I('post.g_email'),
                   "g_url" => I('post.g_url'),
                   "g_content" =>I('post.g_content'),
                   "g_img" => '/Public/Img/logo/logo.jpg',
                   "g_time" => time(),
                   "g_from" => getOs(),
                   "g_ip" => get_client_ip()
 	 			);
 	 			if(M('gust')->add($data)){
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