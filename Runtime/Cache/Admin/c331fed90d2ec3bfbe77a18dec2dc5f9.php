<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title><?php echo (C("NAME")); ?> 后台管理系统</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="/Public/Other/Css/bootstrap.min.css" />
		<link rel="stylesheet" href="/Public/Other/Css/my.css" />	
		<link rel="stylesheet" href="/Public/Other/Css/unicorn.css" />
		<!--[if lt IE 9]>
		<script type="text/javascript" src="/Public/Other/Js/respond.min.js"></script>
		<![endif]-->
	</head>	
	<body data-color="grey" class="flat">
	<div id="wrapper">
			<div id="header">
				<h1><a href="<?php echo U('Admin/Index/index');?>">Admin</a></h1>	
				<a id="menu-trigger" href="#"><i class="fa fa-bars"></i></a>	
			</div>
		
			<div id="user-nav">
	            <ul class="btn-group">
	                <li class="btn" >
	                	<a title="" href="#">
	                		<i class="fa fa-user"></i> 
	                		<span class="text"><?php echo (session('uname')); ?></span>
	                	</a>
	                </li>
	                <li class="btn"><a title="系统设置" href="<?php echo U('/Admin/System/index');?>"><i class="fa fa-cog"></i> <span class="text">系统设置</span></a></li>
	                <li class="btn"><a title="退出" href="<?php echo U('/Admin/Index/out');?>"><i class="fa fa-share"></i> <span class="text">退出</span></a></li>
	            </ul>
	        </div>
	       
			<div id="sidebar">
				<div id="search">
					<input type="text" placeholder="Search here..."/><button type="submit" class="tip-right" title="Search"><i class="fa fa-search"></i></button>
				</div>	
				<ul>
					<li <?php echo ($index); ?>><a href="<?php echo U('Admin/Index/index');?>"><i class="fa fa-dashboard"></i> <span>首页</span></a></li>
					<li><a href="<?php echo (C("SITE_URL")); ?>" target="_blank"><i class="fa fa-home"></i> <span>前端首页</span></a></li>
					<li class="submenu <?php echo ($add); ?>">
						<a href="#"><i class="fa fa-flask"></i> <span>发布内容</span> <i class="arrow fa fa-chevron-right"></i></a>
						<ul>
							<li <?php echo ($say); ?>><a href="<?php echo U('Admin/Say/index');?>">发布说说</a></li>
							<li <?php echo ($art); ?>><a href="<?php echo U('Admin/Article/index');?>">发布文章</a></li>
							<li <?php echo ($ver); ?>><a href="<?php echo U('Admin/Version/index');?>">发布新版本</a></li>
						</ul>
					</li>
					<li class="submenu <?php echo ($lists); ?>">
						<a href="#"><i class="fa fa-th"></i> <span>内容管理</span> <i class="arrow fa fa-chevron-right"></i></a>
						<ul>
							<li <?php echo ($saylist); ?>><a href="<?php echo U('Admin/Say/sayList');?>">说说列表</a></li>
							<li <?php echo ($artlist); ?>><a href="<?php echo U('Admin/Article/ArtList');?>">文章列表</a></li>
							<li <?php echo ($verlist); ?>><a href="<?php echo U('Admin/Version/verList');?>">版本列表</a></li>
						</ul>
					</li>
					<li class="submenu <?php echo ($content); ?>">
						<a href="#"><i class="fa fa-comment"></i> <span>互动管理</span><i class="arrow fa fa-chevron-right"></i></a>
						<ul>
							<li <?php echo ($saycontent); ?>><a href="<?php echo U('Admin/Say/sayContentList');?>">说说评论</a></li>
							<li <?php echo ($artcontent); ?>><a href="<?php echo U('Admin/Article/articleContentList');?>">文章评论</a></li>
							<li <?php echo ($gust); ?>><a href="<?php echo U('Admin/Gust/gustList');?>">留言评论</a></li>
							<li <?php echo ($albumcontent); ?>><a href="<?php echo U('Admin/Album/albumContentList');?>">相册评论</a></li>
						</ul>
					</li>
					<?php if(($_SESSION['uclass']) == "1"): ?><li class="submenu <?php echo ($user); ?>">
						<a href="#"><i class="fa fa-user-md"></i> <span>用户管理</span><i class="arrow fa fa-chevron-right"></i></a>
						<ul>
							<li <?php echo ($useradd); ?>><a href="<?php echo U('Admin/User/userAdd');?>">新增用户</a></li>
							<li <?php echo ($userlist); ?>><a href="<?php echo U('Admin/User/userList');?>">用户列表</a></li>
						</ul>
					</li><?php endif; ?>
					<li class="submenu <?php echo ($tag); ?>">
						<a href="#"><i class="fa fa-tags"></i> <span>栏目设置</span><i class="arrow fa fa-chevron-right"></i></a>
						<ul>
							<li <?php echo ($addtag); ?>><a href="<?php echo U('Admin/Tag/index');?>">新增栏目</a></li>
							<li <?php echo ($addlist); ?>><a href="<?php echo U('Admin/Tag/tagList');?>">栏目列表</a></li>
						</ul>
					</li>
					<li class="submenu <?php echo ($link); ?>">
						<a href="#"><i class="fa fa-link"></i> <span>链接设置</span><i class="arrow fa fa-chevron-right"></i></a>
						<ul>
							<li <?php echo ($linkadd); ?>><a href="<?php echo U('Admin/Link/index');?>">新增链接</a></li>
							<li <?php echo ($linklist); ?>><a href="<?php echo U('Admin/Link/linkList');?>">链接列表</a></li>
						</ul>
					</li>

					<li class="submenu <?php echo ($album); ?>">
						<a href="#"><i class="fa fa-folder-open"></i> <span>相册管理</span><i class="arrow fa fa-chevron-right"></i></a>
						<ul>
							<li <?php echo ($albumadd); ?>><a href="<?php echo U('/Admin/Album/index');?>">新增相册</a></li>
							<li <?php echo ($albumlist); ?>><a href="<?php echo U('/Admin/Album/albumList');?>">相册列表</a></li>
						</ul>
					</li>

					<li class="submenu <?php echo ($picture); ?>">
						<a href="#"><i class="fa fa-picture-o"></i> <span>图片管理</span><i class="arrow fa fa-chevron-right"></i></a>
						<ul>
							<li <?php echo ($addpic); ?>><a href="<?php echo U('/Admin/Picture/index');?>">新增图片</a></li>
							<li <?php echo ($listpic); ?>><a href="<?php echo U('/Admin/Picture/pictureList');?>">图片列表</a></li>
						</ul>
					</li>
					<li class="submenu <?php echo ($system); ?>">
						<a href="#"><i class="fa fa-windows"></i> <span>系统设置</span> <i class="arrow fa fa-chevron-right"></i></a>
						<ul>
							<li <?php echo ($basic); ?>><a href="<?php echo U('/Admin/System/index');?>">基本设置</a></li>
							<!--<li <?php echo ($systemone); ?>><a onclick="alert('单页设置开发中')">单页设置</a></li>-->
							<li <?php echo ($email); ?>><a href="<?php echo U('/Admin/System/email');?>">邮件设置</a></li>
							<!-- <li <?php echo ($ppts); ?>><a href="<?php echo U('/Admin/System/ppt');?>">幻灯设置</a></li> -->
							<!--<li><a href="#" onclick="alert('高级功能开发中')">高级设置</a></li>-->
						</ul>
					</li>
					<li class="submenu <?php echo ($ppts); ?>">
						<a href="#"><i class="fa fa-picture-o"></i> <span>幻灯管理</span><i class="arrow fa fa-chevron-right"></i></a>
						<ul>
							<li <?php echo ($addppt); ?>><a href="<?php echo U('/Admin/System/ppt');?>">添加幻灯</a></li>
							<li <?php echo ($listppt); ?>><a href="<?php echo U('/Admin/System/pptList');?>">幻灯列表</a></li>
						</ul>
					</li>
				</ul>			
			</div>		
							
