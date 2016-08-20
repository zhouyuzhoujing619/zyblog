<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>小雨个人博客网站</title>
<meta name="keywords" content="个人博客,小雨个人博客,个人博客模板,小雨" />
<meta name="description" content="小雨个人博客，是一个站在web前端设计之路的女程序员个人网站，提供个人博客模板免费资源下载的个人原创网站。" />
<link href="/zyblog/Application/Home/View/Index/css/base.css" rel="stylesheet">
<link href="/zyblog/Application/Home/View/Index/css/new.css" rel="stylesheet">
<link href="/zyblog/Application/Home/View/Index/css/about.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
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
  <h1 class="t_nav"><span>您当前的位置：<a href="/index.html"><?php echo ($data['title']); ?></a></h1>
  <div class="index_about">
    <h2 class="c_titile"><?php echo ($data['title']); ?></h2>
    <p class="box_c"><span class="d_time">发布时间：<?php echo ($data['time']); ?></span><span>编辑：<?php echo ($data['author']); ?></span><span>互动QQ群：<a href="http://wp.qq.com/wpa/qunwpa?idkey=d4d4a26952d46d564ee5bf7782743a70d5a8c405f4f9a33a60b0eec380743c64">280998807</a></span></p>
    <ul class="infos">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="5" color="#79C434"><b><?php echo ($data['zhaiyao']); ?></b></font>
      <p><?php echo ($data['content']); ?></p>
    </ul>
    <div class="ad"> </div>
    <div class="nextinfo">
      <p>上一篇：<a href="/news/s/2013-09-04/606.html">程序员应该如何高效的工作学习</a></p>
      <p>下一篇：<a href="/news/s/2013-10-21/616.html">柴米油盐的生活才是真实</a></p>
    </div>
     <!-- 多说评论框 start -->
        <div class="ds-thread" data-thread-key="<?php echo ($data["id"]); ?>" data-title="<?php echo ($data["title"]); ?>" data-url="#"></div>
      <!-- 多说评论框 end -->
      <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
      <script type="text/javascript">
      var duoshuoQuery = {short_name:"abc2019000"};
        (function() {
          var ds = document.createElement('script');
          ds.type = 'text/javascript';ds.async = true;
          ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
          ds.charset = 'UTF-8';
          (document.getElementsByTagName('head')[0] 
           || document.getElementsByTagName('body')[0]).appendChild(ds);
        })();
        </script>
  </div>
  <aside class="right">
    <!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare"><a class="bds_tsina"></a><a class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><span class="bds_more"></span><a class="shareCount"></a></div>
    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script> 
    <script type="text/javascript" id="bdshell_js"></script> 
    <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script> 
    <!-- Baidu Button END -->
    <div class="blank"></div>
    <aside class="right">  
    <div class="about_c">
    <p>网名：<span>岁月无恙</span> |zy</p>
    <p>姓名：周雨 </p>
    <p>生日：1995-02-24</p>
    <p>籍贯：湖北省―仙桃市</p>
    <p>现居：湖北省―黄石市</p>
    <p>毕业：湖北师范大学-教育技术学</p>
    <p>喜欢的运动：跑步、打羽毛球、轮滑</p>
    <p>喜欢的歌手：张惠妹、陈奕迅、莫文蔚</p>
<a target="_blank" href="http://wp.qq.com/wpa/qunwpa?idkey=d4d4a26952d46d564ee5bf7782743a70d5a8c405f4f9a33a60b0eec380743c64">
<img src="http://pub.idqqimg.com/wpa/images/group.png" alt="小雨个人博客网站" title="小雨个人博客网站"></a>
<a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&amp;email=HHh9cn95b3F1cHVye1xtbTJ-c3E" ><img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_22.png" alt="小雨个人博客网站"></a>
</div>     
</aside>
    
</article>
<footer>
  <p>Design by 小雨霏霏 <a href="http://www.miitbeian.gov.cn/" target="_blank">2017-05-28自主设计开发</a> <a href="/">网站统计</a></p>
</footer>
<script src="js/silder.js"></script>
</body>
</html>