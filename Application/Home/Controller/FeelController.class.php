<?php
  namespace Home\Controller;
  use Think\Controller;

  /**
  * 说说
  */
  class FeelController extends CommonController
  {

  	 public function index(){
  	 	$this->assign('feel','active');
  	 	$tmp = M('say');
  	 	$count = $tmp->where('s_view = 1')->count();
        $Page = new \Think\PageHome($count,3);
        $Page->url = 'feel/page';
        $page = $Page->show();
        $list = $tmp->where('s_view = 1')->order('s_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('page',$page);
        $this->assign('list',$list);
  	  	$this->display();
  	 }

     public function _before_info(){
        $id = I('get.id');
        if(!M('say')->where(array('s_id'=>$id))->where('s_view != 0')->find()){
          $this->error("不存在或者不显示的说说!");
        }
     }

     public function info(){
        $this->assign('feel','active');
        $id = I('get.id');
        $tmp = M('say');
        
        if(!$sayinfo = S('say'.$id)){
          $sayinfo = $tmp->where(array("s_id"=>$id))->where('s_view != 0')->find();
          setS('say'.$id,$sayinfo);
        }
         
        if(!$saycommon = S('saycommon'.$id)){
          $saycommon = M('say_c')->where(array('sc_pid'=>$id))->order('sc_id desc')->limit(5)->select();
          $newIp = new \Org\Util\IP();
          for ($i=0; $i < count($saycommon); $i++) {
            $saycommon[$i]['ip'] = getIp($saycommon[$i]['sc_ip'],$newIp);
          }
          setS("saycommon_".$id,$saycommon);
        }
        $this->sayinfo = $sayinfo;
        $this->saycommon = $saycommon;
        $this->up = $tmp->where('s_view!=0 and s_id <'.$id)->order('s_id desc')->limit(1)->find();
        $this->down = $tmp->where('s_view!=0 and s_id>'.$id)->order('s_id')->limit(1)->find();
        $this->display();
     }

     public function addFeelContent(){
        if(!IS_AJAX){
          $this->error("提交方式不正确",0,0);
        }else{
          $very = new \Think\Verify();
          if($very->check(I('post.txt_check')) == false){
            $this->ajaxReturn(array("errcode"=>1,"msg"=>"验证码错误"));
          }else{
            $data = array(
               "sc_pid" => I('post.sc_pid'),
               "sc_name" => I('post.sc_name'),
               "sc_email" => I('post.sc_email'),
               "sc_url" => I('post.sc_url'),
               "sc_content" => I('post.sc_content'),
               "sc_ip" => get_client_ip(),
               "sc_img" => '/Public/Img/logo/logo.jpg',
               "sc_from" => getOs(),
               "sc_time" => time()
            );
            if(M('say_c')->add($data)){
              $data = array("errcode"=>0, "msg"=>"评论失败");
            }else{
              $data = array("errcode"=>1, "msg"=>"评论失败");
            }
            $this->ajaxReturn($data);
          }
        }
     }
  }
?>