<div id="content">
	<div id="content-header">
		<h1>高级设置</h1>
	</div>
	<div id="breadcrumb">
		<a href="" title="回到首页" class="tip-bottom"><i class="fa fa-home"></i> 首页</a>
		<a href="#">系统设置</a>
		<a href="#" class="current">高级设置</a>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<div class="widget-box">
					<div class="widget-title">
						<span class="icon">
							<i class="fa fa-folder-open"></i>									
						</span>
						<h5>高级设置</h5>
					</div>
					<div class="widget-content nopadding">
						<form  method="get" class="form-horizontal">							
							<div class="form-group">
                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">邮箱主机</label>
                                <div class=" col-sm-9 col-md-9 col-lg-10">
                                	<div class="input-group input-group-sm">
										<span class="input-group-addon"><i class="fa fa-file"></i></span>
                                    	<input type="text" value="<?php echo (C("MAIL_HOST")); ?>" class="form-control input-sm" id="host"/>
                                    </div>
                                </div>
                            </div>
							
							<div class="form-group">
								<label class="col-sm-3 col-md-3 col-lg-1 control-label">描述</label>
								<div class="col-sm-9 col-md-9 col-lg-10">
									<textarea rows="5" class="form-control" disabled>需要修改本页参数，请确保对此页参数的了解。否则请联系作者：admin@loveteemo.com</textarea>
								</div>
							</div>
							
							<div class="form-group">
                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">修改时间</label>
                                <div class=" col-sm-9 col-md-9 col-lg-10">
                                	<div class="row">
                                		<div class="col-md-6">
                                    		<input type="text" value="<?php echo date("Y-m-d H:i:s",time());?>" class="form-control input-sm" readonly=""/>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                            
							<div class="form-group">
                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">STMP服务</label>
                                <div class=" col-sm-9 col-md-9 col-lg-10">
                                	<div class="input-group input-group-sm">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    	<input type="text" value="TRUE" class="form-control input-sm" readonly="" />
                                    </div>
                                </div>
                            </div>
                            
                             <div class="form-group">
                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">STMP权限</label>
                                <div class=" col-sm-9 col-md-9 col-lg-10">
                                	<div class="input-group input-group-sm">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    	<input type="text" value="TRUE" class="form-control input-sm" readonly />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                            <label class="col-sm-3 col-md-3 col-lg-1 control-label">邮件安全</label>
                                <div class=" col-sm-9 col-md-9 col-lg-10">
                                	<div class="input-group input-group-sm">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    	<input type="text" value="tls" class="form-control input-sm" readonly/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">邮件编码</label>
                                <div class=" col-sm-9 col-md-9 col-lg-10">
                                	<div class="input-group input-group-sm">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    	<input type="text" value="UTF-8" class="form-control input-sm" readonly/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">邮箱用户</label>
                                <div class=" col-sm-9 col-md-9 col-lg-10">
                                	<div class="input-group input-group-sm">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    	<input type="text" value="<?php echo (C("MAIL_USERNAME")); ?>" class="form-control input-sm" id="emailname"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">密码</label>
                                <div class=" col-sm-9 col-md-9 col-lg-10">
                                	<div class="input-group input-group-sm">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    	<input type="password" value="<?php echo (C("MAIL_PASSWORD")); ?>" class="form-control input-sm" id="emailpwd" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">默认点击量</label>
                                <div class=" col-sm-9 col-md-9 col-lg-10">
                                	<div class="input-group input-group-sm">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    	<input type="text" value="<?php echo (C("HIT")); ?>" class="form-control input-sm" id="defaulthit" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">默认排序</label>
                                <div class=" col-sm-9 col-md-9 col-lg-10">
                                	<div class="input-group input-group-sm">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    	<input type="text" value="<?php echo (C("SORT")); ?>" class="form-control input-sm" id="defaultsort"/>
                                    	<input type="hidden" value="/index.php/Admin/System/email.html" id="jump" />
                                    </div>
                                </div>
                            </div>
							
							<div class="form-actions">
								<button type="button" class="btn btn-success btn-sm addemail">保存配置</button>  <button type="button" class="btn btn-danger btn-sm">取消</button>
							</div>
						</form>
					</div>
				</div>						
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div id="footer" class="col-xs-12">
		2015&copy; Love Admin. Brought to you by Long
	</div>
