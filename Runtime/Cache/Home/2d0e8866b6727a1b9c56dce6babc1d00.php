<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>留言板 - <?php echo (C("NAME")); ?></title>
	<meta name="keywords" content="<?php echo ($system["keyword"]); ?>" />
	<meta name="description" content="<?php echo ($system["remark"]); ?>" />
	<meta name="version" content="<?php echo (C("NAME")); ?> v<?php echo ($version); ?>" />
	<meta name="author" content="<?php echo ($system["author"]); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--[if lt IE 9]>
<script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->        
<meta property="qc:admins" content="73113635665455576375" />
<link rel="stylesheet" href="/Public/Css/bootstrap.min.css" />
<link rel="shortcut icon" href="/Public/Img/icon/favicon.ico" />
<link rel="stylesheet" href="/Public/Css/my.css" />
    </head>
    <body>  
        <div class="top-top">
            <div class="container">
                <div class="col-md-5 top-left"><a class="from"><?php echo getOs();?></a></div>
                <div class="col-md-5 top-right">
                    <a href="<?php echo U('Common/loginqq',array('type'=>'qq'));?>" class="from" >QQ访问</a>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="row header">
                <div class="col-md-4 logo">
                    <a title="" href="/"><img src="/Public/Img/icon/logo.png" /></a>
                    <h5 class="hidden-xs"></h5>               
                </div>
                <div class="nav-dh col-md-5 col-xs-12">
                    <nav class="navbar navbar-default">
                        	<div class="navbar-header">
	                          	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                            <span class="sr-only">导航</span>
	                            <span class="icon-bar"></span>
	                            <span class="icon-bar"></span>
	                            <span class="icon-bar"></span>
	                          	</button>
	                           	<a class="navbar-brand visible-xs" href="#">博客导航</a>
	                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                           	<ul class="nav navbar-nav">
	                            <li class="dh <?php echo ($index); ?>"><a href="<?php echo U('/index');?>">首页</a></li>
	                            <li class="dh <?php echo ($about); ?>"><a href="<?php echo U('/about');?>">关于我</a></li>
	                            <li class="dropdown dh <?php echo ($class); ?>">
	                              	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">分类<span class="caret"></span></a>
	                              	<ul class="dropdown-menu" role="menu">  
	                                    <?php if(is_array($pid)): $i = 0; $__LIST__ = $pid;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('/class-'.$vo['t_id']);?>" ><i class="icon-ok-sign"></i> <?php echo ($vo["t_name"]); ?></a></li>
                                           <li class="divider"></li><?php endforeach; endif; else: echo "" ;endif; ?>
	                                </ul>
	                            </li>
	                            <li class="dh <?php echo ($feel); ?>"><a href="<?php echo U('/feel');?>">说说</a></li>
	                            <li class="dh <?php echo ($album); ?>"><a href="<?php echo U('/album');?>">相册</a></li>
	                            <li class="dh"><a href="">邻居</a></li>
	                            <li class="dh <?php echo ($gust); ?>"><a href="<?php echo U('/gust');?>">留言板</a></li>
                          	</ul>
                        </div>
                    </nav>
                </div>    
            </div>
	<div class="row aerousel">
	<ol class="breadcrumb">
		  <li><a href="index.html">网站首页</a></li>
		  <li class="active">雁过留名&nbsp;|&nbsp;留言板</li>
	</ol>
	<div class="col-md-8 row-l gust">
		<div class="alert alert-success alert-dismissible hidden-xs" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <a><span class=" glyphicon glyphicon-heart"></span></a>&nbsp;&nbsp;<strong>温馨提示</strong>:需要申请本博客友情连接，请在邻居页填写相关数据，谢谢!
		</div>
		<h4>请文明留言</h4><hr />
		<?php if(is_array($contents)): $i = 0; $__LIST__ = $contents;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="media connect">
                <div class="media-left">
                   <?php if(!empty($vo['g_url'])): ?><a href="<?php echo ($vo["g_url"]); ?>" target="_blank" rel="nofollow" title="浏览 <?php echo ($vo["g_name"]); ?>的网站?"><img class="media-object img-circle  img-50" src="<?php echo ($vo["g_img"]); ?>" alt="<?php echo ($vo["g_name"]); ?>"></a>
                   <?php else: ?>
                       <img class="media-object img-circle  img-50" src="<?php echo ($vo["g_img"]); ?>" alt="<?php echo ($vo["g_name"]); ?>"><?php endif; ?>
                </div>
                <div class="media-body">
                    <div class="fool hidden-xs">#<?php echo ($vo["g_id"]); ?></div>
                    <p class="media-heading">
                        <a><span class="glyphicon glyphicon-user"></span></a>&nbsp;&nbsp;&nbsp;<?php echo ($vo["g_name"]); ?>&nbsp;&nbsp;&nbsp;
                        <a><span class="glyphicon glyphicon-time"></span></a>&nbsp;<?php echo (getTime($vo["g_time"])); ?>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="from"><?php echo ($vo["g_from"]); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a><span class="glyphicon glyphicon-map-marker"></span></a>&nbsp;&nbsp;<?php echo ($vo ["ip"]); ?>
                    </p>
                    <div class="connect-box"> <?php echo (reFace($vo["g_content"])); ?></div><hr>
                    <?php if(empty($vo['g_rtime'])): ?><div class="media-left">
                           <a><img class="media-object img-circle img-50" src="<?php echo ($vo["g_img"]); ?>" alt="<?php echo ($vo["g_rname"]); ?>"></a>
                        </div>
                        <div class="media-body">
                           <p>正等待博主回复</p>
                        </div>
                    <?php else: ?>
                        <div class="media">
                            <div class="media-left">
                                <a><img class="media-object img-circle img-50" src="/Public/Img/logo/logo.jpg" alt="<?php echo ($vo["g_rname"]); ?>"></a>
                            </div>
                            <div class="media-body">
                                <p class="media-heading">
                                       <a><span class="glyphicon glyphicon-king"></span></a>&nbsp;&nbsp;&nbsp;<?php echo ($vo["g_rname"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                       <a><span class="glyphicon glyphicon-send"></span></a>&nbsp;<?php echo (date("m-d H:i",$vo["g_rtime"])); ?>&nbsp;&nbsp;&nbsp;&nbsp;回复&nbsp;
                                       <a>@<?php echo ($vo["g_name"]); ?></a>&nbsp;中说到：
                                </p>
                                <div class="connect-box"><?php echo (reFace($vo["g_rcontent"])); ?></div>
                            </div>
                        </div><?php endif; ?>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
		<?php echo ($page); ?>
		<hr />
		<div class="home-from">
			<div class="home-from-model"  data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
			我要评论
			</div>
			<div class="collapse" id="collapseExample">
			<div class="well">
            <div method="post" >
			<input id="jump" type="hidden"  value="/gust.html" />
			<div class="input-group home-from-box">
    <span class="input-group-addon" id="basic-addon1">昵称</span>
    <input type="text" class="form-control" placeholder="昵称" aria-describedby="basic-addon1" name="name" <?php if(!empty($_SESSION['nickname'])): ?>value="<?php echo (session('nickname')); ?>"<?php else: ?>value="<?php echo (cookie('name')); ?>"<?php endif; ?> id="name">
	<span class="glyphicon glyphicon-remove form-control-feedback hidden" aria-hidden="true"></span>
</div>
<div class="input-group home-from-box">
    <span class="input-group-addon" id="basic-addon1">邮箱</span>
    <input type="email" class="form-control" placeholder="邮箱" aria-describedby="basic-addon1" name="email" id="email" value="<?php echo (cookie('email')); ?>">
	<span class="glyphicon glyphicon-remove form-control-feedback hidden" aria-hidden="true"></span>
</div>
<div class="input-group home-from-box">
    <span class="input-group-addon" id="basic-addon1">域名</span>
    <input type="url" class="form-control" placeholder="(选填)带http://" aria-describedby="basic-addon1" id="url" value="<?php echo (cookie('url')); ?>">
</div>
<div class="form-group home-from-box">
    <a href="javascript:void(0);" id="rl_exp_btn"><span class="emotion hidden-xs"></span></a>
	<div class="rl_exp" id="rl_bq" style="display:none;">
		<ul class="rl_exp_tab clearfix">
			<li><a href="javascript:void(0);" class="selected">默认</a></li>
			<li><a href="javascript:void(0);">拜年</a></li>
			<li><a href="javascript:void(0);">暴走漫画</a></li>
            <li><a href="javascript:void(0);">漫画</a></li>
		</ul>
		<ul class="rl_exp_main clearfix rl_selected"></ul>
		<ul class="rl_exp_main clearfix" style="display:none;"></ul>
		<ul class="rl_exp_main clearfix" style="display:none;"></ul>
        <ul class="rl_exp_main clearfix" style="display:none;"></ul>
		<a href="javascript:void(0);" class="close">×</a>
	</div>
    &nbsp;<input name="rember" type="checkbox" />  <samll>记住</samll>  <input type="checkbox" name="send" />  <small>通知博主</small>
</div>
<div class="form-group home-from-box">
    <textarea class="form-control" id="content-text" name="content" rows="3" placeholder="请输入评论内容" rows="7"></textarea>
</div>
<div class="input-group home-from-box ">
    <span class="input-group-addon" id="basic-addon1">验证码</span>
    <div class="input-group check-text">
    <input type="text" class="form-control" name="txt_check" id="txt_check" placeholder="验证码">
    <span class="glyphicon glyphicon-remove form-control-feedback hidden" aria-hidden="true"></span>
    </div>
    <img style="cursor:pointer" class="img"  src="<?php echo U('Home/Common/verify');?>" onClick="this.src=this.src+'?'+Math.random();" title="看不清楚?点击刷新验证码?">    
</div>


					
			<div class="form-group home-from-box">
			    <button class="btn btn-default btn-add-gust" >提交</button>
			</div>
            </div>
		</div>
		</div>
		</div>		
	</div>
	<div class="col-md-4 row-r">
	<div class="sider-box sider-box2">
	    <div class="search-box">
	        <div class="input-group search-input">
	        <form action="<?php echo U('Class/search');?>" method="get" class="form-search">
	          	<input type="text" class="form-control" placeholder="请输入关键词" name="key">
	          	<span class="input-group-btn">
	            	<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
	          	</span>
	        </form>
	        </div>
	    </div>
		
    </div>


	<div class="sider-box2">    
	<h4>
	    <span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;我的标签</h4>  
         <ul class="tag-ul">
		    <?php if(is_array($artlist)): $i = 0; $__LIST__ = $artlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['key'] % 6 == 1): ?><li class="label label-default"><a href=""><?php echo ($vo["a_keyword"]); ?></a></li><?php endif; ?>
		        <?php if($vo['key'] % 6 == 2): ?><li class="label label-primary"><a href=""><?php echo ($vo["a_keyword"]); ?></a></li><?php endif; ?>
		        <?php if($vo['key'] % 6 == 3): ?><li class="label label-success"><a href=""><?php echo ($vo["a_keyword"]); ?></a></li><?php endif; ?>
		        <?php if($vo['key'] % 6 == 4): ?><li class="label label-info"><a href=""><?php echo ($vo["a_keyword"]); ?></a></li><?php endif; ?>
		        <?php if($vo['key'] % 6 == 5): ?><li class="label label-warning"><a href=""><?php echo ($vo["a_keyword"]); ?></a></li><?php endif; ?>
		        <?php if($vo['key'] % 6 == 0): ?><li class="label label-danger  tag-end"><a href=""><?php echo ($vo["a_keyword"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </ul>	    
	</div>
	
	<div class="sider-box2">
	<h4><span class="glyphicon glyphicon-retweet"></span>&nbsp;&nbsp;随机文章</h4>   	
	    <ul class="rand-ul">    	
         	<?php if(is_array($s_article)): $i = 0; $__LIST__ = $s_article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
	           		<a href="" title="" class="rand-img image-light"><img src="<?php echo ($vo["a_img"]); ?>" class="article-img" alt="" title="" /></a>
	           		<div class="rand-title"><a href=""><?php echo (msubstr(strip_tags($vo["a_title"]),0,15,'utf-8',true)); ?></a></div>
	           		<div class="rand-remark"><?php echo (msubstr(strip_tags($vo["a_remark"]),0,35,'utf-8',true)); ?></div>
               </li><?php endforeach; endif; else: echo "" ;endif; ?>     
	    </ul>
	</div>
	 
	<div class="sider-box2">
	    <h4><span class="glyphicon glyphicon-random"></span>&nbsp;&nbsp;最新互动</h4>
	  	<div class="tab"  id="tab">
	        <ul class="nav nav-tabs" >
	           <li class="active"><a href="#home" data-toggle="tab">最新评论</a></li>
	           <li><a href="#content" data-toggle="tab">最新留言</a></li>
	           <li><a href="#hot" data-toggle="tab">最多点击</a></li>
	        </ul>
	  	</div>
	  	<div class="tab-content">
	  	    <div class="tab-pane active" id="home">
		  	    <ul class="content-ul">
	               <?php if(is_array($s_content)): $i = 0; $__LIST__ = $s_content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(!empty($vo['ac_id'])): ?><li>
	                         <?php if(!empty($vo['ac_url'])): ?><a href="<?php echo ($vo["ac_url"]); ?>" target="_blank" rel="nofollow" title="访问 <?php echo ($vo["ac_name"]); ?> 的网站?">
	                               <img src="<?php echo ($vo["ac_img"]); ?>" class="img-circle img-45"/></a>
	                            </a>
	                         <?php else: ?>
	                            <img src="<?php echo ($vo["ac_img"]); ?>" class="img-circle img-45"/></a><?php endif; ?>
	                         <div class="content-name"><a><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;</a><?php echo ($vo["ac_name"]); ?></div>
	                         <div class="content-remark">
	                            <span class="label label-success ">文章</span>&nbsp;&nbsp;
	                            <a href="<?php echo U('/article-'.$vo['ac_pid']);?>"><?php echo ($vo["ac_content"]); ?></a>
	                         </div>
	                      </li><?php endif; ?>
	                   <?php if(!empty($vo['alc_id'])): ?><li>
	                         <?php if(!empty($vo['alc_url'])): ?><a href="<?php echo ($vo["alc_url"]); ?>" target="_blank" rel="nofollow" title="访问 <?php echo ($vo["alc_name"]); ?> 的网站?">
	                               <img src="<?php echo ($vo["alc_img"]); ?>" class="img-circle img-45"/></a>
	                            </a>
	                         <?php else: ?>
	                            <img src="<?php echo ($vo["alc_img"]); ?>" class="img-circle img-45"/></a><?php endif; ?>
	                         <div class="content-name"><a><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;</a><?php echo ($vo["alc_name"]); ?></div>
	                         <div class="content-remark">
	                            <span class="label label-success ">相册</span>&nbsp;&nbsp;
	                            <a href="<?php echo U('/album-'.$vo['alc_pid']);?>"><?php echo ($vo["alc_content"]); ?></a>
	                         </div>
	                      </li><?php endif; ?>
	                   <?php if(!empty($vo['sc_id'])): ?><li>
	                         <?php if(!empty($vo['sc_url'])): ?><a href="<?php echo ($vo["sc_url"]); ?>" target="_blank" rel="nofollow" title="访问 <?php echo ($vo["sc_name"]); ?> 的网站?">
	                               <img src="<?php echo ($vo["sc_img"]); ?>" class="img-circle img-45"/></a>
	                            </a>
	                         <?php else: ?>
	                            <img src="<?php echo ($vo["sc_img"]); ?>" class="img-circle img-45"/></a><?php endif; ?>
	                         <div class="content-name"><a><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;</a><?php echo ($vo["sc_name"]); ?></div>
	                         <div class="content-remark">
	                            <span class="label label-success ">说说</span>&nbsp;&nbsp;
	                            <a href="<?php echo U('/feel-'.$vo['sc_pid']);?>"><?php echo (reFace($vo["sc_content"])); ?></a>
	                         </div>
	                      </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
		  	    </ul>
	  	    </div>
	  	    <div class="tab-pane " id="content">
	  	        <ul class="content-ul">
	  	           <?php if(is_array($gusts)): $i = 0; $__LIST__ = $gusts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                           <?php if(!empty($vo["g_url"])): ?><a href="<?php echo ($vo["g_url"]); ?>" target="_blank" rel="nofollow" title="浏览 <?php echo ($vo["g_name"]); ?> 的网站?">
	                		        <img src="<?php echo ($vo["g_img"]); ?>" class="img-circle img-45"/>
	                		    </a>
                           <?php else: ?>
                                 <img src="<?php echo ($vo["g_img"]); ?>" class="img-circle img-45"/><?php endif; ?>
                           <div class="content-name"><a><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;</a><?php echo ($vo["g_name"]); ?></div>
                           <div class="content-remark">
	          				     <a href="<?php echo U('/gust');?>" title="<?php echo (reFace($vo["g_content"])); ?>" ><?php echo (reFace($vo["g_content"])); ?></a>
	          			   </div>
	  	                </li><?php endforeach; endif; else: echo "" ;endif; ?>
	  	        </ul>
	  	    </div>
	  	    <div class="tab-pane " id="hot">
	  	        <ul class="hot-ul">
		          	<?php if(is_array($hits)): $i = 0; $__LIST__ = $hits;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a><span class="glyphicon glyphicon-fire"></span></a>&nbsp;&nbsp;<a href="<?php echo U('/article-'.$v['a_id']);?>" ><?php echo (mb_substr($v["a_title"],0,25,'utf-8')); ?></a>(<?php echo ($v["a_hit"]); ?>)</li><?php endforeach; endif; else: echo "" ;endif; ?>
	            </ul>
	  	    </div>
	    </div>
		<div class="sider-box2">
	  	    <h4 class="link"><span class="glyphicon glyphicon-link"></span>&nbsp;&nbsp;友情链接</h4>
		  	<ul class="link-ul">
		    	<?php if(is_array($link)): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "暂时没有友情链接" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["l_url"]); ?>" target="_blank" title="<?php echo ($v["l_name"]); ?>"><?php echo ($vo["l_name"]); ?></a></li><?php endforeach; endif; else: echo "暂时没有友情链接" ;endif; ?>
		  	</ul>
		</div> 
</div>
</div>
</div>
	<div class="container-footer">
	<div class="container footer">
		<div class="row footer-all">
			<div class="col-md-3 hidden-xs">
				<h4>程序统计</h4>
					<p class="foot-box1">
						<a><span class="glyphicon glyphicon-comment"></span></a>&nbsp;&nbsp;微说：&nbsp;0 条
						<span class="foot-box1-r">
						<a><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;文章：&nbsp;0 篇
						</span>
					</p> 
					<p class="foot-box1">
						<a><span class="glyphicon glyphicon-envelope"></span></a>&nbsp;&nbsp;评论：&nbsp;0 条
						<span class="foot-box1-r">
						<a><span class="glyphicon glyphicon-send"></span></a>&nbsp;&nbsp;留言：&nbsp;0 条
						</span>
					</p>
					<p class="foot-box1">
						<a><span class="glyphicon glyphicon-home"></span></a>&nbsp;&nbsp;建站：&nbsp;0 天
						<span class="foot-box1-r">
						<a><span class="glyphicon glyphicon-camera"></span></a>&nbsp;&nbsp;相册：&nbsp;0 个
						</span>
					</p>
					<p class="foot-box1">
						<a><span class="glyphicon glyphicon-picture"></span></a>&nbsp;&nbsp;图片：&nbsp;0 张
						<span class="foot-box1-r">
						<a><span class="glyphicon glyphicon-link"></span></a>&nbsp;&nbsp;链接：&nbsp;0 条
						</span>
					</p>
					<p class="foot-box1">
						<a><span class="glyphicon glyphicon-tree-conifer"></span></a>&nbsp;&nbsp;访问：&nbsp;0 次
					</p> 
			</div>
			<div class="col-md-3 ">
				<h4>程序交流</h4>
					<p class="foot-box1">
						Q群：<a href="http://jq.qq.com/?_wv=1027&k=dSjBgy" target="_blank" class="foot-my"><strong>1149250421</strong></a>
						<span class="foot-box1-r">
						<a><span class="glyphicon glyphicon-heart-empty"></span></a>
						&nbsp;<a href="http://koubei.baidu.com/w/loveteemo.com" target="_blank" class="foot-my">&nbsp;邀你点评</a>
						</span>
					</p>
					<p class="foot-box1">
						程序：&nbsp;<?php echo ($versions['v_version']); ?>
						<span class="foot-box1-r">
						版本：&nbsp;Beta <?php echo ($versions['v_version']); ?>
						</span>
					</p> 
					<p class="foot-box1">
						框架：&nbsp; <?php echo (C("FRAME")); ?>
						<span class="foot-box1-r">
						语言：&nbsp; <?php echo (C("LANG")); ?>
						</span>
					</p> 
					<p class="foot-box1">
						编码：&nbsp; <?php echo (C("UTF")); ?>
						<span class="foot-box1-r">
						作者：&nbsp; <?php echo (C("ADMIN_NAME")); ?>
						</span>
					</p>
					<p class="foot-box1">
						源码声明：&nbsp;请参考&nbsp;&nbsp;<a href="http://www.kancloud.cn/iamhappy/blog?token=crMXYD8ksUyt" class="foot-my">使用手册</a>
					</p>
			</div>
			<div class="col-md-3 hidden-xs">
				<h4>推荐文章</h4>	
				<?php if(is_array($f_article)): $i = 0; $__LIST__ = $f_article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p class="foot-box3"><a><span class="glyphicon glyphicon-thumbs-up"></span></a>&nbsp;&nbsp;<a href="" title="" class="foot-my"><?php echo ($vo["a_title"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="col-md-3 hidden-xs">
			<h4>我的相册</h4>
				<ul class="picture-ul">	
					<?php if(is_array($f_album)): $i = 0; $__LIST__ = $f_album;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						    <a href="" target="_blank" title=""><img class="img-rounded img-50" src="<?php echo ($vo["al_img"]); ?>" alt=""></a>
					    </li><?php endforeach; endif; else: echo "" ;endif; ?>					
				</ul>
			</div>
		</div>
		<div class="row bottom">
			<div class="col-md-6 col-sm-5 bottom-left">
			</div>     
			<div class="col-md-6 col-sm-7 bottom-right hidden-xs">
				&nbsp;|&nbsp;
			</div> 
		</div>
	</div>
</div>
<div id="toTop" class="hidden-xs" style="display: none;"><span class="glyphicon glyphicon-chevron-up toTop-img"></span></div>
<!-- 新年雪花效果开始 -->
<style type='text/css'>
/*@media (min-width: 767px){*/
/*.snowwrap,.snow-container{position: fixed; top: 0; left: 0; width: 100% !important; height: 100%; pointer-events: none; z-index: 100001;}*/
/*}*/
</style>
<!-- <div class="snowwrap hidden-xs"> -->
    <!-- <div class="snow-container hidden-xs"></div> -->
<!-- </div> -->
<!-- 新年雪花效果结束 -->
<script src="/Public/Js/jquery-1.10.1.min.js" ></script>
<!-- 雪花效果JS -->
<!-- <script src='/Public/Js/snow.js'></script> -->
<script src="/Public/Js/bootstrap.min.js" ></script>
<script src="/Public/Js/common.js"></script>
<script src="/Public/Js/rl_exp.js"></script>   	
<script src="/Public/Js/jquery.fancybox.js"></script>	
	</body>
</html>