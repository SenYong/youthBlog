<?php
namespace Home\Controller;
use Think\Controller;

/*
首页
 */

class IndexController extends CommonController {
    public function index(){
       $this->assign('index','active');
       if(!$ppt = S('ppt')){
       	  $ppt = M('ppt')->order('pp_time desc')->limit(3)->select();
       	  setS("ppt", $ppt);
       }
       $this->ppt = $ppt;
       
       if(!$article = S('article')){
       	  $article = M('article')->where('a_show > 0')->order('a_time desc')->join("lt_tag ON lt_tag.t_id = lt_article.pid")->limit(0,6)->select();
       	  setS('article',$article);
       }
       $this->article = $article;
       $this->display();
    }
}