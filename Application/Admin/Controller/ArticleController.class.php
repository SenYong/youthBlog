<?php
  namespace Admin\Controller;
  use Think\Controller;

  /**
  * 文章
  */
  class ArticleController extends AuthController
  {
  	  public function index(){
  	  	 $Tag = M('Tag');
  	  	 $count =$Tag->count();
  	  	 $list = $Tag->select();
         $this->assign('add',"active open");
         $this->assign('art',"class='active'");
  	  	 $this->assign('count',$count); 	  	 
  	  	 $this->assign('list',$list);
         $this->display();
  	  }

  	  public function ArtAdd(){
  	  	 if(!IS_AJAX){
  	  	 	$this->error('提交方式不正确',0,0);
  	  	 }else{
  	  	 	if(D('Article')->addH()){
               $data = array('error'=>0, "msg"=>"添加文章完成");
  	  	 	}else{
               $data = array("error"=>1, "msg"=>"添加文章失败");
  	  	 	}
  	  	 }
  	  	 $this->ajaxReturn($data);
  	  }

  	  public function ArtList(){
         $this->assign('lists',"open active");
         $this->assign('artlist',"class='active'");
  	  	 $Art = M('article');
  	  	 $count = $Art->count();
  	  	 $this->assign('count',$count);
  	  	 $Page = new \Think\Page($count,10);
  	  	 $page = $Page->show();
  	  	 $list	= $Art->order('a_id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
  	  	 $this->assign('page',$page);
  	  	 $this->assign('list',$list);
  	  	 $this->display();
  	  }
      
      //编辑
  	  public function ArtEdit(){
  	  	 $Tag = M('Tag');
  	  	 $count =$Tag->count();
  	  	 $list = $Tag->select();
  	  	 $this->assign('count',$count); 	  	 
  	  	 $this->assign('list',$list);
  	  	 $Art = M('article');
  	  	 $info = $Art->where(array("a_id"=>I('get.id')))->find();
  	  	 if(!$info){
  	  	 	$this->error('参数错误',0,0);
  	  	 }else{
  	  	 	$this->assign('info',$info);
  	  	 	$this->display('index');
  	  	 }  	  	 
  	  }
      
      //修改
  	  public function ArtEditH(){
  	  	 if(!IS_AJAX){
  	  	 	$this->error("提交方式不正确",0,0);
  	  	 }else{
  	  	 	if(D('article')->editH()){
  	  	 		$data = array("error"=>0, "msg"=>"修改文章完成");
  	  	 	}else{
  	  	 		$data = array("error"=>1, "msg"=>"修改文章时发生错误");
  	  	 	}
  	  	 }
  	  	 $this->ajaxReturn($data);
  	  }
     
      //删除
      public function ArtDel(){
      	if(!IS_AJAX){
      		$this->error("提交方式不正确",0,0);
      	}else{
            $info = M('article')->where(array("a_id"=>I('post.id')))->delete();
            if($info){
            	$data = array("error"=>0, "msg"=>"删除成功");
            }else{
            	$data = array("error"=>1, "msg"=>"删除失败");
            }
      	}
      	$this->ajaxReturn($data);
      }


      //评论文章
      public function articleContentList(){
        $this->assign('content',"open active");
        $this->assign('artcontent',"class='active'");
        $count = M('article_c')->count();
        $Page = new \Think\Page($count,3);
        $show = $Page->show();
        $list = M('article_c')->order("ac_id desc")->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('page',$show);
        $this->assign('list',$list);
        $this->display();
      }

      public function articleContentEdit(){
        $info = M('article_c')->where(array("ac_id"=>I('get.id')))->join("lt_article ON lt_article.a_id = lt_article_c.ac_pid")->find();
        if(!$info){
          $this->error('参数错误!',0,0);
        }else{
          $this->assign('info',$info);
          $this->display();
        }
      }

      public function articleContentEditH(){
        if(!IS_AJAX){
          $this->error("提交方式不正确",0,0);
        }else{
          if(D('article_c')->editH()){
            $data = array("error"=>0, "msg"=>"回复文章评论完成");
          }else{
            $data = array("error"=>1, "msg"=>"删除时发生错误");
          }
        }
        $this->ajaxReturn($data);
      }
  }
?>

