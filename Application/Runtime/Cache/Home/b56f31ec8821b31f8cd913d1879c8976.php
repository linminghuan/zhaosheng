<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	<title></title>
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
	<link rel="stylesheet" type="text/css" href="/zhaosheng/Public/Home/Css/common.css">
	<style type="text/css">
	#header {
		height: 400px;
		background:url('/zhaosheng/Public/Home/Image/list_header.png');
	}
	#banner {
		height: 400px;
		background-color: rgba(225,225,225,0);
	}
	#body {
		width:1260px;
		min-height:560px;
		margin: 50px auto;

		border-top: 6px solid #5b805f;
	}
	#body .breadcrumb {
		margin: 20px auto;
		border-radius: 0px 0px 0 0 ;
		font-size: 18px;
		color: #5b805f!important;
	}
	#body .breadcrumb a {
		color: #5b805f!important;
	}
	#body .breadcrumb a:hover {
		text-decoration: underline!important;
	}
	#body ul li {
		font-size: 20px;
		display: block;
		width: 85%;
		margin-left: 25px;
		margin-top: 15px;
	}
	#body ul span {
		float: right;
	}

	</style>
</head>
<body>
	<div class="container-fliud" style="width: 1920px;">
		<div id="header">
	<div class="row" id="banner">
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
				<!-- <li><a id="downfile" href="/zhaosheng/index.php/Home/Index/list_H/category/downfile">下载专区</a></li> -->
			</ul>
		</div>
	</div>
</div>
		<div id="body">
			<ol class="breadcrumb">
			    <li><a href="/zhaosheng/index.php/Home/Index/index"><?php text("index"); ?></a></li>
			    <li><?php text($nav['category']); ?></li>
			</ol>
			<div>
				<ul>
					<?php if($nav["category"] == 'photo'): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li><i class="fa fa-file"></i>&nbsp&nbsp&nbsp&nbsp&nbsp<a href="/zhaosheng/index.php/Home/Index/content/category/<?php echo ($nav["category"]); ?>/id/<?php echo ($list["id"]); ?>">
							<?php echo ($list["note"]); ?>
						</a><span><?php echo (date("Y-m-d",$list["update_at"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
					<?php elseif($nav["category"] == 'video'): ?>
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li><i class="fa fa-file"></i>&nbsp&nbsp&nbsp&nbsp&nbsp<a href="<?php echo ($list["video_url"]); ?>">
							<?php echo ($list["name"]); ?>
						</a><span><?php echo (date("Y-m-d",$list["update_at"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
					<!-- <?php elseif($nav["category"] == 'downfile'): ?>
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li><i class="fa fa-file"></i>&nbsp&nbsp&nbsp&nbsp&nbsp<a href="<?php echo ($list["url"]); ?>">
							<?php echo ($list["name"]); ?>
						</a><span><?php echo (date("Y-m-d",$list["update_at"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?> -->
					<?php else: ?>
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li><i class="fa fa-file"></i>&nbsp&nbsp&nbsp&nbsp&nbsp<a href="/zhaosheng/index.php/Home/Index/content/category/<?php echo ($nav["category"]); ?>/id/<?php echo ($list["id"]); ?>/sub_category/<?php echo ($list["sub_category"]); ?>">
							<?php echo ($list["title"]); ?>
						</a><span><?php echo (date("Y-m-d",$list["update_at"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; endif; ?>
					<!-- <?php switch($nav["category"]): case "photo": if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li><i class="fa fa-file"></i>&nbsp&nbsp&nbsp&nbsp&nbsp<a href="/zhaosheng/index.php/Home/Index/content/category/<?php echo ($nav["category"]); ?>/id/<?php echo ($list["id"]); ?>">
								<?php echo ($list["note"]); ?>
							</a><span><?php echo (date("Y-m-d",$list["update_at"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; break;?>
					    <?php case "video": if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li><i class="fa fa-file"></i>&nbsp&nbsp&nbsp&nbsp&nbsp<a href="<?php echo ($list["video_url"]); ?>">
								<?php echo ($list["name"]); ?>
							</a><span><?php echo (date("Y-m-d",$list["update_at"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; break;?>
					    <?php default: ?>
					    	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li><i class="fa fa-file"></i>&nbsp&nbsp&nbsp&nbsp&nbsp<a href="/zhaosheng/index.php/Home/Index/content/category/<?php echo ($nav["category"]); ?>/id/<?php echo ($list["id"]); ?>">
								<?php echo ($list["title"]); ?>
							</a><span><?php echo (date("Y-m-d",$list["update_at"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; endswitch;?> -->
				</ul>
			</div>
		</div>
		<div class="result page" id="page"><?php echo ($page); ?></div>
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
	InitNav($('#nav-wrap ul li a'));
	AddNav($("#teachers"),$("#teachers_sub"));
</script>
<?php
 function text($param){ switch ($param){ case "index": echo "首页"; break; case "academy": echo "学院概况"; break; case "platform": echo "科研平台"; break; case "teachers": echo "师资力量"; break; case "majors": echo "各系介绍"; break; case "student_organization": echo "学生组织"; break; case "for_new": echo "新生服务"; break; case "downfile": echo "下载专区"; break; case "bachelor": echo "本科专业介绍"; break; case "master": echo "硕士专业介绍"; break; case "doctor": echo "博士专业介绍"; break; case "photo": echo "学生风采"; break; case "notice": echo "通知公告"; break; case "famous": echo "名师风采"; break; case "video": echo "视频点播"; break; case "speciality_advantage": echo "专业优势"; break; case "employment": echo "就业形势"; break; case "training_plan": echo "培养计划"; break; } } ?>