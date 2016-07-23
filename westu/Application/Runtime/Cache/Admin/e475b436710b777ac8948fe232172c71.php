<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>在线课堂管理后台</title>

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
			<div style="float: left"><span>在线课堂管理中心</span></div>
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
<style>
	table thead tr{
		text-align: center;
	}
</style>
<div style="margin-left:180px;margin-top:60px;padding-bottom:50px;overflow: hidden;">
	<div class="alert alert-info" role="alert">
		<h1>用户列表</h1></div>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>序号</th>
				<th>用户名</th>
				<th>昵称</th>
				<th>用户邮箱</th>
				<th>最后登录时间</th>
				<th>登录次数</th>
				<th >审核</th>
				<th >锁定用户</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $k=>$C): ?><tr>
					<td><?php echo ($k+1); ?></td>
					<td><?php echo ($C["user"]); ?></td>
					<td><?php echo ($C["username"]); ?></td>
					<td><?php echo ($C["email"]); ?></td>
					<td><?php echo ($C["lasttime"]); ?></td>
					<td><?php echo ($C["times"]); ?></td>
					<td>
						<?php if($C['tag'] == 0 ): ?><label class="btn btn-warning"  style="width: 82px;">管理员</lable>
							<?php elseif($C['tag'] == 1 ): ?> <label class="btn btn-primary" >学生用户</lable>
							<?php elseif($C['tag'] == 2 ): ?> <label class="btn btn-info">老师用户</lable><?php endif; ?>

					</td>
					<td>
						<?php if($C['status'] == 1 ): ?><label class="btn btn-primary" type="button" style="background: black;color:white;width: 82px;">已锁定</label> |
							<a href="/westu/index.php/Admin/User/userUnLock/id/<?php echo ($C['uid']); ?>" class="primary" ><button class="btn btn-primary" type="button"style="background: orange;color:white;width: 82px;">解除</button></a>
							<?php elseif($C['status'] == 0 ): ?> <a href="/westu/index.php/Admin/User/userDel/id/<?php echo ($C['uid']); ?>" class="primary" ><button class="btn btn-danger" type="button">删除用户</button></a><?php endif; ?>
					</td>
				</tr><?php endforeach; endif; ?>

		</tbody>

	</table>
	<?php echo ($page); ?>
</div>

</body>

</html>