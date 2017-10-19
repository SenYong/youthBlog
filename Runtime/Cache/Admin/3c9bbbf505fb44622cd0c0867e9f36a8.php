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
		<h1>评论回复</h1>
		<div class="btn-group">
			<a href="<?php echo U('Admin/Gust/gustList');?>" class="btn btn-large" title="文章评论列表"><i class="fa fa-tasks"></i></a>
		</div>
	</div>
	<div id="breadcrumb">
		<a href="index.html" title="回到首页" class="tip-bottom"><i class="fa fa-home"></i> 首页</a>
		<a href="#">互动管理</a>
		<a href="#" class="current">评论回复</a>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<div class="alert alert-info">
				<i class="fa fa-code"></i>使用邮件回复的时候，请耐心等待，谢谢!
				<a href="#" data-dismiss="alert" class="close">×</a>
			</div>
			<div class="widget-box">
				<div class="widget-title">
					<span class="icon">
						<i class="fa fa-comment"></i>									
					</span>
					<h5>评论回复</h5>
				</div>
				<div class="widget-content nopadding">
					<form  class="form-horizontal">							
						<div class="form-group">
                            <label class="col-sm-3 col-md-3 col-lg-1 control-label">留言编号</label>
                            <div class=" col-sm-9 col-md-9 col-lg-10">
                            	<div class="input-group input-group-sm">
									<span class="input-group-addon"><i class="fa fa-laptop"></i></span>
                                	<input type="text" value="<?php echo ($info["g_id"]); ?>" class="form-control input-sm" id="g_id" readonly/>
                                </div>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-sm-3 col-md-3 col-lg-1 control-label">用户名</label>
                            <div class=" col-sm-9 col-md-9 col-lg-10">
                            	<div class="input-group input-group-sm">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
                                	<input type="text" value="<?php echo ($info["g_name"]); ?>" class="form-control input-sm" id="g_name" />
                                </div>
                            </div>
                        </div>
						
						<div class="form-group">
							<label class="col-sm-3 col-md-3 col-lg-1 control-label">评论预览</label>
							<div class="col-sm-9 col-md-9 col-lg-10">
								<div style="border: 1px solid red;min-height:100px;padding: 5px;"><?php echo (reFace($info["g_content"])); ?></div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 col-md-3 col-lg-1 control-label">评论内容</label>
							<div class="col-sm-9 col-md-9 col-lg-10">
								<textarea rows="5" class="form-control" id="g_content"><?php echo ($info["g_content"]); ?></textarea>
							</div>
						</div>
						
						<div class="form-group">
                            <label class="col-sm-3 col-md-3 col-lg-1 control-label">评论时间</label>
                            <div class=" col-sm-9 col-md-9 col-lg-10">
                            	<div class="input-group input-group-sm">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                	<input type="text" value="<?php echo (date("Y-m-d H:i:s",$info["g_time"])); ?>" class="form-control input-sm" id="g_time" readonly=""/>
                                </div>
                            </div>
                        </div>
                        
						<div class="form-group">
                            <label class="col-sm-3 col-md-3 col-lg-1 control-label">IP</label>
                            <div class=" col-sm-9 col-md-9 col-lg-5">
                            	<div class="input-group input-group-sm">
									<span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                	<input type="text" value="<?php echo ($info["g_ip"]); ?>" class="form-control input-sm" id="g_ip" readonly=""/>
                                </div>
                            </div>
                            <div class=" col-sm-9 col-md-9 col-lg-5">
                            	<div class="input-group input-group-sm">
									<span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                	<input type="text" value="<?php echo (getIp($info["g_ip"])); ?>" class="form-control input-sm" readonly=""/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 col-md-3 col-lg-1 control-label">评论邮箱</label>
                            <div class=" col-sm-9 col-md-9 col-lg-10">
                            	<div class="input-group input-group-sm">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                	<input type="text" value="<?php echo ($info["g_email"]); ?>" class="form-control input-sm" id="g_email"/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 col-md-3 col-lg-1 control-label">回复人</label>
                            <div class=" col-sm-9 col-md-9 col-lg-10">
                            	<div class="input-group input-group-sm">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
                                	<input type="text" value="<?php echo (session('uname')); ?>" class="form-control input-sm" id="g_rname" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
							<label class="col-sm-3 col-md-3 col-lg-1 control-label">回复内容</label>
							<div class="col-sm-9 col-md-9 col-lg-10">
								<a href="javascript:void(0);" id="rl_exp_btn" class="hidden-xs"><span class="emotion hidden-xs">表情</span>  </a>
								<div class="rl_exp" id="rl_bq" style="display:none;">
									<ul class="rl_exp_tab clearfix">
										<li><a href="javascript:void(0);" class="selected">默认</a></li>
										<li><a href="javascript:void(0);">拜年</a></li>
										<li><a href="javascript:void(0);">浪小花</a></li>
										<li><a href="javascript:void(0);">暴走漫画</a></li>
									</ul>
									<ul class="rl_exp_main clearfix rl_selected"></ul>
									<ul class="rl_exp_main clearfix" style="display:none;"></ul>
									<ul class="rl_exp_main clearfix" style="display:none;"></ul>
									<ul class="rl_exp_main clearfix" style="display:none;"></ul>
									<a href="javascript:void(0);" class="close">×</a>
								</div>
								<textarea rows="5" class="form-control" id="content-text"><?php echo ($info["g_rcontent"]); ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 col-md-3 col-lg-1 control-label">邮件</label>
							<div class="col-sm-9 col-md-9 col-lg-10">
								<label><input type="radio" name="send" checked value="1"/> Yes</label>
								<label><input type="radio" name="send" value="0"/> No</label>
							</div>
						</div>
						<div class="form-actions">
							<button type="button" class="btn btn-success btn-sm btn-add-artilceContent">确认回复</button>&nbsp;&nbsp;  
							<button type="button" class="btn btn-danger btn-sm">取消</button>
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
<script src="/Public/Js/rl_exp.js"></script>
<script>
	$(document).ready(function(){
	$('input[type=checkbox],input[type=radio]').iCheck({
    	checkboxClass: 'icheckbox_flat-blue',
    	radioClass: 'iradio_flat-blue'
	});
	$('select').select2();
    $('.spinner').spinner();
    $('.btn-add-artilceContent').click(function(){
    	var g_id = $("#g_id").val();
    	var g_name = $("#g_name").val();
		var g_email = $("#g_email").val();
		var g_content = $("#g_content").val();
		var g_rname = $("#g_rname").val();
		var g_rcontent = $("#content-text").val();		
		var send = $('input[name="send"]:checked').val();
		if(!g_name){
			err("请勿删除回复人!");
			return false;
		}else if(!g_email){
			err("请勿删评论邮箱!");
			return false;
		}else if(!g_content){
			err("请勿删除评论内容!");
			return false;
		}else if(!g_rname){
			err("请勿删除回复人!");
			return false;
		}else if(!g_rcontent){
			err("回复内容不能为空!");
			return false;
		}
		$(".btn-add-artilceContent").attr("disabled",true);
		$.ajax({
			type:"post",
			url:"/Admin/Gust/gustEditH",
			async:true,
			data:{"g_id":g_id,"g_name":g_name,"g_email":g_email,"g_content":g_content,"g_rname":g_rname,"g_rcontent":g_rcontent,"send":send},
			success:function(data){
				if(data.error==0){
					succ("回复文章评论完成!",data.msg,"/Admin/Gust/gustList");
				}else{
					err(data.msg);
					$(".btn-add-artilceContent").removeAttr('disabled');
				}
			},
			eerror:function(data){
				err("网络错误!");
				$(".btn-add-artilceContent").removeAttr('disabled');
			}
		});
	});
});
</script>
</body>
</html>