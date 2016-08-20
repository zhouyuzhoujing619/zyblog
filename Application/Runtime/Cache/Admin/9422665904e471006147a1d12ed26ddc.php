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
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">评论列表</span></div>
        </div>
        <div class="search-wrap">
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                                                <tr>
                            <td>ID</td>
                            <td>姓名</td>
                            <td>标题</td>
                            <td>回复内容</td>
                            <td>审核状态</td>
                            <td>留言时间</td>
                            <td>操作</td>
                            <td><input type="checkBox" name="checkBoxs" id="checkedAll" onClick="checkAll(this)">
                              全选</td>
                          </tr>
                            <form name="form1" action="" method="post">

                          <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id="<?php echo ($vo["id"]); ?>" onMouseOver="menu(<?php echo ($vo["id"]); ?>,name='<?php echo ($vo["name"]); ?>')">
                              <td><?php echo ($vo["id"]); ?></td>
                              <td><?php echo ($vo["author"]); ?></td>
                              <td><?php echo ($vo["title"]); ?></td>
                              <td><?php if(empty($vo["reply"])): ?>无回复<?php else: echo ($vo["comment"]); endif; ?></td>
                              <td><?php switch($vo["audit"]): case "1": ?>已审核<?php break;?>
                                  <?php case "0": ?>未审核<?php break; endswitch;?></td>
                              <td><?php echo ($vo["time"]); ?></td>
                              <td><a href="/zyblog/index.php/Admin/Comment/prereply/id/<?php echo ($vo["id"]); ?>/p/<?php echo ($nowPage); ?>">回复</a>&nbsp;&nbsp;&nbsp;<a href="/zyblog/index.php/Admin/Comment/del/id/<?php echo ($vo["id"]); ?>/p/<?php echo ($nowPage); ?>">删除</a></td>
                              <td><input type="checkbox"  name="checkBox" value="<?php echo ($vo["id"]); ?>" ></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div class="list-page"><?php echo ($page); ?></div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>