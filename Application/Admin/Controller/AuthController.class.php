<?php
  namespace Admin\Controller;
  use Think\Controller;

  /**
  * 后台登陆权限验证
  */
  class AuthController extends Controller
  {
  	 public function _initialize(){
  	 	if(!session('uid')){
  	 		$this->redirect('/Login/index');
  	 	}
  	 }
  }
?>