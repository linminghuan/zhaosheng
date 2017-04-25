<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<title>编辑文章</title>
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
							    <li><a href="/zhaosheng/Admin/Article/index">文章管理</a></li>
							    <li>编辑文章</li>
							</ol>
						</div>
						<div class="row">
							<form class="form-horizontal" role="form" method="post" action="/zhaosheng/index.php/Admin/Article/update/id/<?php echo ($data["id"]); ?>"> 
							<div class="form-group">
								<label for="title" class="col-sm-2 control-label">标题</label>
								<div class="col-sm-9">
								<input type="text" class="form-control" id="title" name="title" placeholder="请输入标题" value="<?php echo ($data["title"]); ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="author" class="col-sm-2 control-label" name="author">作者</label>
								<div class="col-sm-9">
								<input type="text" class="form-control" id="author" name="author" placeholder="请输入作者" value="<?php echo ($data["author"]); ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="category" class="col-sm-2 control-label">文章类型</label>
								<div class="col-sm-2">
									<select class="form-control" name="category" id="category">
										<option value="academy">学院概况</option>
									    <option value="famous">名师风采</option>
									    <option value="notice">通知公告</option>
									    <option value="teachers">师资力量</option>
									    <option value="platform">科研平台</option>
									    <option value="student_organization">学生组织</option>
									    <option value="majors">各系介绍</option>
									    <option value="for_new">新生服务</option>
									    <option value="bachelor">本科生</option>
									    <option value="master">硕士生</option>
									    <option value="doctor">博士生</option>
									</select>
								</div>
								<label for="sub_category" class="col-sm-2 control-label">文章二级类型</label>
								<div class=" col-sm-2">
									<select class="form-control" name="sub_category" id="sub_category" disabled="true">
										<option></option>
										<option value="star_teacher">杰出人才</option>
									    <option value="professor">教授</option>
									    <option value="associate_professor">副教授</option>
									    <option value="instructor">讲师</option>
									    <option value="support_staff">教辅人员</option>
									    <option value="official_staff">行政人员</option>
									</select>
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
								<label class="col-sm-2 control-label">正文</label>
								<!-- 加载编辑器的容器 -->
							    <!-- <script id="ue_container" name="content" type="text/plain" class="col-sm-9">"
							    	"<?php echo ($article["content"]); ?>"
							    </script> -->
							    <textarea id="ue_container" class="col-sm-9" name="content" style="height:560px;">
							    <?php echo ($data["content"]); ?>
							    </textarea>
							    <!-- 配置文件 -->
							    <script type="text/javascript" src="/zhaosheng/Application/Common/Ueditor/ueditor.config.js"></script>
							    <!-- 编辑器源码文件 -->
							    <script type="text/javascript" src="/zhaosheng/Application/Common/Ueditor/ueditor.all.js"></script>
							    <!-- 实例化编辑器 -->
							    <script type="text/javascript">
							        var ue = UE.getEditor('ue_container',{toolbars: [[
							        	'undo', 
							        	'redo', 
							        	'bold',
							        	'indent', //首行缩进
								        'italic', //斜体
								        'underline', //下划线
								        'strikethrough', //删除线
								        'formatmatch', //格式刷
								        'source', //源代码
								        'selectall', //全选
								        'removeformat', //清除格式
								        'cleardoc', //清空文档
								        'fontfamily', //字体
								        'fontsize', //字号
								        'paragraph', //段落格式
								        'simpleupload', //单图上传
								        'insertimage', //多图上传
								        'emotion', //表情
								        'searchreplace', //查询替换
								        'justifyleft', //居左对齐
								        'justifyright', //居右对齐
								        'justifycenter', //居中对齐
								        'justifyjustify', //两端对齐
								        'forecolor', //字体颜色
								        'backcolor', //背景色
							        	]],
							        	autoHeightEnabled: false,
							        	
							        });
							        uParse('.ue_container', {
									    rootPath: '../'
									});
									/*ue.ready(function() {
									    ue.setContent('<?php echo ($data["content"]); ?>');
									});*/
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
	InitRadio($("input[name='status']"),"<?php echo ($data["status"]); ?>");
	InitNav($('#left_nav li'),"<?php echo ($category); ?>");
	InitCategory($('#category')[0],$('#sub_category')[0],"<?php echo ($data["category"]); ?>","<?php echo ($data["sub_category"]); ?>");
	InitSubCategory($('#category'),$('#sub_category'));
	$(function(){
		$("#article_form").validate({
	    	rules:{
	    		title:{
	    			required:true,
	    			maxlength:255
	    		},
	    		author:{
	    			required:true,
	    			maxlength:255
	    		},
	    		category:"required",
	    		status:"required",
	    		content:"required",
	    	},
	    	messages:{
	    		title:{
	    			required:"请填写标题",
	    			maxlength:255
	    		},
	    		author:{
	    			required:"请填写作者",
	    			maxlength:255
	    		},
	    		category:"请选着文章的类别",
	    		status:"请设置是否显示",
	    		content:"请填写文章内容",
	    	},
	    });
	});
</script>