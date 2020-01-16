<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <style>
        html {
        position: relative;
        min-height: 100%;
        }

        body {
        /* Margin bottom by footer height */
        margin-bottom: 140px;
        /* margin-top: 50px; */
        }
    </style>
  </head>

  <body>
  <a name="head"></a><!-- 这是一个锚点，在show中的底部引用 -->
  <nav class="navbar navbar-default navbar-inverse">
		<div class="container-fluid">
			<div class="col-md-push-3">
        <!-- 导航栏头部，一般是有连接的logo -->
				<div class="navbar-header">
					<!-- 在链接里嵌套图片 -->
					<a href="<?php echo site_url('message');?>"><img src="<?php echo base_url();?>assets/images/logo2.png" height="50"></a>
				</div>
			</div>
			<!-- 导航链接 -->
			<!-- collapse在小窗口时出现 -->
			<div class="collapse navbar-collapse">
				<!-- nav是导航栏的链接基类，navbar-nav是导航栏的链接样式，navbar-left,navbar-right链接文本图片对齐 -->
				<ul class="nav navbar-nav">
          <!-- active默认激活 -->
          <li class="active"><a href="#"><strong>Home</strong></a></li>
					<li><a href="https://v3.bootcss.com/"><strong>Bootstrap</strong></a></li>
					<li><a href="https://www.jqueryui.org.cn/"><strong>JQueryUI</strong></a></li>
					<li><a href="https://codeigniter.org.cn/user_guide/"><strong>CodeIgniter</strong></a></li>
				</ul>
			</div>
		</div>
	</nav>
  