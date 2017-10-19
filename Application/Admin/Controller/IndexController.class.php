<?php
  namespace Admin\Controller;
  use Think\Controller;
  
  /**
  * 后台首页
  */
 
  class IndexController extends AuthController
  {
  	
  	public function index(){
       $System = M('System');
       $Article = M('Article');
       $Say = M('Say');
       $Picture = M('Picture');
       $Album = M('Album');
       $Link = M('Link');
       $say_c = M('say_c');
       $album_c = M('album_c');
       $article_c = M('article_c');
       $gust = M('gust');

       if(!$system = S('aversion')){
          $system = $System->find();
          setS('aversion', $system);
       }
       $this->system = $system;
       
       if(!$num = S('anum')){
         $num = array(
           'say' => $Say->count(),
           'article' => $Article->count(),
           'picture' => $Picture->count(),
           'album' => $Album->count(),
           'link' => $Link->count()
         );
         setS('anum', $num);
       }
       $this->num = $num;
      
       $this->assign('index',"class='active'");
  	   

       //最新评论
       if(!$s_content = S('s_content')){
          $time = $article_c->field('ac_time')
                            ->table('lt_article_c')
                            ->union(array('SELECT sc_time FROM lt_say_c', 'SELECT alc_time FROM lt_album_c order by ac_time desc limit 0,5'),ture)
                            ->select();
          for($i=0;$i<5;$i++){
              $a  = $article_c->where(array('ac_time'=>$time[$i]['ac_time']))->find();
              $al = $album_c->where(array('alc_time'=>$time[$i]['ac_time']))->find();
              $s  = $say_c->where(array('sc_time'=>$time[$i]['ac_time']))->find();
              if($a!=''){
                $s_content[] = $a;
              }elseif($al!=''){
                $s_content[] = $al;
              }elseif($s!=''){
                $s_content[] = $s;
              }                   
          }
          setS('s_content',$s_content);
       }
       $this->assign('s_content',$s_content);

       //最新留言
       if(!$gusts = S('gusts')){
         $gusts = $gust->order('g_id desc')->limit(5)->select();
         setS('gusts',$gusts);
       }
       $this->assign('gusts',$gusts);

       $this->display();
    }

    public function out(){
      session(null);
      $this->redirect("/Home/Index/index");
    }
  }
?>