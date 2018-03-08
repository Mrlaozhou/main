<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>layui后台管理模板</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" href="favicon.ico">
	<link rel="stylesheet" href="layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="css/public.css">
	<script src="layui/layui.js"></script>
	<script src="js/public.js"></script>
</head>
<body>
	<div class="layui-header self-header">
		<div class="layui-container height-max">
			<div class="layui-row height-max">
				<div class="layui-col-md2 layui-logo self-logo .self-left">
					LaoZhou
				</div>

				<div class="layui-col-md5"></div>

				<div class="layui-col-md5 layui-nav self-nav">
					<div class="layui-nav-item layui-this layui-col-md3"><a target="_main" href="http://101.132.107.193/">主页</a></div>
					<div class="layui-nav-item layui-col-md3"><a target="_main" href="javascript:;">社区</a></div>
					<div class="layui-nav-item layui-col-md3"><a target="_main" href="http://101.132.107.193:8081/">笔记</a></div>
					<div class="layui-nav-item layui-col-md3"><a target="_main" href="javascript:;">登录</a></div>
				</div>
			</div>
		</div>
	</div>

	<iframe id="_container" class="height-max width-max" name="_main" src="http://101.132.107.193/" scrolling="no" frameborder="0"></iframe>

	<div id="id1" class="layui-footer self-footer">
		@ Copyright 2018 by LaoZhou
	</div>
</body>
</html>