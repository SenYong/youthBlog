<?php
/**
 * 网站配置
 */
return array(
	//'配置项'=>'配置值'
	'URL_CASE_INSENSITIVE' => false,   //区分路径大小写
	'S_TIME' => 10,
	'LOAD_EXT_CONFIG' => 'db,system,sdk,email',  //加载扩展配置目录
	'MODULE_ALLOW_LIST' => array('Home','Admin'),  //项目分组设定,多个组之间用逗号分隔,例如'Home,Admin'
	'DEFAULT_MODULE' => 'Home',  //默认分组
	'TMPL_PARSE_STRING' => array(  //自定义替换规则
        '__JS__' => 'Public/Js',
        '__CSS__' => 'Public/Css',
        '__IMG__' => 'Public/Img'
	),
	"SITE_URL" => "http://www.loveblog.com",
	"S_TIME" => 10
);