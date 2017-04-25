<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<head>
	<meta charset="UTF-8">
	<title>后台首页</title>
	<link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/zhaosheng/Public/Admin/Css/common.css">
	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/lib/jquery.js"></script>
	<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
	<script src="/zhaosheng/Application/Common/Ueditor/ueditor.parse.js"></script>
	<script src="/zhaosheng/Public/Admin/Js/common.js"></script>
</head>
</head>
<body>
	<div class="container-fluid">
		<div class="row" id="header">
	<div class="col-xs-8 col-sm-8 col-md-4 col-lg-2">
		<a href="/zhaosheng/index.php/Home/Index/index.html"><h2>资环招生网站首页</h2></a>
	</div>
	<div class="col-xs-0 col-sm-0 col-md-6 col-lg-8""></div>
	<div class="col-xs-4 col-sm-4 col-md-2 col-lg-1 col-lg-offset-1">
		<span>admin</span>
		<a href="/zhaosheng/Admin/User/quit" class="btn btn-danger">退出</a>
	</div>
</div>
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2" id="left_nav">
	<ul class="nav nav-pills nav-stacked">
		<li id="l_index"><a href="/zhaosheng/Admin/Index/index">首页</a></li>
		<li id="l_article"><a href="/zhaosheng/Admin/Article/index">文章管理</a></li>
		<li id="l_photo"><a href="/zhaosheng/Admin/Photo/index">图片管理</a></li>
		<li id="l_downfile"><a href="/zhaosheng/Admin/Downfile/index">附件管理</a></li>
		<li id="l_video"><a href="/zhaosheng/Admin/Video/index">视频管理</a></li>
	</ul>
</div>
			<div class="col-xs-10 col-sm-10 col-md-9 col-lg-9">
				<div class="panel panel-default">
		   			<div class="panel-body">
						
					</div>
				</div>
			</div>
		</div>
		<div class="row" id="footer">
			
</div>
	</div>
</body>
</html>
<script type="text/javascript">
	InitNav($('#left_nav li'),"<?php echo ($category); ?>");
</script>