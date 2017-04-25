<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<head>
	<meta charset="UTF-8">
	<title>编辑附件</title>
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
						<div class="row">
							<ol class="breadcrumb">
							    <li><a href="/zhaosheng/Admin/Index/index">首页</a></li>
							    <li><a href="/zhaosheng/Admin/Downfile/index">附件管理</a></li>
							    <li>编辑附件</li>
							</ol>
						</div>
						<div class="row">
							<form class="form-horizontal" role="form" method="post" action="/zhaosheng/index.php/Admin/Downfile/update/id/<?php echo ($data["id"]); ?>"> 
							<div class="form-group">
								<label for="note" class="col-sm-2 control-label">附件名</label>
								<div class="col-sm-10">
								<input type="text" class="form-control" id="name" name="name" placeholder="请输入附件名" value="<?php echo ($data["name"]); ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="status" class="col-sm-2 control-label">是否显示</label>
								<div class="col-sm-2">
									<label>
										<input type="radio" name="status" id="status1" value="1"> 显示
									</label>
									<label>
										<input type="radio" name="status" id="status2" value="0">不显示
									</label>
								</div>
							</div>
							<div class="form-group">
								<label for="status" class="col-sm-2 control-label">文件路径</label>
								<div class="col-sm-2">
									<label>
									<?php echo ($data["url"]); ?>
									</label>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-success">保存</button>
								</div>
							</div>
							</form>
						</div>
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
	InitRadio($("input[name='status']"),"<?php echo ($data["status"]); ?>");
	InitNav($('#left_nav li'),"<?php echo ($category); ?>");
	InitCategory($('#category')[0],$('#sub_category')[0],"<?php echo ($data["category"]); ?>","<?php echo ($data["sub_category"]); ?>");
	$(function (){
		$("#downfile_form").validate({
	    	rules:{
	    		name:{
	    			required:true,
	    			maxlength:255
	    		},
	    		status:"required",
	    	},
	    	messages:{
	    		name:{
	    			required:"请填写附件名",
	    			maxlength:255
	    		},
	    		status:"请设置是否显示",
	    	},
	    });
	});
</script>