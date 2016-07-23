<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>作品分享管理后台</title>

		<link rel="stylesheet" href="/westu/Application/Admin/View/Public/Admin/css/common.css" type="text/css" media="screen" />
		<script type="text/javascript" src="/westu/Application/Admin/View/Public/Admin/js/jquery.min.js"></script>
		<script type="text/javascript" src="/westu/Application/Admin/View/Public/Admin/js/tendina.min.js"></script>
		<script type="text/javascript" src="/westu/Application/Admin/View/Public/Admin/js/common.js"></script>
		<link rel="stylesheet" href="/westu/Application/Admin/View/Public/Admin/css/bootstrap.min.css">
    	<link rel="stylesheet" href="/westu/Application/Admin/View/Public/Admin/font-awesome/css/font-awesome.min.css">
		<script src="/westu/Application/Admin/View/Public/Admin/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="/westu/Application/Admin/View/Public/Admin/css/index.css" type="text/css" media="screen" />


	</head>

	<body style="overflow: auto;">
		<!--顶部-->
		<div class="top" style="position: fixed;top:0;z-index: 999;">
			<div style="float: left"><span>作品分享管理中心</span></div>
			<div id="ad_setting" class="ad_setting">
				<span style="margin-right:14px;font-size: 1.8rem;">欢迎您：<?php echo (session('username')); ?></span>
				<a class="ad_setting_a" style="font-size: 1.8rem;" href="<?php echo U('User/logout');?>">注销</a>

			</div>
		</div>
		<!--顶部结束-->
		<!--菜单-->
		<div class="left-menu" style="margin-top:60px;">
			<ul id="menu">
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta" href="<?php echo U('Index/index');?>" ><span class="glyphicon glyphicon-home"></span>欢迎</a>
				</li>
				<li class="menu-list">
					<a href="<?php echo U('User/UserList');?>" style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-user"></span>用户管理</a>
					<ul>
						<li><a href="<?php echo U('User/Stulist');?>">学生用户列表</a></li>
						<li><a href="<?php echo U('User/Tealist');?>">老师用户列表</a></li>
					</ul>
				</li>
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-th-list"></span>课程管理</a>
					<ul><li><a href="<?php echo U('Works/worksList');?>" >作品列表</a></li>
					</ul>
				</li>
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-comment"></span>评论管理</a>
					<ul><li><a href="#" >评论列表</a></li>
					</ul>
				</li>
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-warning-sign"></span>系统管理</a>
					<ul><li><a href="#" >系统通知</a></li>
						<li><a href="#" >意见反馈</a></li>
					</ul>
				</li>
			</ul>
		</div>
<div style="margin-left:180px;margin-top:60px;padding-bottom:50px;overflow: hidden;padding:30px;">
		<div class="jumbotron" style="padding: 30px;">
			<h1>管理员</h1>

			<p>欢迎登陆大学生作品分享网站后台管理系统.</p>

		</div>
    <div class="row" style="margin-left:0;">

        <div class="col-lg-3" style="width: 25%;margin-bottom:10px;">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 text-center">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-6 text-center" style="margin-left:0;margin-top:10px;">
                            <p class="announcement-heading"><?php echo (count($list)); ?></p>
                            <p class="announcement-text">用户</p>
                        </div>
                    </div>
                </div>


                <a href="<?php echo U('User/UserList');?>">
                    <div class="panel-footer announcement-bottom"  style="color:rgb(138,110,60)">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                管理所有用户
                            </div>
                           <div class="col-xs-6 text-center" style="margin-left:0;">
                                <i class="fa fa-arrow-circle-right"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>


        <div class="col-lg-3" style="width: 25%;margin-bottom:10px;">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 text-center">
                            <i class="fa fa-edit fa-5x"></i>
                        </div>
                        <div class="col-xs-6 text-center" style="margin-left:0;margin-top:10px;">
                            <p class="announcement-heading"><?php echo (count($worksNum)); ?></p>
                            <p class="announcement-text">老师用户</p>
                        </div>
                    </div>
                </div>
                <a href="<?php echo U('User/Tealist');?>">
                    <div class="panel-footer announcement-bottom" style="color:rgb(169,69,66)">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                管理老师用户
                            </div>
                            <div class="col-xs-6 text-center" style="margin-left:0;">
                                <i class="fa fa-arrow-circle-right"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3" style="width: 25%;margin-bottom:10px;">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 text-center">
                            <i class="glyphicon glyphicon-th" style="font-size: 68px"></i>
                        </div>
                        <div class="col-xs-6 text-center" style="margin-left:0;margin-top:10px;">
                            <p class="announcement-heading"><?php echo (count($couresNum)); ?></p>
                            <p class="announcement-text">上传课程作品</p>
                        </div>
                    </div>
                </div>
                <a href="<?php echo U('Works/worksList');?>">
                    <div class="panel-footer announcement-bottom" style="color:rgb(60,120,60)">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                管理课程作品
                            </div>
                            <div class="col-xs-6 text-center" style="margin-left:0;">
                                <i class="fa fa-arrow-circle-right"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3" style="width: 25%;margin-bottom:10px;">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 text-center" >
                            <i class="fa  fa-comment fa-5x"></i>
                        </div>
                        <div class="col-xs-6 text-center" style="margin-left:0;margin-top:10px;">
                            <p class="announcement-heading">456</p>
                            <p class="announcement-text">留言</p>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer announcement-bottom" style="color:rgb(50,110,145)">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                查看留言
                            </div>
                            <div class="col-xs-6 text-center" style="margin-left:0;">
                                <i class="fa fa-arrow-circle-right"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
		<div class="alert alert-success" role="alert" style="width: 70%;">最后登陆时间:&nbsp;<span style="color:black;"><?php echo ($adminInfo["lasttime"]); ?></span></div>
		<div class="alert alert-warning" role="alert" style="width: 30%;">登陆次数:&nbsp;<span style="color:black;"><?php echo ($adminInfo["times"]); ?></span></div>

</div>

</body>
</html>