<?php
//000000000010a:3:{i:0;a:15:{s:4:"a_id";s:1:"5";s:7:"a_title";s:27:"支付宝即时交易整合";s:3:"pid";s:1:"9";s:9:"a_keyword";s:22:"即时交易,支付宝";s:5:"a_img";s:28:"/Upload/Thumb/1506392439.jpg";s:8:"a_remark";s:258:"因为公司的项目需要用到支付宝的即时交易，而且个人是有轻微强迫症，不太喜欢把不相关的集成到一起，所以这里单独整合了支付宝的即时交易，和担保交易很类似的，于是写下来方便之后再用";s:9:"a_content";s:14:"<p>sd<br/></p>";s:6:"a_time";s:10:"1506333216";s:6:"a_show";s:1:"2";s:10:"a_original";s:1:"0";s:8:"a_author";s:6:"许勇";s:5:"a_hit";s:2:"11";s:6:"a_from";s:5:"Win 7";s:4:"a_ip";s:9:"127.0.0.1";s:5:"a_num";s:1:"1";}i:1;a:15:{s:4:"a_id";s:1:"7";s:7:"a_title";s:27:"给博客添加节日雪花";s:3:"pid";s:1:"9";s:9:"a_keyword";s:15:"雪花,jq特效";s:5:"a_img";s:28:"/Upload/Thumb/1506757202.jpg";s:8:"a_remark";s:226:"转眼就是2016年的圣诞和元旦到了，然后剩下的就是春节，节日多了当然气氛就要嗨起来嘛，这里给大家分享一个比较不错的雪花特效，简单、粗暴。需要的可以进来瞧瞧。";s:9:"a_content";s:2312:"<p style="white-space: normal;">二话不说先上效果图:</p><p style="white-space: normal; text-align: center;"><img src="/Upload/20170930/1506757194131505.png" title="1451638951632614.png" alt="QQ截图20160101170138.png"/></p><p style="white-space: normal;">需要的朋友请看下面的说明，对JQ比较了解的朋友可以直接下载。</p><blockquote style="white-space: normal;"><p>下载地址：</p></blockquote><p style="white-space: normal;"><a href="http://pan.baidu.com/s/1mgO5nLY" _src="http://pan.baidu.com/s/1mgO5nLY">http://pan.baidu.com/s/1mgO5nLY</a>（也可以在下载区下载）</p><blockquote style="white-space: normal;"><p>操作方法</p></blockquote><ol class=" list-paddingleft-2" style="width: 1274.89px; white-space: normal;"><li><p>把下面代码加入需要显示的文件，因为我是公用底部，所以我添加在底部</p></li></ol><pre class="brush:html">&lt;!--&nbsp;新年雪花效果开始&nbsp;--&gt;
&lt;style&nbsp;type=&#39;text/css&#39;&gt;
.snowwrap,.snow-container{position:&nbsp;fixed;&nbsp;top:&nbsp;0;&nbsp;left:&nbsp;0;&nbsp;width:&nbsp;100%;&nbsp;height:&nbsp;100%;&nbsp;pointer-events:&nbsp;none;&nbsp;z-index:&nbsp;100001;}
&lt;/style&gt;
&lt;div&nbsp;class=&quot;snowwrap&quot;&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;snow-container&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;!--&nbsp;新年雪花效果结束&nbsp;--&gt;</pre><p style="white-space: normal;">2.引入核心JQ文件</p><pre class="brush:html">&lt;!--&nbsp;雪花效果JS&nbsp;--&gt;
&lt;script&nbsp;src=&#39;__JS__/snow.js&#39;&gt;&lt;/script&gt;</pre><p style="white-space: normal;">然后就可以看到效果了。具体请参考本博客现在的效果。<br/></p><blockquote style="white-space: normal;"><p>注意事项<br/></p></blockquote><ol class=" list-paddingleft-2" style="width: 1274.89px; white-space: normal;"><li><p>snow.js的2958行需要指定雪花图片的地址</p></li><li><p>需要在snow.js前面引入JQ文件</p></li></ol><p style="white-space: normal;">应该没什么了，如果遇到问题可以留言和我说下。另外新版博客剩下后台的部分代码修改，预计春节发布2.0版本。</p><p style="white-space: normal;">元旦到了2016年的新开始，祝大家新的一天学业有成，心想事成。</p><p><br/></p>";s:6:"a_time";s:10:"1506756991";s:6:"a_show";s:1:"1";s:10:"a_original";s:1:"1";s:8:"a_author";s:6:"许勇";s:5:"a_hit";s:1:"7";s:6:"a_from";s:5:"Win 7";s:4:"a_ip";s:9:"127.0.0.1";s:5:"a_num";s:1:"0";}i:2;a:15:{s:4:"a_id";s:1:"9";s:7:"a_title";s:35:"include 和 require 引入的区别";s:3:"pid";s:1:"9";s:9:"a_keyword";s:28:"include,require,包含文件";s:5:"a_img";s:28:"/Upload/Thumb/1507694358.jpg";s:8:"a_remark";s:400:"文件的包含中有四个写法：Include / include_once /Require /require_once。其中Include 和require都是把一个页面引入到当前页面.那么怎么来理解&quot;引入&quot;.就相当于把被包含文件的所有代码,替换include/require那一句.和直接把代码写在include那一句是一样的.Require作用也是把一个文件引入到当前文件.理解与include一样.";s:9:"a_content";s:12923:"<p style="white-space: normal;">Include与require的区别<br/></p><p style="white-space: normal;">答:include如果引入的文件不存在,试图继续往下执行,报一个warning</p><p style="white-space: normal;">(如果你不介意之前的内容是否被包含，之后的内容都要执行，就使用include)</p><p style="white-space: normal;">而require如果引入的文件不存在,报fatal error,不再继续执行.</p><p style="white-space: normal;">(如果之前的内容一定要被包含，才允许继续执行之后的代码，就使用require)</p><p style="white-space: normal;"><br/></p><p style="white-space: normal;">========================================================</p><p style="white-space: normal;">Include/require 与 include_once /require_once的区别</p><p style="white-space: normal;">_once 会自动判断文件是否已经引入,如果引入,不再重复执行.</p><p style="white-space: normal;">即:保证被包含文件只可能被引入一次.</p><p style="white-space: normal;">(如果包含的文件里有定义函数，那么被包含的文件只能被包含一次，如果多次包含，就会出现函数重定义的错误，php是不运行函数重定义的，会出现致命错误，之后代码不在运行)</p><p style="white-space: normal;">=======================================================</p><p style="white-space: normal;">有的文件不允许被包含多次?</p><p style="white-space: normal;">可以用_once来控制,</p><p style="white-space: normal;">但是,如果从文件的设计上,比较规范,能保证肯定不会出现多次包含的错误,</p><p style="white-space: normal;">这种情况下 建议用include</p><p style="white-space: normal;">因为include_once要检测之前有没有包含,效率没有include高</p><p style="white-space: normal;">怎么来理解&quot;引入&quot;.</p><p style="white-space: normal;"><br/></p><p style="white-space: normal;">就相当于把被包含文件的所有代码,替换include/require那一句.</p><p style="white-space: normal;">和直接把代码写在include那一句是一样的.</p><p style="white-space: normal;"><br/></p><p style="white-space: normal;">Require作用也是把一个文件引入到当前文件.</p><p style="white-space: normal;">理解与include一样.</p><p style="white-space: normal;"><br/></p><p style="white-space: normal;">Include与require的区别</p><p style="white-space: normal;">答:include如果引入的文件不存在,试图继续往下执行,报一个warning</p><p style="white-space: normal;">(如果你不介意之前的内容是否被包含，之后的内容都要执行，就使用include)</p><p style="white-space: normal;">而require如果引入的文件不存在,报fatal error,不再继续执行.</p><p style="white-space: normal;">(如果之前的内容一定要被包含，才允许继续执行之后的代码，就使用require)</p><p style="white-space: normal;"><br/></p><p style="white-space: normal;">========================================================</p><p style="white-space: normal;">Include/require 与 include_once /require_once的区别</p><p style="white-space: normal;">_once 会自动判断文件是否已经引入,如果引入,不再重复执行.</p><p style="white-space: normal;">即:保证被包含文件只可能被引入一次.</p><p style="white-space: normal;">(如果包含的文件里有定义函数，那么被包含的文件只能被包含一次，如果多次包含，就会出现函数重定义的错误，php是不运行函数重定义的，会出现致命错误，之后代码不在运行)</p><p style="white-space: normal;">=======================================================</p><p style="white-space: normal;">有的文件不允许被包含多次?</p><p style="white-space: normal;">可以用_once来控制,</p><p style="white-space: normal;">但是,如果从文件的设计上,比较规范,能保证肯定不会出现多次包含的错误,</p><p style="white-space: normal;">这种情况下 建议用include</p><p style="white-space: normal;">因为include_once要检测之前有没有包含,效率没有include高</p><p style="white-space: normal;"><br/></p><p style="white-space: normal;">require() 语句包含并运行指定文件，include()语句会获取指定文件中存在的所有文本/代码/标记，并复制到使用 include 语句的文件中。这两个函数有相似的功能，现在我们来讲讲他们包含文件的路径问题。</p><p style="white-space: normal;"><br/></p><blockquote style="white-space: normal;"><p>1 绝对路径、相对路径和未确定路径</p></blockquote><p style="white-space: normal;">相对路径</p><p style="white-space: normal;">相对路径指以.开头的路径，例如</p><p style="white-space: normal;">./a/a.php (相对当前目录)</p><p style="white-space: normal;">../common.inc.php (相对上级目录)，</p><p style="white-space: normal;">绝对路径</p><p style="white-space: normal;">绝对路径是以 / 开头或者windows下的 C:/ 类似的盘符开头的路径，全路径不用任何参考路径就可以唯一确定文件的最终地址。 例如</p><p style="white-space: normal;">/apache/wwwroot/site/a/a.php</p><p style="white-space: normal;">c:/wwwroot/site/a/a.php</p><p style="white-space: normal;">未确定路径</p><p style="white-space: normal;">凡是不以 . 或者 / 开头、也不是windows下 盘符:/ 开头的路径，例如</p><p style="white-space: normal;">a/a.php</p><p style="white-space: normal;">common.inc.php，</p><p style="white-space: normal;">开始以为这也是相对路径，但在php的include/require包含机制中，这种类型的路径跟以 . 开头的相对路径处理是完全不同的。require &#39;./a.php&#39; 和 require &#39;a.php&#39; 是不同的!</p><p style="white-space: normal;">下面分析这三种类型包含路径的处理方式：首先记住一个结论：如果包含路径为相对路径或者绝对径，则不会到include_path(php.ini 中定义的include_path环境变量，或者在程序中使用set_include_path(...)设置)中去查找该文件。</p><p style="white-space: normal;">测试环境说明</p><p style="white-space: normal;">注意：下面的讨论和结论基于这样的环境： 假设 A=http://www.xxx.com/app/test/a.php，再次强调下面的讨论是针对直接访问A的情况。</p><p style="white-space: normal;"><br/></p><blockquote style="white-space: normal;"><p>2. 相对路径：</p></blockquote><p style="white-space: normal;">相对路径需要一个参考目录才能确定文件的最终路径，在包含解析中，不管包含嵌套多少层，这个参考目录是程序执行入口文件所在目录。</p><p style="white-space: normal;">示例1</p><p style="white-space: normal;">A中定义 require &#39;./b/b.php&#39;; // 则B=[SITE]/app/test/b/b.php</p><p style="white-space: normal;">B中定义 require &#39;./c.php&#39;; // 则C=[SITE]/app/test/c.php 不是[SITE]/app/test/b/c.php</p><p style="white-space: normal;"><br/></p><p style="white-space: normal;">示例2</p><p style="white-space: normal;">A中定义 require &#39;./b/b.php&#39;; // 则B=[SITE]/app/test/b/b.php</p><p style="white-space: normal;">B中定义 require &#39;../c.php&#39;; // 则C=[SITE]/app/c.php 不是 [SITE]/app/test/c.php</p><p style="white-space: normal;"><br/></p><p style="white-space: normal;">示例3</p><p style="white-space: normal;">A中定义 require &#39;../b.php&#39;; //则B=[SITE]/app/b.php</p><p style="white-space: normal;">B中定义 require &#39;../c.php&#39;; //则C=[SITE]/app/c.php 不是 [SITE]/c.php</p><p style="white-space: normal;"><br/></p><p style="white-space: normal;">示例4:</p><p style="white-space: normal;">A中定义 require &#39;../b.php&#39;; // 则B=[SITE]/app/b.php</p><p style="white-space: normal;">B中定义 require &#39;./c/c.php&#39;; / /则C=[SITE]/app/test/c/c.php 不是 [SITE]/app/c/c.php</p><p style="white-space: normal;"><br/></p><p style="white-space: normal;">示例5</p><p style="white-space: normal;">A中定义 require &#39;../inc/b.php&#39;; // 则B=[SITE]/app/inc/b.php</p><p style="white-space: normal;">B中定义 require &#39;./c/c.php&#39;; // 则C还是=[SITE]/app/test/c/c.php 不是 [SITE]/app/inc/c/c.php</p><p style="white-space: normal;"><br/></p><p style="white-space: normal;">示例6</p><p style="white-space: normal;">A中定义 require &#39;../inc/b.php&#39;; // 则B=[SITE]/app/inc/b.php</p><p style="white-space: normal;">B中定义 require &#39;./c.php&#39;; // 则C=[SITE]/app/test/c.php 不是 [SITE]/app/inc/c.php</p><p style="white-space: normal;"><br/></p><blockquote style="white-space: normal;"><p>3. 绝对路径</p></blockquote><p style="white-space: normal;"><br/></p><p style="white-space: normal;">绝对路径的比较简单，不容易混淆出错，require|inclue 的就是对应磁盘中的文件。</p><p style="white-space: normal;">require &#39;/wwwroot/xxx.com/app/test/b.php&#39;; // Linux中</p><p style="white-space: normal;">require &#39;c:/wwwroot/xxx.com/app/test/b.php&#39;; // windows中</p><p style="white-space: normal;">dirname(__FILE__)计算出来的也是一个绝对路径形式的目录，但是要注意__FILE__是一个Magic constants，不管在什么时候都等于写这条语句的php文件所在的绝对路径，因此dirname(__FILE__)也总是指向写这条语句的php文件所在的绝对路径，跟这个文件是否被其他文件包含使用没有任何关系。</p><p style="white-space: normal;"><br/></p><p style="white-space: normal;">示例1</p><p style="white-space: normal;">A中定义 require &#39;../b.php&#39;; // 则B=[SITE]/app/b.php</p><p style="white-space: normal;">B中定义 require dirname(__FILE__).&#39;/c.php&#39;; // 则B=[SITE]/app/c.php</p><p style="white-space: normal;"><br/></p><p style="white-space: normal;">示例2</p><p style="white-space: normal;">A中定义 require &#39;../inc/b.php&#39;; // 则B=[SITE]/app/inc/b.php</p><p style="white-space: normal;">B中定义 require dirname(__FILE__).&#39;/c.php&#39;; // 则B=[SITE]/app/inc/c.php 始终跟B在同一个目录</p><p style="white-space: normal;"><br/></p><p style="white-space: normal;">结论：不管B是被A包含使用，还是直接被访问</p><p style="white-space: normal;">B如果 require dirname(__FILE__).&#39;/c.php&#39;; // 则始终引用到跟B在同一个目录中的 c.php文件;</p><p style="white-space: normal;">B如果 require dirname(__FILE__).&#39;/../c.php&#39;; // 则始终引用到B文件所在目录的父目录中的 c.php文件;</p><p style="white-space: normal;">B如果 require dirname(__FILE__).&#39;/c/c.php&#39;; // 则始终引用到B文件所在目录的c子目录中的 c.php文件;</p><p style="white-space: normal;"><br/></p><blockquote style="white-space: normal;"><p>4. 未确定路径</p></blockquote><p style="white-space: normal;"><br/></p><p style="white-space: normal;">首先在逐一用include_path中定义的包含目录来拼接[未确定路径]，找到存在的文件则包含成功退出，如果没有找到，则用执行 require语句的php文件所在目录来拼接[未确定路径]组成的全路径去查找该文件，如果文件存在则包含成功退出，否则表示包含文件不存在，出错。 未确定路径比较容易搞混不建议使用。</p><p style="white-space: normal;"><br/></p><blockquote style="white-space: normal;"><p>5. 解决方案</p></blockquote><p style="white-space: normal;"><br/></p><p style="white-space: normal;">由于“相对路径”中的“参照目录”是执行入口文件所在目录，“未确定”路径也比较容易混淆，因此最好的解决方法是使用“绝对路径”; 例如b.php的内容如下，无论在哪里require b.php都是以b.php的路径为参照来require c.php的</p><p style="white-space: normal;"><br/></p><p style="white-space: normal;">$dir = dirname(__FILE__);</p><p style="white-space: normal;">require($dir . &#39;../c.php&#39;);</p><p style="white-space: normal;"><br/></p><p style="white-space: normal;">或者定义一个通用函数 import.php，将其设置为“自动提前引入文件”，在php.ini做如下配置</p><p style="white-space: normal;">更改配置项(必须)auto_prepend_file = &quot;C:xampphtdocsauto_prepend_file.php&quot;</p><p style="white-space: normal;">更改配置项(可选)allow_url_include = On</p><p style="white-space: normal;">import.php内容如下</p><pre class="brush:php">function&nbsp;import($path)&nbsp;{
$old_dir&nbsp;=&nbsp;getcwd();&nbsp;//&nbsp;保存原“参照目录”
chdir(dirname(__FILE__));&nbsp;//&nbsp;将“参照目录”更改为当前脚本的绝对路径
require_once($path);
chdir($old_dir);&nbsp;//&nbsp;改回原“参照目录”
}</pre><p style="white-space: normal;">这样就可以使用import()函数来require文件了，无论包含多少级“参照目录”都是当前文件</p><p><br/></p>";s:6:"a_time";s:10:"1506757315";s:6:"a_show";s:1:"1";s:10:"a_original";s:1:"0";s:8:"a_author";s:6:"许勇";s:5:"a_hit";s:2:"31";s:6:"a_from";s:5:"Win 7";s:4:"a_ip";s:9:"127.0.0.1";s:5:"a_num";s:1:"1";}}
?>