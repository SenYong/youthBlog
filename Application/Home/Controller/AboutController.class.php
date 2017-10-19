<?php
  namespace Home\Controller;
  use Think\Controller;

  /**
  * 关于我
  */
  class AboutController extends CommonController {
    public function index(){    
		$this->assign('about','active');
        $this->display();
    }
  }
?>