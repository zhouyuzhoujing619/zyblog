<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
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
<style type="text/css"> 
.date_selector, .date_selector *{width:300px;height: auto;border: none;background: none;margin: 0;padding: 0;text-align: left;text-decoration: none;}
.date_selector{background:#fbfbfb;border: 1px solid #ccc;padding: 10px;margin:0;margin-top:-1px;position: absolute;z-index:100000;display:none;border-radius: 3px;box-shadow: 0 0 5px #aaa;box-shadow:0 2px 2px #ccc; width:220px;}
.date_selector_ieframe{position: absolute;z-index: 99999;display: none;}
.date_selector .nav{width: 17.5em;}
.date_selector .nav p{clear: none;}
.date_selector .month_nav, .date_selector .year_nav{margin: 0 0 3px 0;padding: 0;display: block;position: relative;text-align: center;}
.date_selector .month_nav{float: left;width: 55%;}
.date_selector .year_nav{float: right;width: 42%;margin-right: -8px;}
.date_selector .month_name, .date_selector .year_name{font-weight: bold;line-height: 20px;}
.date_selector .button{display: block;position: absolute;top: 0;width:18px;height:18px;line-height:16px;font-weight:bold;color:#5985c7;text-align: center;font-size:12px;overflow:hidden;border: 1px solid #ccc;border-radius:2px;}
.date_selector .button:hover, .date_selector .button.hover{background:#5985c7;color: #fff;cursor: pointer;border-color:#3a930d;}
.date_selector .prev{left: 0;}
.date_selector .next{right: 0;}
.date_selector table{border-spacing: 0;border-collapse: collapse;clear: both;margin: 0; width:220px;}
.date_selector th, .date_selector td{width: 2.5em;height: 2em;padding: 0 !important;text-align: center !important;color: #666;font-weight: normal;}
.date_selector th{font-size: 12px;}
.date_selector td{border:1px solid #f1f1f1;line-height: 2em;text-align: center;white-space: nowrap;color:#5985c7;background: #fff;}
.date_selector td.today{background: #eee;}
.date_selector td.unselected_month{color: #ccc;}
.date_selector td.selectable_day{cursor: pointer;}
.date_selector td.selected{background:#2b579a;color: #fff;font-weight: bold;}
.date_selector td.selectable_day:hover, .date_selector td.selectable_day.hover{background:#5985c7;color: #fff;}
</style>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">添加博文</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form class="form-horizontal" action="/zyblog/index.php/Admin/Article/add" method="post">
    <table class="search-tab" width="100%">
        <tr>
            <th width="80px"><b>分类</b></th>
            <td >
                <input class="form-control" type="text" name="fenlei" style="width:300px;height:25px" placeholder="学习/生活">
            </td>
        </tr>
        <tr>
            <th><b>标题</b></th>
            <td >
                <input class="form-control" type="text" name="title" style="width:300px;height:25px">
            </td>
        </tr>
        <tr>
            <th><b>作者</b></th>
            <td>
                <input class="form-control" type="text" name="author" value="" style="width:300px;height:25px">
            </td>
        </tr>
        <tr>
            <th><b>摘要</b></th>
            <td>
                <textarea class="form-control" name="zhaiyao" rows="6" placeholder="可以不填，如不填；则截取文章内容前300字为描述" style="width:500px;"></textarea>
            </td>
        </tr>
        <tr>
            <th><b>内容</b></th>
            <td>
                  <script id="editor" name="content" type="text/plain" style="width:90%;"></script>
            </td>
        </tr>
        <tr>
            <th><b>是否原创</b></th>
            <td>
                <span class="inputword">是</span>
                <input class="icheck" type="radio" name="is_original" value="1" checked="checked">
                &emsp;
                <span class="inputword">否</span>
                <input class="icheck" type="radio" name="is_original" value="0">
            </td>
        </tr>
        <tr>
            <th><b>是否置顶</b></th>
            <td>
                <span class="inputword">是</span>
                <input class="icheck" type="radio" name="is_top" value="1">
                &emsp;
                <span class="inputword">否</span>
                <input class="icheck" type="radio" name="is_top" value="0" checked="checked">
            </td>
        </tr>
        <tr>
            <th><b>是否显示</b></th>
            <td>
                <span class="inputword">是</span>
                <input class="icheck" type="radio" name="is_show" value="1" checked="checked">
                &emsp;
                <span class="inputword">否</span>
                <input class="icheck" type="radio" name="is_show" value="0">
            </td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input class="btn btn-success" type="submit" value="发表">
            </td>
        </tr>
    </table>
</form>
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');


    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    function insertHtml() {
        var value = prompt('插入html代码', '');
        UE.getEditor('editor').execCommand('insertHtml', value)
    }
    function createEditor() {
        enableBtn();
        UE.getEditor('editor');
    }
    function getAllHtml() {
        alert(UE.getEditor('editor').getAllHtml())
    }
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getContent());
        alert(arr.join("\n"));
    }
    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getPlainTxt());
        alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
        alert(arr.join("\n"));
    }
    function setDisabled() {
        UE.getEditor('editor').setDisabled('fullscreen');
        disableBtn("enable");
    }

    function setEnabled() {
        UE.getEditor('editor').setEnabled();
        enableBtn();
    }

    function getText() {
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UE.getEditor('editor').selection.getRange();
        range.select();
        var txt = UE.getEditor('editor').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UE.getEditor('editor').getContentTxt());
        alert(arr.join("\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UE.getEditor('editor').hasContents());
        alert(arr.join("\n"));
    }
    function setFocus() {
        UE.getEditor('editor').focus();
    }
    function deleteEditor() {
        disableBtn();
        UE.getEditor('editor').destroy();
    }
    function disableBtn(str) {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
        }
    }

    function getLocalData () {
        alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
    }

    function clearLocalData () {
        UE.getEditor('editor').execCommand( "clearlocaldata" );
        alert("已清空草稿箱")
    }
</script>
<bootstrapjs />
<icheckjs />
           
    <!--/main-->
</div>
</body>
</html>