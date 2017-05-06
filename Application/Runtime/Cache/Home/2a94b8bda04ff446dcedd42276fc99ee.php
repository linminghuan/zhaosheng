<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
	<title>招生网站首页</title>
	<link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"><!-- 
	<link rel="stylesheet" type="text/css" href="/zhaosheng/Public/Home/Css/common.css"> -->
	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/lib/jquery.js"></script>
	<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
	<script src="/zhaosheng/Public/Home/Js/common.js"></script>
	<style type="text/css">
	* {
		margin: 0;
		padding: 0;
	}
	li {
		list-style: none;
	}

	a {
		text-decoration: none!important;
	}
	#header {
		width: 1920px;
		height: 725px;
		background:url('/zhaosheng/Public/Home/Image/header_background.jpg');
	}
	#banner {
		width: 1260px;
		margin: 0 auto;
		height: 725px;
		background-color: rgba(225,225,225,0.6);
	}
	#top {
		margin-left: 0;
		width: 100%;
		height: 20px;
		background: #55895b;
	}
	#nav-wrap {
		/* margin-top: 40px; */
		margin-left: 0px;
		width: 100%;
		height: 60px;
		background: #55895b;
		/*border-radius: 16px;*/
		font-family: "微软雅黑";
		font-size: 23px; 
	}
	#nav-wrap li {
		width: 140px;
		text-align: center;
		line-height: 60px;
		height: 60px;
		display: inline-block;
		float: left;
	}
	/* #nav-wrap li:first-child{
		margin-left: 50px;
	} */
	#nav-wrap a {
		display: inline-block;
		width: 140px;
		color: white;
	}
	/* #nav-wrap .sub_nav {
		display: none;
		width: 150px;
		height: 500px;
		position: relative;
		z-index: 10;

	}
	#nav-wrap .sub_nav li {
		height: 35px;
		line-height: 30px;
	}
	#nav-wrap .sub_nav li {
		background: #55895b;
	}
	#nav-wrap .sub_nav li:first-child{
		margin-left: 0;
	} */
	.first {
		background: white;
		border-radius: 16px;
		color: black!important;
	}
	.a-active {
		background: white;
		border-radius: 10px;
		color: black!important;
	}
	#slider {
		overflow: hidden;
		width: 1260px;
		height: 320px;
		margin-left:15px!important;
		position: relative;
	}
	#slider img {
		width: 420px;
		height: 320px;
		position: absolute;
	}
	#slider-footer {
		background:#5b805f;
		width: 1260px;
		height:40px;
		margin-left: 30px;
	}
	#slider div {
		width: 420px;
		height: 320px;
		position: absolute;
	}
	#slider div a {
		color: white;
		text-align: center;
	}
	#slider-footer span {
		float: right;
		font-size: 18px;
		color: #eee;
		line-height: 45px;
		margin-right: 20px;
	}
	.footnote {
		display: inline-block;
		width: 400px;
		height: 300px;
		opacity: 0.6;
		background: #555;
		margin: 10px 10px;
		color: white;
		font-size: 20px;
	}
	.footnote p {
		display: block;
		width: 320px;
		height: 240px;
		border: 1px solid #FFFFFF;
		margin: 30px auto;
		word-break:break-word;
		border-radius: 20px;
	} 
	.footnote p span {
		display:table-cell;
		vertical-align:bottom;
		width: 320px;
		height: 240px;
		line-height: 40px;
	}
	#item {
		margin-top: 60px;
		width: 100%;
	}
	#left-item {
		width: 555px;
		margin-left: 345px;
	}
	#right-item {
		width: 680px;
		margin-left: 30px;
	}
	.item-title {
		display: inline-block;
		width: 125px;
		height: 40px;
		border-radius: 10px;
		font-size: 18px;
		text-align: center;
		line-height: 40px;
		background: #fec156;
		color: white;
		font-family: "微软雅黑";
		font-weight: bold;
	}
	.item-content {
		margin: 15px auto;
		font-size: 18px;
	}
	.item-content ul li:first-child {
		margin-top: 20px;
	}
	.item-content li {
		display: inline-block;
		width:100%;
		margin-left: 15px;
	}
	.item-content li a {
		display: inline-block;
		white-space:nowrap;
		text-overflow:ellipsis; 
		-o-text-overflow:ellipsis; 
		overflow: hidden;
	}
	.item-btn {
		float: right;
		margin-right: 110px;
		font-size: 16px;
		line-height: 30px;
		text-align: center;
		color: #5b805f;
	}
	.item-btn a {
		display: inline-block;
		color: #5b805f;
		width: 60px;
		height: 30px;
		border: 1px solid #5b805f;
		line-height: 30px;
	}
	#left-item li a {
		width: 100%;
	}
	#right-item li a {
		width: 100%;
	}
	.item-btn {
		float: right;
		margin-right: 110px;
		font-size: 16px;
		line-height: 55px;
	}
	#right-item ul,#left-item ul{
		margin-left: -15px;
		height: 450px;
	} 
	#right-item li a {

		color: white!important;
	}
	#left-item ul {
		border-radius: 0 0 0 40px;
		border-left: 1px solid #fec156;
		border-bottom: 1px solid #fec156;
		border-right: 1px solid #ffffff;
		border-top: 1px solid #ffffff;
	}
	#right-item ul {
		background: #5b805f;
		border-radius: 10px 50px 10px 10px;
	}
	#left-item li a {

		color: black!important;
	}
	.item-btn a {
		color: #5b805f!important
	}
	#cell {
		height: 450px;
		margin-top: 30px;
	}
	#cell-left {
		width: 555px;
		margin-left: 350px;
	}
	#cell-left img {
		display: inline-block;
		height: 73px;
		width: 349px;
		background: #555;
		border-radius: 5px;
		margin-top: 40px;
	}
	.cell-content {
		margin-top: 15px;
	}
	#cell-right {
		width: 680px;
		margin-left: 30px;
	}
	#cell-right ul{
		display: block;
		width: 100%;
	}
	#cell-right img {
		display: inline-block;
		width: 100%;
		height: 140px;
		background: #B3ACAC;
	}
	#cell-right li span {
		display: inline-block;
		width: 100%;
		height: 50px;
		background: #5b805f;
	}
	#cell-right li {
		display: inline-block;
		width: 210px;
		height: 190px;
		margin-top: 20px;
		margin-right: 10px;
	}
	#cell-right li h5 {
		display: block;
		color: #fff;
		font-size: 18px;
		text-align: center;
	}
	#footer {
		margin-top: 110px;
	}
	/* 分页的样式 */
	#page {
		width: 1260px;
		margin: 0 auto;
	}
	#page a {
		display: inline-block;
		width: 35px;
		height: 35px;
		border: 1px solid #5b805f;
		border-radius: 10px;
		margin-right: 10px;
		text-align: center;
		line-height: 32px;
		color: #5b805f;
	}
	#page .current {
		display: inline-block;
		width: 35px;
		height: 35px;
		border: 1px solid #5b805f;
		border-radius: 10px;
		margin-right: 10px;
		background: #5b805f;
		text-align: center;
		line-height: 32px;
		color: white;
	}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div id="header">
			<div class="row" id="banner">
				<div class="row" style="height:325px; margin-left:0px;">
					<img style="width: 1260px; " src="/zhaosheng/Public/Home/Image/title.png">
				</div>
				<div class="row" id="top">
					<!-- <ul>
						<li><a id="index" href="/zhaosheng/index.php/Home/Index/index">首页</a></li>
						<li><a id="academy" href="/zhaosheng/index.php/Home/Index/list_H/category/academy">学院概况</a></li>
						<li><a id="platform" href="/zhaosheng/index.php/Home/Index/list_H/category/platform">科研平台</a></li>
						<li><a id="teachers">师资力量</a>
							<ul class="sub_nav" id="teachers_sub">
								<li><a href="/zhaosheng/index.php/Home/Index/list_H/category/teachers/sub_category/star_teacher">杰出人才</a></li>
								<li><a href="/zhaosheng/index.php/Home/Index/list_H/category/teachers/sub_category/professor">教授</a></li>
								<li><a href="/zhaosheng/index.php/Home/Index/list_H/category/teachers/sub_category/associate_professor">副教授</a></li>
								<li><a href="/zhaosheng/index.php/Home/Index/list_H/category/teachers/sub_category/instructor">讲师</a></li>
								<li><a href="/zhaosheng/index.php/Home/Index/list_H/category/teachers/sub_category/support_staff">教辅人员</a></li>
								<li><a href="/zhaosheng/index.php/Home/Index/list_H/category/teachers/sub_category/official_staff">行政人员</a></li>
							</ul>
						</li>
						<li><a id="majors" href="/zhaosheng/index.php/Home/Index/list_H/category/majors">各系介绍</a></li>
						<li><a id="training_plan" href="/zhaosheng/index.php/Home/Index/list_H/category/training_plan">培养计划</a></li>
						<li><a id="employment" href="/zhaosheng/index.php/Home/Index/list_H/category/employment">就业形势</a></li>
						<li><a id="stuent_organization" href="/zhaosheng/index.php/Home/Index/list_H/category/student_organization">学生组织</a></li>
						<li><a id="for_new" href="/zhaosheng/index.php/Home/Index/list_H/category/for_new">新生服务</a></li> 
						<li><a id="downfile" href="/zhaosheng/index.php/Home/Index/list_H/category/downfile">下载专区</a></li>
					</ul> -->
				</div>
				<div class="row">
					<div class="row" id="slider">
						<?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$photo): $mod = ($i % 2 );++$i;?><div>
								<img class="pic" src="<?php echo ($photo["url"]); ?>">
								<span><a href="/zhaosheng/index.php/Home/Index/content/category/photo/id/<?php echo ($photo["id"]); ?>">
									<p><span style="">
									<?php echo ($photo["note"]); ?>
									</span></p>
								</a></span>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
					<!-- <div class="row">
						<div id="slider-footer">
							<a href="/zhaosheng/index.php/Home/Index/list_H/category/photo"><span>更多>></span></a>
						</div>
					</div> -->
				</div>
				<div class="row" id="nav-wrap">
						<ul>
							<li><a id="index" href="/zhaosheng/index.php/Home/Index/index">首页</a></li>
							<li><a id="academy" href="/zhaosheng/index.php/Home/Index/list_H/category/academy">学院概况</a></li>
							<li><a id="platform" href="/zhaosheng/index.php/Home/Index/list_H/category/platform">科研平台</a></li>
							<!-- <li><a id="teachers">师资力量</a>
								<ul class="sub_nav" id="teachers_sub">
									<li><a href="/zhaosheng/index.php/Home/Index/list_H/category/teachers/sub_category/star_teacher">杰出人才</a></li>
									<li><a href="/zhaosheng/index.php/Home/Index/list_H/category/teachers/sub_category/professor">教授</a></li>
									<li><a href="/zhaosheng/index.php/Home/Index/list_H/category/teachers/sub_category/associate_professor">副教授</a></li>
									<li><a href="/zhaosheng/index.php/Home/Index/list_H/category/teachers/sub_category/instructor">讲师</a></li>
									<li><a href="/zhaosheng/index.php/Home/Index/list_H/category/teachers/sub_category/support_staff">教辅人员</a></li>
									<li><a href="/zhaosheng/index.php/Home/Index/list_H/category/teachers/sub_category/official_staff">行政人员</a></li>
								</ul>
							</li> -->
							<li><a id="majors" href="/zhaosheng/index.php/Home/Index/list_H/category/majors">各系介绍</a></li>
							<li><a id="training_plan" href="/zhaosheng/index.php/Home/Index/list_H/category/training_plan">培养计划</a></li>
							<li><a id="employment" href="/zhaosheng/index.php/Home/Index/list_H/category/employment">就业形势</a></li>
							<li><a id="stuent_organization" href="/zhaosheng/index.php/Home/Index/list_H/category/student_organization">学生组织</a></li>
							<li><a id="for_new" href="/zhaosheng/index.php/Home/Index/list_H/category/for_new">新生服务</a></li>
							<li><a id="photo" href="/zhaosheng/index.php/Home/Index/list_H/category/photo">学生风采</a></li> 
							<!--<li><a id="downfile" href="/zhaosheng/index.php/Home/Index/list_H/category/downfile">下载专区</a></li> -->
						</ul>
					</div>
			</div>
		</div>
		<div class="row" id="item" style="width: 1920px;">
			<div class="col-xs-6" id="left-item">
				<div class="row">
					<span class="item-title">
						通知公告
					</span>
					<span class="item-btn"><a href="/zhaosheng/index.php/Home/Index/list_H/category/notice">更多</a></span>
				</div>
				<div class="row item-content">
					<ul>
						<?php if(is_array($notice)): $i = 0; $__LIST__ = $notice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$notice): $mod = ($i % 2 );++$i;?><li><a href="/zhaosheng/index.php/Home/Index/content/category/notice/id/<?php echo ($notice["id"]); ?>"><?php echo ($notice["title"]); ?></a><span style="font-size:18px;"><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
			<div class="col-xs-6" id="right-item">
				<div class="row">
					<span class="item-title">
						名师风采
					</span>
					<span class="item-btn"><a href="/zhaosheng/index.php/Home/Index/list_H/category/famous">更多</a></span>
				</div>
				<div class="row item-content">
					<ul>
						<?php if(is_array($famous)): $i = 0; $__LIST__ = $famous;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$famous): $mod = ($i % 2 );++$i;?><li><a href="/zhaosheng/index.php/Home/Index/content/category/famous/id/<?php echo ($famous["id"]); ?>"><i class="fa "></i><?php echo ($famous["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="row" id="cell" style="width: 1920px;">
			<div id="cell-left" class="col-xs-6">
				<div class="row">
					<span class="item-title">
						专业介绍
					</span>
				</div>
				<div class="row cell-content">
					<a id="bachelor" href="/zhaosheng/index.php/Home/Index/list_H/category/bachelor">
						<img src="/zhaosheng/Public/Home/Image/bachelor.png">
					</a>
					<a id="master" href="/zhaosheng/index.php/Home/Index/list_H/category/master">
						<img src="/zhaosheng/Public/Home/Image/master.png">
					</a>
					<a id="doctor" href="/zhaosheng/index.php/Home/Index/list_H/category/doctor">
						<img src="/zhaosheng/Public/Home/Image/doctor.png">
					</a>
				</div>
			</div>
			<div id="cell-right" class="col-xs-6">
				<div class="row">
					<span class="item-title">
						视频点播
					</span>
					<span class="item-btn"><a href="/zhaosheng/index.php/Home/Index/list_H/category/video">更多</a></span>
				</div>
				<div class="row cell-content">
					<ul>
						<?php if(is_array($video)): $i = 0; $__LIST__ = $video;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$video): $mod = ($i % 2 );++$i;?><a href="<?php echo ($video["video_url"]); ?>"><li>
							<img src="<?php echo ($video["photo_url"]); ?>">
							<span><h5><?php echo ($video["name"]); ?></h5></span>
						</li></a><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
		</div>
		<div id="footer">
	<div class="row">
		<ol class="breadcrumb" style="font-size:18px;">
			<li class="active">友情链接</li>
		    <li><a href="http://www.scau.edu.cn">华南农业大学</a></li>
		    <li><a href="http://zyhjxy.scau.edu.cn">资源环境学院</a></li>
		</ol>
	</div>
	<div class="row">
		<img src="/zhaosheng/Public/Home/Image/footer.png">
	</div>
</div>
	</div>
</body>
</html>
<script type="text/javascript">
	InitNav($('#nav-wrap ul li a'),"<?php echo ($nav["category"]); ?>");
	InitSlider($('#slider div'));
	InitShadow($('#cell-right ul li'));
	InitShadow($('#cell-left img'));
	InitItemLi($("#left-item li a"));
	AddNav($("#teachers"),$("#teachers_sub"));
</script>