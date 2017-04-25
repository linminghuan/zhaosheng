<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<head>
	<meta charset="UTF-8">
	<title>新增图片</title>
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
							    <li><a href="/zhaosheng/Admin/Photo/index">图片管理</a></li>
							    <li>新增图片</li>
							</ol>
						</div>
						<div class="row">
							<form class="form-horizontal" name="photo_form" role="form" method="post" action="/zhaosheng/index.php/Admin/Photo/insert"> 
							<div class="form-group">
								<label for="note" class="col-sm-2 control-label">描述</label>
								<div class="col-sm-10">
								<input type="text" class="form-control" id="note" name="note" placeholder="请输入描述">
								</div>
							</div>
							<div class="form-group">
								<label for="author" class="col-sm-2 control-label">作者</label>
								<div class="col-sm-10">
								<input type="text" class="form-control" id="author" name="author" placeholder="请输入作者">
								</div>
							</div>
							<div class="form-group">
								<label for="category" class="col-sm-2 control-label">图片类型</label>
								<div class=" col-sm-2">
									<select class="form-control" name="category" id="category">
										<option value="student">学生风采</option>
										<!-- <option value="banner">banner轮播</option>
										<option value="famous">名师风采</option> -->
									</select>
								</div>
								<!-- <label for="sub_category" class="col-sm-2 control-label">图片二级类型</label>
								<div class=" col-sm-2">
									<select class="form-control" name="sub_category" id="sub_category" disabled="true">
										<option></option>
										<option value="star_teacher">名师</option>
									    <option value="professor">教授</option>
									    <option value="associate_professor">副教授</option>
									</select>
								</div> -->
							</div>
							<div class="form-group">
								<label for="status" class="col-sm-2 control-label">是否显示</label>
								<div class="col-sm-2">
									<label>
										<input type="radio" name="status" id="status1" value="2" checked> 首页显示
									</label>
									<label>
										<input type="radio" name="status" id="status1" value="1" checked> 显示
									</label>
									<label>
										<input type="radio" name="status" id="status2" value="0">不显示
									</label>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">图片</label>
								<!-- 加载编辑器的容器 -->
							    <texterea id="ue_container" name="url" type="text/plain" class="col-sm-9" style="height:490px;"></texterea>
							    <!-- 配置文件 -->
							    <script type="text/javascript" src="/zhaosheng/Application/Common/Ueditor/ueditor.config.js"></script>
							    <!-- 编辑器源码文件 -->
							    <script type="text/javascript" src="/zhaosheng/Application/Common/Ueditor/ueditor.all.js"></script>
							    <!-- 实例化编辑器 -->
							    <script type="text/javascript">
							        var ue = UE.getEditor('ue_container',{toolbars: [[
								        'simpleupload', //单图上传
								        'insertimage', //多图上传
							        	]]});
							        uParse('.ue_container', {
									    rootPath: '../'
									});
							    </script>
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
	// InitRadio($("input[name='status']"),"<?php echo ($data["status"]); ?>");
	InitNav($('#left_nav li'),"<?php echo ($category); ?>");
	//InitCategory($('#category')[0].options,"<?php echo ($data["category"]); ?>");
	$(function (){
		$("#photo_form").validate({
	    	rules:{
	    		note:{
	    			required:true,
	    			maxlength:255
	    		},/*
	    		author:{
	    			required:true,
	    			maxlength:255
	    		},*/
	    		status:"required",
	    	},
	    	messages:{
	    		note:{
	    			required:"请填写图片描述",
	    			maxlength:255
	    		},/*
	    		author:{
	    			required:"请填写作者",
	    			maxlength:255
	    		},*/
	    		status:"请设置是否显示",
	    	},
	    });
	});
</script>