</div>
</div>
<script src="/Public/Other/Js/jquery.min.js"></script>
<script src="/Public/Other/Js/jquery-ui.custom.js"></script>
<script src="/Public/Other/Js/bootstrap.min.js"></script>
<script src="/Public/Other/Js/jquery.gritter.min.js"></script>
<script src="/Public/Other/Js/jquery.nicescroll.min.js"></script>
<script src="/Public/Other/Js/unicorn.js"></script>          
<script src="/Public/Other/Js/my.js"></script>
<script src="/Public/Other/Js/cropbox-min.js"></script>
<script src="/Public/Other/Js/jquery.icheck.min.js"></script>
<script src="/Public/Other/Js/select2.min.js"></script> 
<script src="/Public/Other/Js/cropbox-min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
   $(".addemail").click(function(){
   	  var host = $('#host').val();
   	  var emailname = $('#emailname').val();
   	  var emailpwd = $('#emailpwd').val();
   	  var defaulthit = $('#defaulthit').val();
   	  var defaultsort = $('#defaultsort').val();
   	  if(!host){
   	  	err("邮箱主机不能为空");
   	  	return false;
   	  }else if(!emailname){
   	  	err("邮箱用户不能为空");
   	  	return false;
   	  }else if(!emailpwd){
   	  	err("密码不能为空");
   	  	return false;
   	  }else if(!defaulthit){
   	  	err("默认点击量不能为空");
   	  	return false;
   	  }else if(!defaultsort){
   	  	err("默认排序不能为空");
   	  	return false;
   	  }
   	  $('.addemail').attr("disabled",true);
   	  $.ajax({
   	  	url: "/Admin/System/emailH",
   	  	type: "post",
   	  	async: true,
   	  	data: {host, emailname, emailpwd, defaulthit, defaultsort},
   	  	success: function(data){
   	  		if(data.error == 0){
   	  			succ("",data.msg,"/index.php/Admin/System/email.html");
   	  		}else{
   	  			err(data.msg);
   	  			$('.addemail').removeAttr('disabled');
   	  		}
   	  	},
   	  	error: function(data){
   	  		err("网络错误");
            $('.addemail').removeAttr('disabled'); 
   	  	}
   	  })
   })
})
</script>
</body>
</html>