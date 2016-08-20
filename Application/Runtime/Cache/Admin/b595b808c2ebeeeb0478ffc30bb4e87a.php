<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>

    <meta charset="UTF-8">
    <title>个人博客后台管理</title>
    <link rel="stylesheet" type="text/css" href="/zyblog/Application/Admin/View/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/zyblog/Application/Admin/View/Public/css/main.css"/>
   <link href="/zyblog/Application/Admin/View/Public/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/zyblog/Application/Admin/View/Public/js/libs/modernizr.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/zyblog/Application/Admin/View/Public/editor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/zyblog/Application/Admin/View/Public/editor/ueditor.all.min.js"> </script>
    <script type="text/javascript" src="http://www.js-css.cn/jscode/jquery.min.js"></script>
    <script type="text/javascript" src="/zyblog/Application/Admin/View/Public/js/jquery.date_input.pack.js"></script> 
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="<?php echo U('Admin/Index/index');?>">首页</a></li>
                <li><a href="<?php echo U('Home/Index/index');?>" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">管理员</a></li>
                <li><a href="#">修改密码</a></li>
                <li><a href="#">退出</a></li>
            </ul>
        </div>
    </div>
</div> 
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="<?php echo U('Admin/Article/index');?>"><i class="icon-font">&#xe003;</i>内容管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/Article/index');?>"><i class="icon-font">&#xe008;</i>文章列表</a></li>
                        <li><a href="<?php echo U('Admin/Article/add');?>"><i class="icon-font">&#xe005;</i>添加文章</a></li>
                        <li><a href="<?php echo U('Admin/Moodlist/index');?>"><i class="icon-font">&#xe004;</i>闲言碎语列表</a></li>
                        <li><a href="<?php echo U('Admin/Moodlist/add');?>"><i class="Hui-iconfont">&#xe610;</i>添加闲言碎语</a></li>
                        <li><a href="<?php echo U('Admin/Article/update');?>"><i class="icon-font">&#xe012;</i>修改闲言碎语</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>用户管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/User/manager');?>"><i class="icon-font">&#xe017;</i>管理员信息</a></li>
                        <li><a href="<?php echo U('Admin/User/vistor');?>"><i class="Hui-iconfont">&#xe725;</i>浏览者信息</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font">&#xe06b;</i><span>欢迎进入小雨博客的后台！</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>快捷操作</h1>
            </div>
            <div class="result-content">
                <div class="short-wrap">
                    <a href="<?php echo U('Admin/Article/add');?>"><i class="icon-font">&#xe005;</i>新增博文</a>
                    <a href="#"><i class="icon-font">&#xe01e;</i>作品评论</a>
                </div>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>系统基本信息</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">操作系统</label><span class="res-info">WINNT</span>
                    </li>
                    <li>
                        <label class="res-lab">运行环境</label><span class="res-info">Apache/2.2.21 (Win64) PHP/5.3.10</span>
                    </li>
                    <li>
                        <label class="res-lab">PHP运行方式</label><span class="res-info">apache2handler</span>
                    </li>
                    <li>
                        <label class="res-lab">小雨设计-版本</label><span class="res-info">v-0.1</span>
                    </li>
                    <li>
                        <label class="res-lab">上传附件限制</label><span class="res-info">2M</span>
                    </li>
                    <li>
                        <label class="res-lab">黄石时间</label><span class="res-info">2016年7月16日 12:07:24</span>
                    </li>
                    <li>
                        <label class="res-lab">服务器域名/IP</label><span class="res-info">localhost [ 127.0.0.1 ]</span>
                    </li>
                    <li>
                        <label class="res-lab">Host</label><span class="res-info">127.0.0.1</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>使用帮助</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">官方交流网站：</label><span class="res-info"><a href="h#" target="_blank">小雨博客</a></span>
                    </li>
                    <li>
                        <label class="res-lab">官方交流QQ群：</label><span class="res-info"><a class="qq-link" target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=4ba39c297a33fa548de56a257f6128c7c9e3dd14473e4c86557d93f2197c33e8"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="JS-前端开发" title="JS-前端开发"></a> </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>