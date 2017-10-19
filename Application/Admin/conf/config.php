<?php
 /**
  * 后台配置
  */
 return array(
    'URL_CASE_INSENSITIVE' =>false,
    'TMPL_CACHE_ON' => false,//禁止模板编译缓存 
    'HTML_CACHE_ON' => false,//禁止静态缓存
    'DEFAULT_AJAX_RETURN' => 'json',
    'TMPL_PARSE_STRING' =>  array(
        '__JS__'    =>  '/Public/Other/Js',
        '__CSS__'   =>  '/Public/Other/Css',
        '__IMG__'   =>  '/Public/Other/Img',
        '__UE__'	=>	'/Public/Ueditor',        
    ),
 )
?>