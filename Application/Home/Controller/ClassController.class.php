<?php
  namespace Home\Controller;
  use Think\Controller;

  /**
  * 分类
  */
  class ClassController extends CommonController
  {
  	  public function index(){
  	  	$this->assign('class','active');  
  	  	$id = I('get.id');
  	  	$tmp = M('article');
  	  	$count = $tmp->where(array('pid'=>$id))->count();
  	  	$this->list = M('article')->where(array('pid'=>$id))->select();
        $this->display();
  	  }

      public function search($key=''){
        $this->assign('class','active');
        $key = I('get.key');
        $tmp = M('article');
        $map['a_title'] = array('like',"%$key%");
        $map['a_show'] = array('gt','0');
        $count = $tmp->where($map)->count();
        $Page = new \Think\PageHome($count,5);
        foreach($map as $key=>$val) {
            $Page->parameter[$key]   =   urlencode($val);
        }
        $show  = $Page->show();
        $article = $tmp->where($map)->order('a_time desc')->join("lt_tag ON lt_tag.t_id = lt_article.pid")->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('article',$article);
        $this->assign('page',$show);
        $this->display();
      }
  }
?>