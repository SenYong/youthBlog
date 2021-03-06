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
		<?php if(empty($info['l_id'])): ?><h1>新增友情链接</h1>
		<?php else: ?>
		   <h1>修改友情链接</h1><?php endif; ?>
		<div class="btn-group">
            <a href="<?php echo U('/Admin/Link/linkList');?>" class="btn btn-large" title="友情链接列表"><i class="fa fa-tasks"></i></a>
		</div>
	</div>
	<div id="breadcrumb">
		<a href="index.html" title="回到首页" class="tip-bottom"><i class="fa fa-home"></i> 首页</a>
		<a href="#">互动管理</a>
		<?php if(empty($info['l_id'])): ?><a href="#" class="current">新增友情链接</a>
		<?php else: ?>
		   <a href="#" class="current">修改友情链接</a><?php endif; ?>			
	</div>
	<div class="container-fluid">	
		<?php if(!empty($info['l_id'])): ?><div class="row">
			<div class="col-xs-12">
				<div class="alert alert-success">
					<button class="close" data-dismiss="alert">×</button>
					发送邮件请耐心等待和保证邮件地址的准确性!
				</div>
			</div>
		  </div><?php endif; ?>
		<div class="row">
			<div class="col-xs-12">
				<div class="widget-box">
					<div class="widget-title">
						<span class="icon">
							<i class="fa fa-comment"></i>									
						</span>
						<?php if(empty($info['l_id'])): ?><h5>新增友情链接</h5>
						<?php else: ?>
                            <h5>修改友情链接</h5>
                            <input type="hidden" value="<?php echo ($info["l_id"]); ?>" id="lid">
                            <input type="hidden" value="<?php echo ($info["l_time"]); ?>" id="time"><?php endif; ?>
					</div>
					<div class="widget-content nopadding">
						<form  method="post" class="form-horizontal">							
							<div class="form-group">
                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">链接名称</label>
                                <div class=" col-sm-9 col-md-9 col-lg-10">
                                	<div class="input-group input-group-sm">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    	<input type="text" value="<?php echo ($info["l_name"]); ?>" class="form-control input-sm" placeholder="" id="name" />
                                    </div>
                                </div>
                            </div>
							<div class="form-group">
								<label class="col-sm-3 col-md-3 col-lg-1 control-label">描述内容</label>
								<div class="col-sm-9 col-md-9 col-lg-10">
									<textarea rows="5" class="form-control" id="remark"><?php echo ($info["l_content"]); ?></textarea>
								</div>
							</div>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">申请邮箱</label>
                                <div class=" col-sm-9 col-md-9 col-lg-10">
                                	<div class="input-group input-group-sm">
										<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    	<input type="email" value="<?php echo ($info["l_email"]); ?>" class="form-control input-sm" id="email" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">URL地址</label>
                                <div class=" col-sm-9 col-md-9 col-lg-10">
                                	<div class="input-group input-group-sm">
										<span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                    	<input type="text" value="<?php echo ($info["l_url"]); ?>" class="form-control input-sm" placeholder="http://www.loveteemo.com" id="url" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">IP</label>
                                <div class=" col-sm-9 col-md-9 col-lg-5">
                                	<div class="input-group input-group-sm">
										<span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                    	<input type="text" <?php if(empty($info['l_id'])): ?>value="<?php echo get_client_ip();?>"<?php else: ?>value="<?php echo ($info["l_ip"]); ?>"<?php endif; ?> class="form-control input-sm" id="ip"/>
                                    </div>
                                </div>
                                <div class=" col-sm-9 col-md-9 col-lg-5">
                                	<div class="input-group input-group-sm">
										<span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                    	<input type="text" <?php if(empty($info['l_id'])): ?>value="<?php echo getIp(get_client_ip());?>"<?php else: ?>value="<?php echo getIp($info.l_ip);?>"<?php endif; ?> class="form-control input-sm" id="getip"/>
                                    </div>
                                </div>
                            </div>
                            <?php if(empty($info['l_id'])): ?><div class="form-group">
	                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">发布时间</label>
	                                <div class=" col-sm-9 col-md-9 col-lg-10">
	                                	<div class="input-group input-group-sm">
											<span class="input-group-addon"><i class="fa fa-globe"></i></span>
	                                    	<input type="text" value="<?php echo date("Y-m-d H:i:s", time());?>" class="form-control input-sm" id="time" />
	                                    </div>
	                                </div>
                              </div><?php endif; ?>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">排序</label>
                                <div class=" col-sm-9 col-md-9 col-lg-10">
                                	<div class="input-group input-group-sm">
										<span class="input-group-addon"><i class="fa fa-anchor"></i></span>
                                    	<input type="text" <?php if(empty($info['l_id'])): ?>value="<?php echo (C("SORT")); ?>"<?php else: ?>value="<?php echo ($info["l_sort"]); ?>"<?php endif; ?> class="form-control input-sm" placeholder="100" id="sort" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
								<label class="col-sm-3 col-md-3 col-lg-1 control-label">显示位置</label>
								<div class="col-sm-9 col-md-9 col-lg-10">
									<label><input type="radio" name="show" value="0" <?php if(($info['l_show']) == "0"): ?>checked<?php endif; ?> /> 不显示</label>
									<label><input type="radio" name="show" value="1" <?php if(($info['l_show']) == "1"): ?>checked<?php endif; ?> /> 首页</label>
									<label><input type="radio" name="show" value="2" <?php if(($info['l_show']) == "2"): ?>checked<?php endif; ?> /> 内页</label>
								</div>
							</div>
                            <?php if(!empty($info['l_id'])): ?><div class="form-group">
                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">回复人</label>
                                <div class=" col-sm-9 col-md-9 col-lg-10">
                                	<div class="input-group input-group-sm">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    	<input type="text" value="" class="form-control input-sm" id="rname"  />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">回复时间</label>
                                <div class=" col-sm-9 col-md-9 col-lg-10">
                                	<div class="input-group input-group-sm">
										<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    	<input type="text" value="" class="form-control input-sm" id="rtime" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
								<label class="col-sm-3 col-md-3 col-lg-1 control-label">回复内容</label>
								<div class="col-sm-9 col-md-9 col-lg-10">
									<textarea rows="5" class="form-control" id="rcontent" id="rcontent"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 col-md-3 col-lg-1 control-label">邮件</label>
								<div class="col-sm-9 col-md-9 col-lg-10">
									<label><input type="radio" name="send" checked value="1"/> Yes</label>
									<label><input type="radio" name="send" value="0" /> No</label>
								</div>
							</div><?php endif; ?>					
							<div class="form-actions">
								<?php if(empty($info['l_id'])): ?><button type="button" class="btn btn-success btn-sm" id="addL">添加</button> 
								<?php else: ?>
								  <button type="button" class="btn btn-success btn-sm" id="editL">修改</button><?php endif; ?>
								<button type="button" class="btn btn-danger btn-sm" id="cancel">取消</button>
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
<script>
$(document).ready(function(){
  $('input[type=checkbox],input[type=radio]').iCheck({
	checkboxClass: 'icheckbox_flat-blue',
	radioClass: 'iradio_flat-blue'
  });
  $('select').select2();
  $('.spinner').spinner();
  $('#addL').click(function(){
  	 var name = $('#name').val();
  	 var remark = $('#remark').val();
  	 var email = $('#email').val();
  	 var url = $('#url').val();
     var ip = $('#ip').val();
     var sort = $('#sort').val();
     var time = $('#time').val();
     var show = $("input[name='show']:checked").val();
     if(!name){
     	err("链接名称不能为空");
     	return false;
     }else if(!remark){
     	err("描述内容不能为空");
     	return false;
     }else if(!email){
     	err("申请邮不能为空");
     	return false;
     }else if(!url){
        err("URL地址不能为空");
        return false;
     }else if(!ip){
     	err("IP地址不能为空");
     	return false;
     }else if(!sort){
        err("排序不能为空");
        return false;
     }else if(!time){
     	err("时间不能为空");
     	return false;
     }else if(!show){
     	err("请选择显示位置");
     	return false;
     }
     $('#addL').attr('disabled', true);
     $.ajax({
     	url: "/Admin/Link/linkAdd",
     	type: 'post',
     	async: true,
     	data: {'l_name': name, 'l_content':remark, 'l_email':email, 'l_url':url, 'l_ip':ip, 'l_sort':sort, 'l_show':show, 'l_time':time},
     	success: function(data){
     		if(data.error == 0){
     			succ("成功",data.msg,'/Admin/Link/linkList')
     		}else{
     			err(data.msg);
     			$('#addL').removeAttr('disabled');
     		}
     	},
     	error: function(data){
     		err("网络发生错误");
     		$('#addL').removeAttr('disabled');
     	}
     })
  })
  $('#cancel').click(function(){
     window.location.href = "/Admin/Link/linkList";
  })

  //修改
  $('#editL').click(function(){
  	 var lid = $("lid").val();
  	 var name = $('#name').val();
  	 var remark = $('#remark').val();
  	 var email = $('#email').val();
  	 var url = $('#url').val();
     var ip = $('#ip').val();
     var sort = $('#sort').val();
     var time = $('#time').val();
     var show = $("input[name='show']:checked").val();
     if(!name){
     	err("链接名称不能为空");
     	return false;
     }else if(!remark){
     	err("描述内容不能为空");
     	return false;
     }else if(!email){
     	err("申请邮不能为空");
     	return false;
     }else if(!url){
        err("URL地址不能为空");
        return false;
     }else if(!ip){
     	err("IP地址不能为空");
     	return false;
     }else if(!sort){
        err("排序不能为空");
        return false;
     }else if(!time){
     	err("时间不能为空");
     	return false;
     }else if(!show){
     	err("请选择显示位置");
     	return false;
     }
     $('#editL').attr('disabled', true);
     $.ajax({
     	url: "/Admin/Link/linkEditH",
     	type: 'post',
     	async: true,
     	data: {'l_name': name, 'l_content':remark, 'l_email':email, 'l_url':url, 'l_ip':ip, 'l_sort':sort, 'l_show':show, 'l_time':time},
     	success: function(data){
     		if(data.error == 0){
     			succ("成功",data.msg,'/Admin/Link/linkList')
     		}else{
     			err(data.msg);
     			$('#addL').removeAttr('disabled');
     		}
     	},
     	error: function(data){
     		err("网络发生错误");
     		$('#addL').removeAttr('disabled');
     	}
     })
  })
})
</script>
</body>
</html>