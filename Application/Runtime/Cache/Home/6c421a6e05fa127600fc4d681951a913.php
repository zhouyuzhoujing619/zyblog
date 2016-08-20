<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>个人博客模板</title>
<meta name="keywords" content="个人博客模板,博客模板" />
<meta name="description" content="记录生活点滴个人博客模板，优雅、稳重、大气,低调。" />
<link href="/zyblog/Application/Home/View/Index/css/base.css" rel="stylesheet">
<link href="/zyblog/Application/Home/View/Index/css/style.css" rel="stylesheet">
</head>
<body>
<header>
  <div id="logo"><a href="/"></a></div>
  <nav class="topnav" id="topnav">
  <a href="/zyblog/index.php/Home/Index/index"><span>首页</span><span class="en">Protal</span></a>
  <a href="/zyblog/index.php/Home/Index/about"><span>关于我</span><span class="en">About</span></a>
  <a href="/zyblog/index.php/Home/Index/newlist"><span>慢生活</span><span class="en">Life</span></a>
  <a href="/zyblog/index.php/Home/Index/knowledge"><span>学无止境</span><span class="en">Learn</span></a>
  <a href="/zyblog/index.php/Home/Index/moodlist"><span>碎言碎语</span><span class="en">Doing</span></a>
  <a href="http://pan.baidu.com/disk/home#list/path=%2F"><span>zyblog</span><span class="en">Share</span></a>
  </nav>
</header>
<article class="blogs">
<h1 class="t_nav"><span>“慢生活”不是懒惰，放慢速度不是拖延时间，而是让我们在生活中寻找到平衡。</span><a href="/" class="n1">网站首页</a><a href="/" class="n2">慢生活</a></h1>
<div class="newblog left">
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><h2><?php echo ($v["title"]); ?></h2>
   <p class="dateview"><span>发布时间：<?php echo ($v["time"]); ?></span><span>作者：<?php echo ($v["author"]); ?></span><span>分类：<?php echo ($v["fenlei"]); ?></span></p>
    <figure><img src="/zyblog/Application/Home/View/Index/images/001.png"></figure>
    <ul class="nlist">
      <p><?php echo ($v["zhaiyao"]); ?></p>
      <a title="/" href="/zyblog/index.php/Home/Index/show/id/<?php echo ($v["id"]); ?>" target="_blank" class="readmore">阅读全文>></a>
    </ul>
    <div class="line"></div><?php endforeach; endif; else: echo "" ;endif; ?>
    <div class="blank"></div>
    <div class="page"><?php echo ($page); ?></div>
</div>
<aside class="right">
   <div class="rnav">
      <ul>
       <li class="rnav1"><a href="/download/" target="_blank">日记</a></li>
       <li class="rnav2"><a href="/newsfree/" target="_blank">程序人生</a></li>
       <li class="rnav3"><a href="/web/" target="_blank">欣赏</a></li>
       <li class="rnav4"><a href="/newshtml5/" target="_blank">短信祝福</a></li>
     </ul>      
    </div>
<div class="news">
<h3>
      <p>最新<span>文章</span></p>
    </h3>
    <ul class="rank">
    <?php if(is_array($data)): $i = 0; $__LIST__ = array_slice($data,0,8,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/zyblog/index.php/Home/Index/show/id/<?php echo ($vo["id"]); ?>" title="Column 三栏布局 个人网站模板" target="_blank"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <h3 class="ph">
      <p>点击<span>排行</span></p>
    </h3>
    <ul class="paih">
    <?php if(is_array($data)): $i = 0; $__LIST__ = array_slice($data,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/zyblog/index.php/Home/Index/show/id/<?php echo ($vo["id"]); ?>" title="Column 三栏布局 个人网站模板" target="_blank"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    </div>
    <div class="visitors">
      <h3><p>最近访客</p></h3>
      <ul>

      </ul>
    </div>
     <!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare"><a class="bds_tsina"></a><a class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><span class="bds_more"></span><a class="shareCount"></a></div>
    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script> 
    <script type="text/javascript" id="bdshell_js"></script> 
    <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script> 
    <!-- Baidu Button END -->   
</aside>
</article>
<footer>
  <p>Design by 小雨霏霏 <a href="http://www.miitbeian.gov.cn/" target="_blank">2017-05-28自主设计开发</a> <a href="/">网站统计</a></p>
</footer>
<script src="js/silder.js"></script>
</body>
</html>