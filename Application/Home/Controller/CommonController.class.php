<?php
  namespace Home\Controller;
  use Think\Controller;
  use ThinkOauth;
  /**
  * 公共部分
  */
  class CommonController extends Controller
  {
  	public function _initialize(){
  	 	$tag = M('tag');
  	 	$article = M('article');
      $link = M('link');
      $version = M('version');
      $album = M('album');
      $article_c = M('article_c');
      $album_c = M('album_c');
      $say = M('say');
      $say_c = M('say_c');
      $gust = M('gust');
      $System = M('system');
      $picture = M('picture');

        //分类
  	 	if(!$pid = S('pid')){
  	 		$pid = $tag->where(array("t_view"=>1))->select();
  	 		setS('pid',$pid);
  	 	}
  	 	$this->pid = $pid;
        
        //文章列表
  	 	if(!$artlist = S('artlist')){
  	 		$artlist = $article->where("a_keyword != '' and a_show > 0")->field("a_id,a_keyword,a_show")->order('a_time desc')->select();
  	 		for($i = 1; $i <= count($artlist); $i++){
  	 			$artlist[$i-1]['key']= $i;
  	 		}
  	 		setS('artlist',$artlist);
  	 	}
  	 	$this->assign('artlist',$artlist);	 	

      if(!$system = S('system')){
        $system = $System->find();
        setS('system',$system);
      }
      $System->where("id=1")->setInc('hit');
      $this->assign('system',$system);

        //子文章列表
  	 	if(!$s_article = S('s_article')){
	        $arr = $article->where('a_show != 0')->getField('a_id',true);
	      	$res = array_rand($arr,3);
    			for($j=0;$j<3;$j++){
    				$s_article[] = $article->where(array('a_id'=>$arr[$res[$j]]))->find();
    			}
			    setS("s_article",$s_article);
		  }
		  $this->assign("s_article",$s_article);

  		//友情链接
  		if(!$links = S('link')){
  			$links = $link->where(array("l_show"=>1))->select();
  			setS('link',$links);
  		}
  		$this->assign('link',$links);

  		//统计
  		if(!$num = S('num')){
         $sayc = $say_c->count();
         $articlec = $article_c->count();
         $albumc = $album_c->count();

         $num = array(
           "say" => $say->count(),
           "article" => $article->count(),
           "comment" => $sayc + $articlec + $albumc,
           "gust" => $gust->count(),
           "album" => $album->count(),
           'picture' => $picture->count(),
           "link" => $link->count()
         );
         setS('num',$num);
  		}
      $this->assign('num',$num);

  		//版本
  		if(!$versions = S('versions')){
  			$versions = $version->where(array('v_show'=>1))->order('v_id desc')->limit(1)->find();
  			setS('versions',$versions);
  		}
		  $this->assign('versions',$versions);

  		//底部随机推荐5篇文章
  		if(!$f_article = S('f_article')){
  			$tmp = $article->where('a_show > 0')->getField('a_id',true);
  			$rt = array_rand($tmp,5);
  			for($i = 0; $i < 5; $i++){
  				$f_article[] = $article->where(array('a_id'=>$tmp[$rt[$i]]))->find();
  			}
  			setS('f_article',$f_article);
  		}
		  $this->assign('f_article',$f_article);

  		//底部相册
  		if(!$f_album = S('f_album')){
  			$f_album = $album->where('al_show = 1')->order('al_time desc')->limit(9)->select();
  			setS('f_album',$f_album);
  		}
  		$this->assign('f_album',$f_album);

      //最新评论
      S('s_content',null);
      if(!$s_content = S('s_content')){
         $time = $article_c->field('ac_time')
                           ->table('lt_article_c')
                           ->union(array('SELECT sc_time FROM lt_say_c','SELECT alc_time FROM lt_album_c ORDER BY ac_time desc limit 0,5'),true)
                           ->select();

         for($i = 0; $i < count($time); $i++){
           $art_c = $article_c->where(array('ac_time'=>$time[$i]['ac_time']))->find();
           $alb_c = $album_c->where(array('alc_time'=>$time[$i]['ac_time']))->find();
           $s_c = $say_c->where(array('sc_time'=>$time[$i]['ac_time']))->find();
           if($art_c != ''){
             $s_content[] = $art_c;
           }elseif($alb_c != ''){
             $s_content[] = $alb_c;
           }elseif($s_c != ''){
             $s_content[] = $s_c;
           }
         }
         setS('s_content',$s_content);
      }
      $this->assign('s_content',$s_content);

      //最新留言
      if(!$gusts = S('gusts')){
        $gusts = $gust->order('g_time desc')->limit(5)->select();
        setS('gusts',$gusts);
      }
      $this->assign('gusts',$gusts);

      //最多点击
      if(!$hits = S('hits')){
        $hits = $article->order('a_hit desc')->limit(5)->select();
        setS('hits',$hits);
      }
      $this->assign('hits',$hits);
  }

  	 //QQ登陆
	public function loginqq($type = null) {
        empty($type) && $this->error('参数错误');
        import('Org.ThinkSDK.ThinkOauth');
        $sns = ThinkOauth::getInstance($type);
        redirect($sns->getRequestCodeURL());
  }

  public function verify(){
    	ob_clean();
        $verify = new \Think\Verify();
        $verify->codeSet = '0123456789'; 
        $verify->fontSize = '12px';
        $verify->imageW = 85;
        $verify->imageH = 25;
        $verify->length = 4;
        $verify->useCurve = false;
        $verify->useNoise = false;
        $verify->entry();
  }
}
?>



