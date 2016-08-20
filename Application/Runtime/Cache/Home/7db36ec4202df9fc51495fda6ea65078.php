<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>个人博客模板</title>
<meta name="keywords" content="个人博客模板,博客模板" />
<meta name="description" content="记录生活点滴个人博客模板，优雅、稳重、大气,低调。" />
<link href="/zyblog/Application/Home/View/Index/css/base.css" rel="stylesheet">
<link href="/zyblog/Application/Home/View/Index/css/mood.css" rel="stylesheet">
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
<div class="moodlist">
  <h1 class="t_nav"><span>删删写写，回回忆忆，虽无法行云流水，却也可碎言碎语。</span><a href="/" class="n1">网站首页</a><a href="/" class="n2">碎言碎语</a></h1>
  <div class="bloglist">
  <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><ul class="arrow_box">
     <div class="sy">
     <img src="/zyblog/Application/Home/View/Index/images/001.png">
      <p> <?php echo ($v["content"]); ?></p>
      </div>
      <span class="dateview"><?php echo ($v["time"]); ?></span>
    </ul><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
  <div class="page"><?php echo ($page); ?></div>
</div>
<footer>
  <p>Design by 小雨霏霏 <a href="http://www.miitbeian.gov.cn/" target="_blank">2017-05-28自主设计开发</a> <a href="/">网站统计</a></p>
</footer>
<script src="js/silder.js"></script>
</body>
</html>