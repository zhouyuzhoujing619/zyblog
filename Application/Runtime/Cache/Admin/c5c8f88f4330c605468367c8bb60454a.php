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
                <li><a class="on" href="{U:('Admin/Index/index')}">首页</a></li>
                <li><a href="{U:('Home/Index/index')}" target="_blank">网站首页</a></li>
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
                        <li><a href="<?php echo U('Admin/Comment/index');?>"><i class="icon-font">&#xe006;</i>评论列表</a></li>
                        <li><a href="<?php echo U('Admin/Moodlist/index');?>"><i class="icon-font">&#xe004;</i>闲言碎语列表</a></li>
                        <li><a href="<?php echo U('Admin/Moodlist/add');?>"><i class="Hui-iconfont">&#xe610;</i>添加闲言碎语</a></li>
                        <li><a href="<?php echo U('Admin/Article/update');?>"><i class="icon-font">&#xe012;</i>修改闲言碎语</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>用户管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>管理员信息</a></li>
                        <li><a href="system.html"><i class="Hui-iconfont">&#xe636;</i>浏览者信息</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">修改管理者信息</span></div>
        </div>
        <div class="result-wrap">
 <form class="form-horizontal" action="/zyblog/Admin/User/update" method="post">
    <table class="search-tab" width="100%">
        <tr>
            <th width="80px"><b>姓名</b></th>
            <td>
                <input class="text" type="text" name="name" value="<?php echo ($data['name']); ?>" style="width:300px;height:25px">
            </td>
        </tr>
        <tr>
            <th width="80px"><b>密码</b></th>
            <td>
                <input class="password" type="password" name="password" value="<?php echo ($data['password']); ?>" style="width:300px;height:25px">
            </td>
        </tr>
        <tr>
            <th width="80px"><b>邮箱</b></th>
            <td>
                <input class="email" type="email" name="email" value="<?php echo ($data['email']); ?>" style="width:300px;height:25px">
            </td>
        </tr>
        <tr>
            <th width="80px"></th>
            <td>
              <input type="hidden" value="<?php echo ($data['id']); ?>" name="id" />
            </td>
        </tr>
        
            <th></th>
            <td>
                <input class="btn btn-success" type="submit" value="提交">
            </td>
        </tr>
    </table>
</form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>